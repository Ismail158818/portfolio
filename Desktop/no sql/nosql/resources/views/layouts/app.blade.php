<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Ebla Digital Library'))</title>
    <link rel="icon" type="image/png" href="{{ asset('storage/logo/logo.png') }}?v={{ time() }}">
    <link rel="apple-touch-icon" href="{{ asset('storage/logo/logo.png') }}?v={{ time() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --bs-success: #0e4f29;
            --bs-success-rgb: 20, 92, 50;
        }
    </style>
    @stack('styles')
</head>
<body class="min-vh-100 d-flex flex-column bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success border-bottom border-warning border-3 shadow">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}" title="Ebla Digital Library">
                <img src="{{ asset('storage/logo/logo.png') }}?v={{ time() }}" alt="Ebla Digital Library" height="52" class="bg-white rounded p-1 shadow-sm object-fit-contain">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link px-3 rounded {{ request()->routeIs('home', 'library.index', 'dashboard') ? 'active fw-semibold bg-white bg-opacity-10' : '' }}" href="{{ route('home') }}">
                            <i class="bi bi-collection me-1"></i> Library
                        </a>
                    </li>
                    @auth
                        @if(auth()->user()->role == 'Admin')
                            <li class="nav-item">
                                <a class="nav-link px-3 rounded {{ request()->routeIs('admin.users*') ? 'active fw-semibold bg-white bg-opacity-10' : '' }}" href="{{ route('admin.users') }}">
                                    <i class="bi bi-people me-1"></i> Users
                                </a>
                            </li>
                        @endif
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link px-3 rounded {{ request()->routeIs('developers') ? 'active fw-semibold bg-white bg-opacity-10' : '' }}" href="{{ route('developers') }}">
                            <i class="bi bi-code-slash me-1"></i> Developers
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-lg-auto align-items-lg-center gap-lg-2">
                    @auth
                        <li class="nav-item dropdown">
                            <button class="btn btn-outline-light btn-sm rounded-pill dropdown-toggle d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i>
                                <span class="d-none d-sm-inline">{{ auth()->user()->name }}</span>
                                <i class="bi bi-three-dots-vertical small opacity-75"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                                <li class="dropdown-header small text-muted">{{ auth()->user()->email }}</li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">
                                            <i class="bi bi-box-arrow-right me-2"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link px-3" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item">
                            <a class="btn btn-warning btn-sm fw-semibold px-3" href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-4 flex-grow-1">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('info'))
            <div class="alert alert-info alert-dismissible fade show shadow-sm" role="alert">
                {{ session('info') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="bg-success text-white border-top border-warning border-3 mt-auto">
        <div class="container">
            <div class="row g-3 align-items-start py-3 text-center text-md-start">
                <div class="col-md-4">
                    <div class="small text-warning text-uppercase fw-semibold mb-2 letter-spacing-1">Course</div>
                    <strong class="d-block fs-5">NoSQL Databases</strong>
                </div>
                <div class="col-md-4 text-md-center">
                    <div class="small text-warning text-uppercase fw-semibold mb-2 letter-spacing-1">Instructor</div>
                    <strong class="d-block fs-5">Dr. Bushra Abdullah Abbara</strong>
                    <div class="small opacity-75 mt-1">ITE_DNL601_C1_S25</div>
                </div>
                <div class="col-md-4 text-md-end">
                    <div class="small text-warning text-uppercase fw-semibold mb-2 letter-spacing-1">Development Team</div>
                    <div class="small opacity-85">Ismail Mahmoud Basbous</div>
                    <div class="small opacity-85">Layla Sameh Nayyouf</div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
