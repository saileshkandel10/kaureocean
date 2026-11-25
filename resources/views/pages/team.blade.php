<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team - Kaure Ocean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['Our Team' => '#']" />
    <x-page-banner title="Our Expert Team" subtitle="Dedicated professionals committed to your education and career success in Japan." jpTitle="私たちのチーム" />

    <main class="py-5 bg-white">
        <div class="container py-4">
            <x-section-heading title="Meet Our Professionals" subtitle="Experienced trainers, immigration consultants, and student support officers." jpTitle="専門スタッフ" />
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="kaure-card text-center h-100">
                        <div class="rounded-circle overflow-hidden mx-auto mb-3 shadow" style="width: 140px; height: 140px;">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=80" alt="Prakash Bastra" class="w-100 h-100 object-fit-cover">
                        </div>
                        <h4 class="h5 fw-bold mb-1" style="color: var(--kaure-navy);">Prakash Bastra</h4>
                        <span class="small text-muted d-block mb-2">Managing Director & CEO</span>
                        <p class="small text-muted mb-3">Extensive study and work experience in Japan, US, and Canada. Expert Japanese language instructor.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kaure-card text-center h-100">
                        <div class="rounded-circle overflow-hidden mx-auto mb-3 shadow" style="width: 140px; height: 140px;">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=400&q=80" alt="Language Instructor" class="w-100 h-100 object-fit-cover">
                        </div>
                        <h4 class="h5 fw-bold mb-1" style="color: var(--kaure-navy);">Senior Language Instructors</h4>
                        <span class="small text-muted d-block mb-2">JLPT N1/N2 Certified</span>
                        <p class="small text-muted mb-3">Specialized native and bilingual faculty focused on conversation, grammar, and JLPT mastery.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kaure-card text-center h-100">
                        <div class="rounded-circle overflow-hidden mx-auto mb-3 shadow" style="width: 140px; height: 140px;">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=400&q=80" alt="Counseling Team" class="w-100 h-100 object-fit-cover">
                        </div>
                        <h4 class="h5 fw-bold mb-1" style="color: var(--kaure-navy);">Counseling & Support Team</h4>
                        <span class="small text-muted d-block mb-2">SSW & TITP Specialists</span>
                        <p class="small text-muted mb-3">Guiding candidates through documentation, visa processing, and pre-departure preparation.</p>
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
