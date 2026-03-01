<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel - Aseno-Tek')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <style>
        body { background: #f5f6fa; }
        .admin-sidebar { min-height: 100vh; background: #1f2937; }
        .admin-sidebar a { color: #d1d5db; display: block; padding: 10px 14px; border-radius: 6px; }
        .admin-sidebar a.active, .admin-sidebar a:hover { color: #111827; background: #fbbf24; text-decoration: none; }
        .card-stat { border: 0; box-shadow: 0 4px 14px rgba(0,0,0,.06); }
    </style>
    @stack('styles')
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <aside class="col-md-3 col-lg-2 admin-sidebar p-3">
                <h5 class="text-white mb-4">Aseno-Tek Admin</h5>
                <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
                <a href="{{ route('admin.blog.index') }}" class="{{ request()->routeIs('admin.blog.*') ? 'active' : '' }}">Blog Management</a>
                <a href="{{ route('admin.gallery.index') }}" class="{{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">Gallery Management</a>
                <a href="{{ route('home') }}" target="_blank">View Website</a>
                <form action="{{ route('admin.logout') }}" method="POST" class="mt-4">
                    @csrf
                    <button class="btn btn-warning btn-block">Logout</button>
                </form>
            </aside>
            <main class="col-md-9 col-lg-10 p-4">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @yield('content')
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
