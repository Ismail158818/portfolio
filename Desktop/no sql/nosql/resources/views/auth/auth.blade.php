<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Digital Library') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
            
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }
            
            body {
                background: radial-gradient(circle at top left, rgba(168, 242, 175, 0.35), transparent 25%),
                            radial-gradient(circle at bottom right, rgba(138, 193, 118, 0.22), transparent 18%),
                            linear-gradient(180deg, #f1fbf3 0%, #e8f7ee 45%, #d8f0dd 100%);
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 20px;
            }
            
            .auth-container {
                background-color: #fff;
                border-radius: 20px;
                box-shadow: 0 15px 30px rgba(47, 122, 61, 0.2);
                border: 1px solid rgba(47, 122, 61, 0.15);
                position: relative;
                overflow: hidden;
                width: 1100px;
                max-width: 95vw;
                min-height: 650px;
                padding: 25px 0;
            }
            
            .auth-container h1 {
                font-weight: 600;
                margin: 0;
                color: #333;
                font-size: 28px;
            }
            
            .auth-container p {
                font-size: 14px;
                line-height: 20px;
                letter-spacing: 0.3px;
                margin: 20px 0;
                color: #666;
            }
            
            .auth-container span {
                font-size: 13px;
                color: #666;
            }
            
            .auth-container a {
                color: #2f7a3d;
                font-size: 13px;
                text-decoration: none;
                margin: 15px 0 10px;
                transition: color 0.3s ease;
            }
            
            .auth-container a:hover {
                color: #1a5c2b;
            }
            
            .auth-container button {
                background: linear-gradient(135deg, #2f7a3d 0%, #1a5c2b 100%);
                color: #fff;
                font-size: 13px;
                padding: 12px 45px;
                border: none;
                border-radius: 50px;
                font-weight: 600;
                letter-spacing: 0.5px;
                text-transform: uppercase;
                margin-top: 10px;
                cursor: pointer;
                transition: all 0.3s ease;
            }
            
            .auth-container button:hover {
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(47, 122, 61, 0.4);
            }
            
            .auth-container button.hidden {
                background: transparent;
                border: 2px solid #fff;
            }
            
            .auth-container form {
                background-color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                padding: 0 40px;
                height: 100%;
                text-align: left;
            }
            
            .auth-container input {
                background-color: #f5f5f5;
                border: none;
                margin: 8px 0;
                padding: 12px 18px;
                font-size: 14px;
                border-radius: 50px;
                width: 100%;
                outline: none;
                transition: all 0.3s ease;
                color: #333;
            }
            
            .auth-container input::placeholder {
                color: #999;
            }
            
            .auth-container input:focus {
                box-shadow: 0 0 0 3px rgba(47, 122, 61, 0.4);
                background-color: #fff;
                border: 1px solid #2f7a3d;
            }
            
            .form-container {
                position: absolute;
                top: 0;
                height: 100%;
                transition: all 0.6s ease-in-out;
                padding: 0;
            }
            
            .sign-in {
                left: 0;
                width: 50%;
                z-index: 2;
            }
            
            .auth-container.active .sign-in {
                transform: translateX(100%);
            }
            
            .sign-up {
                left: 0;
                width: 50%;
                opacity: 0;
                z-index: 1;
            }
            
            .auth-container.active .sign-up {
                transform: translateX(100%);
                opacity: 1;
                z-index: 5;
                animation: move 0.6s;
            }
            
            @keyframes move {
                0%, 49.99% {
                    opacity: 0;
                    z-index: 1;
                }
                50%, 100% {
                    opacity: 1;
                    z-index: 5;
                }
            }
            
            .social-icons {
                margin: 20px 0;
                display: flex;
                gap: 15px;
            }
            
            .social-icons a {
                border: 1px solid #ddd;
                border-radius: 50%;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                width: 45px;
                height: 45px;
                transition: all 0.3s ease;
            }
            
            .social-icons a:hover {
                transform: translateY(-3px);
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            }
            
            .icon i {
                font-size: 20px;
            }
            
            .toggle-container {
                position: absolute;
                top: 0;
                left: 50%;
                width: 50%;
                height: 100%;
                overflow: hidden;
                transition: all 0.6s ease-in-out;
                border-radius: 150px 0 0 100px;
                z-index: 1000;
            }
            
            .auth-container.active .toggle-container {
                transform: translateX(-100%);
                border-radius: 0 150px 100px 0;
            }
            
            .toggle {
                background: linear-gradient(135deg, #2f7a3d 0%, #1a5c2b 100%);
                height: 100%;
                color: #fff;
                position: relative;
                left: -100%;
                width: 200%;
                transform: translateX(0);
                transition: all 0.6s ease-in-out;
            }
            
            .auth-container.active .toggle {
                transform: translateX(50%);
            }
            
            .toggle-panel {
                position: absolute;
                width: 50%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                padding: 0 40px;
                text-align: left;
                top: 0;
                transform: translateX(0);
                transition: all 0.6s ease-in-out;
            }
            
            .toggle-left {
                transform: translateX(-200%);
            }
            
            .auth-container.active .toggle-left {
                transform: translateX(0);
            }
            
            .toggle-right {
                right: 0;
                transform: translateX(0);
            }
            
            .auth-container.active .toggle-right {
                transform: translateX(200%);
            }
            
            .toggle-panel h1 {
                color: #fff;
                font-size: 32px;
                margin-bottom: 15px;
            }
            
            .toggle-panel p {
                color: #fff;
                font-size: 15px;
                line-height: 1.5;
                margin: 20px 0 30px;
            }
            
            .input-group {
                position: relative;
                width: 100%;
                margin-bottom: 10px;
            }
            
            .input-icon {
                position: absolute;
                left: 18px;
                top: 50%;
                transform: translateY(-50%);
                color: #2f7a3d;
                font-size: 16px;
                z-index: 2;
            }
            
            .input-group input {
                padding-left: 45px !important;
            }
        </style>
    </head>
    <body>
        @if(session('info'))
            <div style="position:fixed;top:20px;left:50%;transform:translateX(-50%);z-index:9999;background:#d1e7dd;color:#0f5132;padding:12px 24px;border-radius:8px;">
                {{ session('info') }}
            </div>
        @endif
        <div class="auth-container" id="authContainer">
            <div class="form-container sign-up">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1>Create Account</h1>
                    <div class="social-icons">
                        <a href="#" class="icon"><i class="fab fa-google"></i></a>
                        <a href="#" class="icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="icon"><i class="fab fa-github"></i></a>
                        <a href="#" class="icon"><i class="fab fa-linkedin"></i></a>
                    </div>
                    <span>or use your email for registration</span>
                    
                    <div class="input-group">
                        <span class="input-icon"><i class="fa fa-user"></i></span>
                        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name">
                    </div>
                    @error('name')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                    
                    <div class="input-group">
                        <span class="input-icon"><i class="fa fa-envelope"></i></span>
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="username">
                    </div>
                    @error('email')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                    
                    <div class="input-group">
                        <span class="input-icon"><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" placeholder="Password" required autocomplete="new-password">
                    </div>
                    @error('password')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                    
                    <div class="input-group">
                        <span class="input-icon"><i class="fa fa-lock"></i></span>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                    </div>
                    
                    <button type="submit">Sign Up</button>
                </form>
            </div>
            
            <div class="form-container sign-in">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1>Sign In</h1>
                    <div class="social-icons">
                        <a href="#" class="icon"><i class="fab fa-google"></i></a>
                        <a href="#" class="icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="icon"><i class="fab fa-github"></i></a>
                        <a href="#" class="icon"><i class="fab fa-linkedin"></i></a>
                    </div>
                    <span>or use your email for login</span>
                    
                    <div class="input-group">
                        <span class="input-icon"><i class="fa fa-envelope"></i></span>
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus autocomplete="username">
                    </div>
                    @error('email')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                    
                    <div class="input-group">
                        <span class="input-icon"><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" placeholder="Password" required autocomplete="current-password">
                    </div>
                    @error('password')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                    
                    <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                    <button type="submit">Sign In</button>
                </form>
            </div>
            
            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                        <h1>Welcome Back!</h1>
                        <p>Enter your personal details to use all of site features</p>
                        <button class="hidden" id="signInBtn">Sign In</button>
                    </div>
                    <div class="toggle-panel toggle-right">
                        <h1>Hello, Friend!</h1>
                        <p>Register with your personal details to use all of site features</p>
                        <button class="hidden" id="signUpBtn">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            const container = document.getElementById('authContainer');
            const signUpBtn = document.getElementById('signUpBtn');
            const signInBtn = document.getElementById('signInBtn');
            
            signUpBtn.addEventListener('click', () => {
                container.classList.add("active");
            });
            
            signInBtn.addEventListener('click', () => {
                container.classList.remove("active");
            });
            
            // Auto-flip to register form if on /register route
            document.addEventListener('DOMContentLoaded', function() {
                if (window.location.pathname === '/register') {
                    document.getElementById('authContainer').classList.add('active');
                }
            });
        </script>
    </body>
</html>