<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSW Program - Kaure Ocean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['Japan Opportunities' => '#', 'SSW Program' => '#']" />
    <x-page-banner title="Specified Skilled Worker (SSW) Program" subtitle="Opening career pathways for skilled professionals in certified industrial sectors across Japan." jpTitle="特定技能制度" />

    <main class="py-5 bg-white">
        <div class="container py-4">
            <div class="row g-5">
                <div class="col-lg-8">
                    <h3 class="fw-bold mb-3" style="color: var(--kaure-navy);">Program Overview</h3>
                    <p class="text-muted mb-4">
                        The Specified Skilled Worker (SSW / 特定技能) program is designed to accept foreign nationals with specific professional skills and language proficiency to work in designated industrial sectors facing labor shortages in Japan.
                    </p>

                    <h4 class="h5 fw-bold mb-3" style="color: var(--kaure-navy);">Key Requirements & Criteria</h4>
                    <ul class="list-unstyled d-flex flex-column gap-2 text-muted mb-4">
                        <li><i class="fas fa-check-circle text-success me-2"></i> <strong>Language Proficiency:</strong> Passing JLPT N4 or higher (or Japanese Basic Test - JFT-Basic).</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i> <strong>Skill Proficiency:</strong> Passing the official SSW skill assessment test for the chosen sector.</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i> <strong>Sectors Covered:</strong> Caregiving, Agriculture, Construction, Food Service, Hospitality, Manufacturing, and more.</li>
                    </ul>

                    <h4 class="h5 fw-bold mb-3" style="color: var(--kaure-navy);">How Kaure Ocean Supports You</h4>
                    <p class="text-muted mb-4">
                        We provide rigorous language training, official skill test preparation classes, interview coaching, document authentication, and complete visa processing support.
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="kaure-card kaure-card-cream p-4">
                        <h4 class="h5 fw-bold mb-3" style="color: var(--kaure-navy);">Enquire About SSW</h4>
                        <p class="small text-muted mb-3">Speak with our SSW career counselors today.</p>
                        <a href="/apply-now" class="btn btn-kaure-primary w-100">Apply for SSW Program</a>
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
