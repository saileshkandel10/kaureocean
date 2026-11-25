<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JLPT Preparation - Kaure Ocean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['JLPT Preparation' => '#']" />
    <x-page-banner title="JLPT Preparation Courses" subtitle="Structured preparation for Japanese Language Proficiency Test (N5 to N1) with expert guidance." jpTitle="日本語能力試験対策" />

    <main class="py-5 bg-white">
        <div class="container py-4">
            <x-section-heading title="JLPT Levels & Preparation" subtitle="Comprehensive test preparation aligned with official proficiency standards." jpTitle="JLPT レベル" />
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <x-course-card title="JLPT N5 & N4" level="Beginner" duration="3-6 Months" description="Fundamental grammar, essential kanji, and basic vocabulary required for daily conversation and initial visa assessments." />
                </div>
                <div class="col-md-4">
                    <x-course-card title="JLPT N3" level="Intermediate" duration="4-5 Months" description="Everyday situation Japanese comprehension and conversational readiness for professional placement." />
                </div>
                <div class="col-md-4">
                    <x-course-card title="JLPT N2 & N1" level="Advanced" duration="6+ Months" description="Advanced grammar, complex reading comprehension, and business level fluency for specialized careers." />
                </div>
            </div>

            <div class="kaure-card kaure-card-cream p-4">
                <h3 class="h4 fw-bold mb-3" style="color: var(--kaure-navy);">Course Features & Administration</h3>
                <ul class="list-unstyled d-flex flex-column gap-2 text-muted small mb-0">
                    <li><i class="fas fa-check text-success me-2"></i> Regular mock tests and past paper practice under exam conditions.</li>
                    <li><i class="fas fa-check text-success me-2"></i> Individual performance tracking and targeted weakness remediation.</li>
                    <li><i class="fas fa-check text-success me-2"></i> Flexible shift timings (Morning and Evening batches available).</li>
                    <li><i class="fas fa-check text-success me-2"></i> Guidance on official exam registration dates and procedures.</li>
                </ul>
            </div>
        </div>
    </main>

    <x-enquiry-cta />
    <x-footer />
    <x-whatsapp-float />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
