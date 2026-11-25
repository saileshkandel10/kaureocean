<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaure Ocean - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <style>
        body { background-color: #F8F9FA; }
        .sidebar { min-height: 100vh; background-color: var(--kaure-dark-navy); color: #fff; width: 260px; position: fixed; top: 0; left: 0; z-index: 100; transition: all 0.3s; }
        .sidebar .nav-link { color: rgba(255,255,255,0.8); padding: 0.75rem 1.25rem; border-radius: 4px; margin-bottom: 4px; }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { background-color: var(--kaure-orange); color: #fff; }
        .main-content { margin-left: 260px; padding: 2rem; }
        @media (max-width: 992px) {
            .sidebar { width: 100%; position: relative; min-height: auto; }
            .main-content { margin-left: 0; }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar p-3 d-flex flex-column">
        <div class="d-flex align-items-center gap-2 mb-4 px-2">
            <img src="{{ asset('assets/logos/kaure-logo.webp') }}" alt="Logo" height="35" style="filter: brightness(0) invert(1);">
            <div>
                <h6 class="mb-0 fw-bold text-white">Kaure Ocean</h6>
                <small class="text-warning" style="font-size: 0.65rem;">Admin Panel</small>
            </div>
        </div>

        <ul class="nav flex-column flex-grow-1">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="{{ url('/admin/dashboard') }}">
                    <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item mt-2 text-uppercase small text-muted px-3 fw-bold">Candidates & CRM</li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/candidates') ? 'active' : '' }}" href="{{ url('/admin/candidates') }}">
                    <i class="fas fa-users me-2"></i> All Candidates
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/system/applications*') ? 'active' : '' }}" href="{{ url('/admin/system/applications') }}">
                    <i class="fas fa-file-alt me-2"></i> Applications Pipeline
                </a>
            </li>
            <li class="nav-item mt-2 text-uppercase small text-muted px-3 fw-bold">Operations</li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/operations/training*') ? 'active' : '' }}" href="{{ url('/admin/operations/training') }}">
                    <i class="fas fa-graduation-cap me-2"></i> Training Programs
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/operations/ssw*') ? 'active' : '' }}" href="{{ url('/admin/operations/ssw') }}">
                    <i class="fas fa-briefcase me-2"></i> SSW Management
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/operations/titp*') ? 'active' : '' }}" href="{{ url('/admin/operations/titp') }}">
                    <i class="fas fa-user-tie me-2"></i> TITP Management
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/operations/employers*') ? 'active' : '' }}" href="{{ url('/admin/operations/employers') }}">
                    <i class="fas fa-building me-2"></i> Employer Database
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/operations/matching*') ? 'active' : '' }}" href="{{ url('/admin/operations/matching') }}">
                    <i class="fas fa-exchange-alt me-2"></i> Candidate Matching
                </a>
            </li>
            <li class="nav-item mt-2 text-uppercase small text-muted px-3 fw-bold">Website & CMS</li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/cms/services*') ? 'active' : '' }}" href="{{ url('/admin/cms/services') }}">
                    <i class="fas fa-concierge-bell me-2"></i> Services CMS
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/cms/testimonials*') ? 'active' : '' }}" href="{{ url('/admin/cms/testimonials') }}">
                    <i class="fas fa-quote-right me-2"></i> Testimonials CMS
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/cms/partners*') ? 'active' : '' }}" href="{{ url('/admin/cms/partners') }}">
                    <i class="fas fa-handshake me-2"></i> Partners CMS
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/cms/statistics*') ? 'active' : '' }}" href="{{ url('/admin/cms/statistics') }}">
                    <i class="fas fa-chart-bar me-2"></i> Statistics CMS
                </a>
            </li>
            <li class="nav-item mt-2 text-uppercase small text-muted px-3 fw-bold">System Management</li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/system/company-profile*') ? 'active' : '' }}" href="{{ url('/admin/system/company-profile') }}">
                    <i class="fas fa-building me-2"></i> Company Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/system/users*') ? 'active' : '' }}" href="{{ url('/admin/system/users') }}">
                    <i class="fas fa-user-shield me-2"></i> Users & Roles
                </a>
            </li>
        </ul>

        <div class="mt-auto pt-3 border-top border-secondary">
            <form action="{{ url('/admin/logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-light btn-sm w-100">
                    <i class="fas fa-sign-out-alt me-2"></i> Logout
                </button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow-sm px-4 mb-4">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h6 fw-bold text-navy">Welcome, {{ auth()->user()->name ?? 'Admin' }}</span>
                <div class="d-flex align-items-center gap-3">
                    <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-primary btn-sm"><i class="fas fa-external-link-alt me-1"></i> Visit Website</a>
                </div>
            </div>
        </nav>

        <x-alert-messages />

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
