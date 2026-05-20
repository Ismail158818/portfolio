<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Fun_Services\Fun_Auth;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class AuthController extends Controller
{
    // صفحة تسجيل الدخول / التسجيل
    public function showAuthForm(): View
    {
        return view('auth.auth');
    }

    // تسجيل الدخول
    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (! Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return back()->withErrors(['email' => __('auth.failed')]);
        }

        $request->session()->regenerate();

        return redirect()->intended(route('home'));
    }

    // إنشاء حساب جديد
    public function register(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $auth = new Fun_Auth;
        $user = $auth->register_user_services($validated);

        Auth::login($user);

        return redirect(route('home'));
    }

    // تسجيل الخروج
    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
