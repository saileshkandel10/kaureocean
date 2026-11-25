<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TITP Program - Kaure Ocean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['Japan Opportunities' => '#', 'TITP Program' => '#']" />
    <x-page-banner title="Technical Intern Training Program (TITP)" subtitle="Transferring technical skills and fostering international contribution through professional internships." jpTitle="技能実習制度" />

    <main class="py-5 bg-white">
        <div class="container py-4">
            <div class="row g-5">
                <div class="col-lg-8">
                    <h3 class="fw-bold mb-3" style="color: var(--kaure-navy);">Program Overview</h3>
                    <p class="text-muted mb-4">
                        The Technical Intern Training Program (TITP / 技能実習) aims to transfer skills, technologies, and knowledge to developing countries, promoting international cooperation and human resource development.
                    </p>

                    <h4 class="h5 fw-bold mb-3" style="color: var(--kaure-navy);">Training & Internship Concept</h4>
                    <p class="text-muted mb-4">
                        Trainees gain hands-on technical experience working in Japanese enterprises while deepening their understanding of Japanese working standards, safety protocols, and professional discipline.
                    </p>

                    <h4 class="h5 fw-bold mb-3" style="color: var(--kaure-navy);">Kaure Ocean's Support</h4>
                    <p class="text-muted mb-4">
                        We facilitate transparent candidate selection, pre-departure Japanese language and cultural training, safety orientation, and visa facilitation.
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="kaure-card kaure-card-cream p-4">
                        <h4 class="h5 fw-bold mb-3" style="color: var(--kaure-navy);">Enquire About TITP</h4>
                        <p class="small text-muted mb-3">Get expert advice on TITP eligibility and upcoming intakes.</p>
                        <a href="/apply-now" class="btn btn-kaure-primary w-100">Apply for TITP Program</a>
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
