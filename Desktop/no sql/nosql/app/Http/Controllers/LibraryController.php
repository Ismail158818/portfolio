<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Fun_Services\Fun_Library;
use App\Http\Requests\StoreLibraryItemRequest;
use App\Models\DigitalItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class LibraryController extends Controller
{
    // عرض المكتبة الرئيسية مع الفلاتر
    public function Browse_Items(Request $request)
    {
        $library = new Fun_Library;
        $data = $library->browse_items_services($request);

        return view('library.index', [
            'items' => $data['items'],
            'types' => $data['types'],
            'categories' => $data['categories'],
        ]);
    }

    // رفع ملف جديد (أدمن / أبلودر)
    public function Save_Item(StoreLibraryItemRequest $request): RedirectResponse
    {
        if (! Auth::check()) {
            return redirect()->route('register')->with('info', 'Please register or login to upload a file.');
        }

        $library = new Fun_Library;
        $user = $library->touch_login_services();

        if (! $library->can_upload_services($user)) {
            abort(403, 'Only Admin or Uploader can upload files.');
        }

        $library->save_item_services(
            $request->validated(),
            $request->file('file'),
            $request->file('cover_image')
        );

        return redirect()->route('home')->with('success', 'File uploaded successfully.');
    }

    // تحميل ملف (يتطلب تسجيل دخول)
    public function Download_Item(DigitalItem $item): RedirectResponse|BinaryFileResponse
    {
        if (! Auth::check()) {
            return redirect()->route('login')->with('info', 'Please login to download this file.');
        }

        $library = new Fun_Library;
        $user = $library->touch_login_services();

        if (! $library->can_download_services($user)) {
            abort(403, 'You are not allowed to download files.');
        }

        $filePath = $library->download_item_services($item);

        if (! $filePath) {
            return back()->with('error', 'The requested file does not exist anymore.');
        }

        return response()->download($filePath, $item->original_name);
    }

    // حذف ملف (أدمن فقط)
    public function Delete_Item(DigitalItem $item): RedirectResponse
    {
        $library = new Fun_Library;
        $user = $library->touch_login_services();

        if ($user->role !== 'Admin') {
            abort(403, 'Only Admin can delete files.');
        }

        $library->delete_item_services($item);

        return redirect()->route('home')->with('success', 'File deleted successfully.');
    }
}
