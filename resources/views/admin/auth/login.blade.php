<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Kaure Ocean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100" style="background-color: var(--kaure-cream);">
    <div class="card shadow-lg border-0 p-4 rounded-4" style="width: 100%; max-width: 420px;">
        <div class="text-center mb-4">
            <img src="{{ asset('assets/logos/kaure-logo.webp') }}" alt="Logo" height="50" class="mb-2">
            <h4 class="fw-bold text-navy" style="color: var(--kaure-navy);">Admin Portal</h4>
            <p class="small text-muted font-jp">カウレ オーシャン 管理システム</p>
        </div>

        @if($errors->any())
            <div class="alert alert-danger py-2 small">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ url('/admin/login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label small fw-semibold">Email Address</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="mb-3">
                <label class="form-label small fw-semibold">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                <label class="form-check-label small" for="remember">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-kaure-primary w-100 py-2">Sign In</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
