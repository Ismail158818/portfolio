<?php

namespace App\Http\Requests;

use App\Models\DigitalItem;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreLibraryItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        $user = Auth::user();

        return $user instanceof User
            && in_array($user->role, ['Admin', 'Uploader'], true);
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', Rule::in(DigitalItem::categoryList())],
            'keywords' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
            'file' => ['required', 'file', 'mimes:pdf,png,jpg,jpeg,mp3,wav,m4a,ogg,aac,flac,txt,csv,md,json,xml,rtf,doc,docx', 'max:20480'],
            'cover_image' => ['nullable', 'image', 'mimes:png,jpg,jpeg', 'max:5120'],
        ];
    }
}
