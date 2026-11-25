<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Article - Kaure Ocean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['Blog' => '/blog', 'Article' => '#']" />
    <x-page-banner title="Article Details" subtitle="Detailed information, guidelines, and announcements from Kaure Ocean." jpTitle="記事詳細" />

    <main class="py-5 bg-white">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <span class="badge bg-primary mb-3">Announcement</span>
                    <h1 class="fw-bold mb-3" style="color: var(--kaure-navy);">Article Slug: {{ $slug ?? 'Sample Article' }}</h1>
                    <p class="text-muted small mb-4"><i class="far fa-calendar-alt me-2"></i> October 30, 2026 | <i class="far fa-user me-2"></i> Kaure Ocean Editorial Team</p>
                    
                    <div class="rounded overflow-hidden mb-4 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1528164344705-475426879c0d?auto=format&fit=crop&w=800&q=80" alt="Article Image" class="img-fluid w-100">
                    </div>

                    <p class="text-muted mb-3">
                        Kaure Ocean Educational & Consultancy Pvt. Ltd. continues to provide top-tier Japanese language education and professional recruitment support. This article outlines key guidelines and preparation strategies for aspiring candidates.
                    </p>
                    <p class="text-muted mb-4">
                        For further details regarding upcoming intakes, examination schedules, and consultation appointments, please contact our Samakhusi office in Kathmandu or reach out via phone at 01-5923201.
                    </p>

                    <a href="/blog" class="btn btn-kaure-secondary btn-sm"><i class="fas fa-arrow-left me-2"></i> Back to Blog</a>
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
