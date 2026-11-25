<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment Process - Kaure Ocean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['Recruitment Process' => '#']" />
    <x-page-banner title="Our Recruitment Process" subtitle="A transparent, step-by-step pathway from initial counseling to professional deployment." jpTitle="採用プロセス" />

    <main class="py-5 bg-white">
        <div class="container py-4">
            <x-section-heading title="Step-by-Step Pathway" subtitle="Ethical, structured, and fully supported at every stage." jpTitle="ステップ" />
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="kaure-card h-100 text-center">
                        <div class="display-6 fw-bold text-warning mb-2">01</div>
                        <h4 class="h5 fw-bold" style="color: var(--kaure-navy);">Consultation</h4>
                        <p class="small text-muted mb-0">Initial career guidance and program matching with our expert counselors.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="kaure-card h-100 text-center">
                        <div class="display-6 fw-bold text-warning mb-2">02</div>
                        <h4 class="h5 fw-bold" style="color: var(--kaure-navy);">Registration</h4>
                        <p class="small text-muted mb-0">Formal enrollment and documentation review for SSW, TITP, or study paths.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="kaure-card h-100 text-center">
                        <div class="display-6 fw-bold text-warning mb-2">03</div>
                        <h4 class="h5 fw-bold" style="color: var(--kaure-navy);">Language Training</h4>
                        <p class="small text-muted mb-0">Intensive Japanese language classes (N5 to N1) and cultural orientation.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="kaure-card h-100 text-center">
                        <div class="display-6 fw-bold text-warning mb-2">04</div>
                        <h4 class="h5 fw-bold" style="color: var(--kaure-navy);">Skill Development</h4>
                        <p class="small text-muted mb-0">Job-specific technical training and safety orientation sessions.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="kaure-card h-100 text-center">
                        <div class="display-6 fw-bold text-warning mb-2">05</div>
                        <h4 class="h5 fw-bold" style="color: var(--kaure-navy);">Assessment</h4>
                        <p class="small text-muted mb-0">Mock tests, skill evaluations, and interview preparation.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="kaure-card h-100 text-center">
                        <div class="display-6 fw-bold text-warning mb-2">06</div>
                        <h4 class="h5 fw-bold" style="color: var(--kaure-navy);">Interview & Selection</h4>
                        <p class="small text-muted mb-0">Employer interviews and successful candidate placement selection.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="kaure-card h-100 text-center">
                        <div class="display-6 fw-bold text-warning mb-2">07</div>
                        <h4 class="h5 fw-bold" style="color: var(--kaure-navy);">Documentation</h4>
                        <p class="small text-muted mb-0">Visa processing, certificate issuance, and legal clearances.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="kaure-card h-100 text-center">
                        <div class="display-6 fw-bold text-warning mb-2">08</div>
                        <h4 class="h5 fw-bold" style="color: var(--kaure-navy);">Pre-Departure</h4>
                        <p class="small text-muted mb-0">Final briefing, orientation, and deployment to Japan.</p>
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
