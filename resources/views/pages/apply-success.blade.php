<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Submitted - Kaure Ocean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['Application Success' => '#']" />

    <main class="py-5 bg-white text-center">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="kaure-card p-5 shadow-sm">
                        <div class="text-success mb-4">
                            <i class="fas fa-check-circle fa-4p fa-4x"></i>
                        </div>
                        <h2 class="fw-bold mb-3" style="color: var(--kaure-navy);">Application Submitted Successfully!</h2>
                        <p class="text-muted mb-4">
                            Thank you for applying with Kaure Ocean. Your application has been successfully saved in our candidate CRM system.
                        </p>
                        <div class="p-3 bg-light rounded mb-4">
                            <span class="small text-muted d-block">Your Application Reference Number:</span>
                            <span class="fs-4 fw-bold text-navy" style="color: var(--kaure-navy);">{{ $ref ?? 'KO-REF12345' }}</span>
                        </div>
                        <p class="small text-muted mb-4">
                            Our admissions counsellor will review your profile and contact you shortly at your registered phone number or email address.
                        </p>
                        <a href="{{ url('/') }}" class="btn btn-kaure-primary">Return to Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer />
    <x-whatsapp-float />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
