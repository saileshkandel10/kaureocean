<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japanese Language Training - Kaure Ocean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['Japanese Language' => '#']" />
    <x-page-banner title="Japanese Language Training" subtitle="Comprehensive training in Listening, Speaking, Reading & Writing for workplace and daily life in Japan." jpTitle="日本語教育" />

    <main class="py-5 bg-white">
        <div class="container py-4">
            <x-section-heading title="Our Language Curriculum" subtitle="Master Japanese with expert instructors and structured modules." jpTitle="カリキュラム" />
            <div class="row g-4 mb-5">
                <div class="col-md-3">
                    <div class="kaure-card text-center h-100">
                        <div class="text-primary mb-3"><i class="fas fa-headphones fa-2x" style="color: var(--kaure-navy);"></i></div>
                        <h4 class="h5 fw-bold" style="color: var(--kaure-navy);">Listening (聴解)</h4>
                        <p class="small text-muted mb-0">Comprehending natural conversations, instructions, and announcements in daily and professional environments.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="kaure-card text-center h-100">
                        <div class="text-primary mb-3"><i class="fas fa-comments fa-2x" style="color: var(--kaure-navy);"></i></div>
                        <h4 class="h5 fw-bold" style="color: var(--kaure-navy);">Speaking (会話)</h4>
                        <p class="small text-muted mb-0">Developing fluent conversational ability, polite keigo, and confident workplace interactions.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="kaure-card text-center h-100">
                        <div class="text-primary mb-3"><i class="fas fa-book-open fa-2x" style="color: var(--kaure-navy);"></i></div>
                        <h4 class="h5 fw-bold" style="color: var(--kaure-navy);">Reading (読解)</h4>
                        <p class="small text-muted mb-0">Mastering Kanji, vocabulary, and complex sentence structures in brochures, manuals, and reports.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="kaure-card text-center h-100">
                        <div class="text-primary mb-3"><i class="fas fa-pen-nib fa-2x" style="color: var(--kaure-navy);"></i></div>
                        <h4 class="h5 fw-bold" style="color: var(--kaure-navy);">Writing (作文)</h4>
                        <p class="small text-muted mb-0">Practicing written communication, reports, emails, and daily notes required in Japanese workplaces.</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="kaure-card kaure-card-cream h-100">
                        <h3 class="h4 fw-bold mb-3" style="color: var(--kaure-navy);">Daily Communication</h3>
                        <p class="text-muted small mb-0">Focused on grocery shopping, transit navigation, social interactions, and medical emergencies so candidates settle comfortably in Japan.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="kaure-card kaure-card-cream h-100">
                        <h3 class="h4 fw-bold mb-3" style="color: var(--kaure-navy);">Workplace Communication</h3>
                        <p class="text-muted small mb-0">Tailored terminology and business etiquette for SSW and TITP sectors including caregiving, agriculture, construction, and manufacturing.</p>
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
