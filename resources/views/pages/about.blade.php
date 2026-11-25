<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Kaure Ocean Educational & Consultancy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['About Us' => '#']" />
    <x-page-banner title="About Kaure Ocean" subtitle="Licensed educational consultancy and Japanese language school dedicated to ethical recruitment and professional excellence." jpTitle="会社案内" />

    <main class="py-5 bg-white">
        <div class="container py-4">
            <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-6">
                    <span class="badge bg-light text-primary border border-primary px-3 py-1 mb-2 font-jp fw-semibold">会社プロフィール</span>
                    <h2 class="fw-bold mb-3" style="color: var(--kaure-navy);">Company Profile & Background</h2>
                    <p class="text-muted mb-3">
                        Kaure Ocean Educational & Consultancy Pvt. Ltd. (Kaure Ocean Japanese Language School) operates from the heart of Kathmandu at Samakhusi, Ranibari Marga, Nepal. We are officially licensed by the Government of Nepal, Ministry of Labour, Employment and Social Security, Department of Foreign Employment (License No: 221/082/083).
                    </p>
                    <p class="text-muted mb-3">
                        Our core business activities encompass comprehensive Japanese language education, Japanese cultural training, SSW (Specified Skilled Worker) and TITP (Technical Intern Training Program) recruitment support, and expert visa application consultancy.
                    </p>
                    <div class="p-3 bg-light rounded border-start border-4 border-warning">
                        <strong class="text-navy" style="color: var(--kaure-navy);">Official Licensing Details:</strong><br>
                        <span class="small font-jp">ライセンス番号：221/082/083 | ネパール政府 労働・雇用・社会保障省 海外雇用局</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rounded-4 overflow-hidden shadow-lg">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80" alt="About Kaure Ocean" class="img-fluid w-100">
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-md-4">
                    <div class="kaure-card h-100 text-center">
                        <div class="text-primary mb-3"><i class="fas fa-bullseye fa-3x" style="color: var(--kaure-navy);"></i></div>
                        <h4 class="h5 fw-bold mb-3" style="color: var(--kaure-navy);">Our Mission</h4>
                        <p class="text-muted small mb-0">To connect talented individuals with meaningful opportunities while upholding dignity, fairness, and professional transparency.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kaure-card h-100 text-center">
                        <div class="text-warning mb-3"><i class="fas fa-eye fa-3x" style="color: var(--kaure-orange);"></i></div>
                        <h4 class="h5 fw-bold mb-3" style="color: var(--kaure-navy);">Our Vision</h4>
                        <p class="text-muted small mb-0">To become a trusted and leading recruitment consultancy recognized for delivering skilled and disciplined workforce to Japan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kaure-card h-100 text-center">
                        <div class="text-success mb-3"><i class="fas fa-handshake fa-3x" style="color: #198754;"></i></div>
                        <h4 class="h5 fw-bold mb-3" style="color: var(--kaure-navy);">Core Values</h4>
                        <p class="text-muted small mb-0">Integrity, transparency, student success, responsible recruitment, and service excellence at every step.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-enquiry-cta />
    <x-footer />
    <x-whatsapp-float />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
