<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog & News - Kaure Ocean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['Blog & News' => '#']" />
    <x-page-banner title="Blog & Announcements" subtitle="Latest updates, SSW examination guides, and Japanese language tips." jpTitle="ブログ・お知らせ" />

    <main class="py-5 bg-white">
        <div class="container py-4">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="kaure-card h-100">
                        <span class="badge bg-primary mb-2">Intake Notice</span>
                        <h4 class="h5 fw-bold mb-2"><a href="/blog/new-japanese-language-classes" class="text-decoration-none" style="color: var(--kaure-navy);">New Japanese Language Classes Starting Soon (N5 & N4)</a></h4>
                        <p class="small text-muted mb-3">Enroll now for our upcoming morning and evening shifts with expert instructors.</p>
                        <a href="/blog/new-japanese-language-classes" class="small fw-bold text-decoration-none" style="color: var(--kaure-orange);">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kaure-card h-100">
                        <span class="badge bg-warning text-dark mb-2">SSW Exam Update</span>
                        <h4 class="h5 fw-bold mb-2"><a href="/blog/ssw-exam-preparation-guide" class="text-decoration-none" style="color: var(--kaure-navy);">Specified Skilled Worker (SSW) Exam Preparation Guide</a></h4>
                        <p class="small text-muted mb-3">Special preparation classes for Caregiving, Agriculture, and Construction sectors.</p>
                        <a href="/blog/ssw-exam-preparation-guide" class="small fw-bold text-decoration-none" style="color: var(--kaure-orange);">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kaure-card h-100">
                        <span class="badge bg-success mb-2">Seminar</span>
                        <h4 class="h5 fw-bold mb-2"><a href="/blog/career-counseling-seminar" class="text-decoration-none" style="color: var(--kaure-navy);">Free Career Counseling Seminar on Working in Japan</a></h4>
                        <p class="small text-muted mb-3">Join our weekly counseling session at our Samakhusi office in Kathmandu.</p>
                        <a href="/blog/career-counseling-seminar" class="small fw-bold text-decoration-none" style="color: var(--kaure-orange);">Read More <i class="fas fa-arrow-right"></i></a>
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
