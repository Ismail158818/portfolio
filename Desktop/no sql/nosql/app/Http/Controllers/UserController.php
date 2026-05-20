<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Fun_Services\Fun_Admin;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // صفحة إدارة المستخدمين
    public function index()
    {
        if (Auth::user()->role !== 'Admin') {
            abort(403);
        }

        $admin = new Fun_Admin;
        $users = $admin->list_users_services();

        return view('admin.users', compact('users'));
    }

    // إضافة مستخدم جديد كأبلودر
    public function Save_User(StoreUserRequest $request): RedirectResponse
    {
        if (Auth::user()->role !== 'Admin') {
            abort(403);
        }

        $admin = new Fun_Admin;
        $admin->save_user_services($request->validated());

        return back()->with('success', 'User added successfully as Uploader.');
    }

    // ترقية مستخدم إلى أبلودر
    public function assignUploader(User $user): RedirectResponse
    {
        if (Auth::user()->role !== 'Admin') {
            abort(403);
        }

        $admin = new Fun_Admin;
        $error = $admin->assign_uploader_services($user);

        return $error
            ? back()->with('error', $error)
            : back()->with('success', 'User role updated to Uploader.');
    }

    // إرجاع مستخدم إلى قارئ
    public function assignReader(User $user): RedirectResponse
    {
        if (Auth::user()->role !== 'Admin') {
            abort(403);
        }

        $admin = new Fun_Admin;
        $error = $admin->assign_reader_services($user);

        return $error
            ? back()->with('error', $error)
            : back()->with('success', 'User role updated to Reader.');
    }

    // حذف مستخدم
    public function destroy(User $user): RedirectResponse
    {
        if (Auth::user()->role !== 'Admin') {
            abort(403);
        }

        $admin = new Fun_Admin;
        $error = $admin->delete_user_services($user, (string) Auth::id());

        return $error
            ? back()->with('error', $error)
            : back()->with('success', 'User deleted successfully.');
    }
}
