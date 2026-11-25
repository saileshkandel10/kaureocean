<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission & Vision - Kaure Ocean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['Mission & Vision' => '#']" />
    <x-page-banner title="Mission & Vision" subtitle="Our guiding principles and commitment to ethical recruitment and quality education." jpTitle="理念とビジョン" />

    <main class="py-5 bg-white">
        <div class="container py-4">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="kaure-card kaure-card-cream h-100 p-4">
                        <span class="badge bg-warning text-dark mb-3 font-jp">企業ビジョン</span>
                        <h3 class="fw-bold mb-3" style="color: var(--kaure-navy);">Our Vision</h3>
                        <p class="lead fw-semibold text-navy mb-4" style="color: var(--kaure-navy);">
                            "To become a trusted and leading manpower recruitment company, recognized for delivering skilled, disciplined, and well-trained workforce to the global market, especially Japan."
                        </p>
                        <p class="text-muted small mb-0">
                            We envision setting the gold standard in overseas employment consultancy by bridging Nepalese talent with high-standard professional environments across Japan.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="kaure-card h-100 p-4 border-top border-4 border-primary">
                        <span class="badge bg-primary mb-3 font-jp">企業の使命</span>
                        <h3 class="fw-bold mb-3" style="color: var(--kaure-navy);">Our Mission</h3>
                        <p class="text-muted mb-3">
                            To empower candidates through rigorous Japanese language education, professional skill development, and comprehensive cultural orientation.
                        </p>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-muted small">
                            <li><i class="fas fa-check text-success me-2"></i> Follow fair and responsible recruitment practices.</li>
                            <li><i class="fas fa-check text-success me-2"></i> Maintain transparency, integrity, and service quality.</li>
                            <li><i class="fas fa-check text-success me-2"></i> Equip candidates with practical skills and workplace safety.</li>
                            <li><i class="fas fa-check text-success me-2"></i> Ensure secure and dignified employment pathways.</li>
                        </ul>
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
