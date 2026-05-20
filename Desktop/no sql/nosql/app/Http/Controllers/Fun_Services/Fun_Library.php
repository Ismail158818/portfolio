<?php

namespace App\Http\Controllers\Fun_Services;

use App\Models\DigitalItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Fun_Library
{
    public function browse_items_services(Request $request): array
    {
        $items = DigitalItem::query()
            ->with('uploader')
            ->when($request->query('search'), function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('title', 'like', "%{$search}%")
                        ->orWhere('author', 'like', "%{$search}%")
                        ->orWhere('keywords', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%");
                });
            })
            ->when($request->query('keyword'), fn ($query, $keyword) => $query->where('keywords', 'like', '%'.$keyword.'%'))
            ->when($request->query('type'), fn ($query, $type) => $query->where('file_type', $type))
            ->when($request->query('category'), fn ($query, $category) => $query->where('category', $category))
            ->when($request->query('author'), fn ($query, $author) => $query->where('author', 'like', "%{$author}%"))
            ->orderByDesc('created_at')
            ->paginate(12)
            ->withQueryString();

        return [
            'items' => $items,
            'types' => ['pdf' => 'PDF', 'image' => 'Image', 'audio' => 'Audio'],
            'categories' => DigitalItem::categoryList(),
        ];
    }

    public function save_item_services(array $data, UploadedFile $file, ?UploadedFile $cover = null): DigitalItem
    {
        $originalName = $file->getClientOriginalName();
        $filename = time().'_'.preg_replace('/[^A-Za-z0-9_\-.]/', '_', $originalName);
        $path = $file->storeAs('library', $filename, 'public');

        $coverPath = null;
        if ($cover) {
            $coverName = 'cover_'.time().'_'.preg_replace('/[^A-Za-z0-9_\-.]/', '_', $cover->getClientOriginalName());
            $coverPath = $cover->storeAs('library/covers', $coverName, 'public');
        }

        return DigitalItem::create([
            'title' => $data['title'],
            'author' => $data['author'],
            'category' => $data['category'],
            'keywords' => trim((string) ($data['keywords'] ?? '')),
            'description' => $data['description'] ?? null,
            'file_type' => $this->map_file_type_services(strtolower($file->extension())),
            'original_name' => $originalName,
            'filename' => $filename,
            'path' => $path,
            'cover_path' => $coverPath,
            'uploaded_by' => Auth::id(),
        ]);
    }

    public function download_item_services(DigitalItem $item): ?string
    {
        $disk = Storage::disk('public');

        if (! $disk->exists($item->path)) {
            return null;
        }

        $item->increment('download_count');

        return $disk->path($item->path);
    }

    public function delete_item_services(DigitalItem $item): void
    {
        $disk = Storage::disk('public');

        if ($disk->exists($item->path)) {
            $disk->delete($item->path);
        }

        if ($item->cover_path && $disk->exists($item->cover_path)) {
            $disk->delete($item->cover_path);
        }

        $item->delete();
    }

    public function touch_login_services(): User
    {
        $user = Auth::user();

        if (! $user instanceof User) {
            abort(403, 'You must be logged in.');
        }

        $user->update(['last_login_at' => now()]);

        return $user;
    }

    public function can_upload_services(User $user): bool
    {
        return in_array($user->role, ['Admin', 'Uploader'], true);
    }

    public function can_download_services(User $user): bool
    {
        return in_array($user->role, ['Admin', 'Uploader', 'Reader'], true);
    }

    private function map_file_type_services(string $extension): string
    {
        return match ($extension) {
            'pdf' => 'pdf',
            'png', 'jpg', 'jpeg' => 'image',
            'mp3', 'wav', 'm4a', 'ogg', 'aac', 'flac' => 'audio',
            default => 'unknown',
        };
    }
}
