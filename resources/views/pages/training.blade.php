<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Programs - Kaure Ocean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['Training Programs' => '#']" />
    <x-page-banner title="Professional Training Programs" subtitle="Technical skill development, cultural orientation, workplace safety, and pre-departure preparation." jpTitle="専門研修プログラム" />

    <main class="py-5 bg-white">
        <div class="container py-4">
            <x-section-heading title="Our Training Pillars" subtitle="Equipping candidates for safe, successful, and professional careers abroad." jpTitle="研修の柱" />
            <div class="row g-4">
                <div class="col-md-6">
                    <x-training-card title="Japanese Language Training" jpTitle="日本語教育" description="Comprehensive listening, speaking, reading, and writing training tailored for workplace integration." icon="fas fa-book-reader" />
                </div>
                <div class="col-md-6">
                    <x-training-card title="Technical Skill Development" jpTitle="技術スキル開発" description="Job-specific practical sessions meeting Japanese employer standards in agriculture, caregiving, construction, and manufacturing." icon="fas fa-tools" />
                </div>
                <div class="col-md-6">
                    <x-training-card title="Cultural Orientation" jpTitle="文化研修" description="Understanding Japanese traditions, business etiquette, manners, and daily lifestyle to ensure smooth adjustment." icon="fas fa-torii-gate" />
                </div>
                <div class="col-md-6">
                    <x-training-card title="Workplace Safety Training" jpTitle="職場安全訓練" description="Essential safety protocols, hazard awareness, and health standards for industrial and caregiving environments." icon="fas fa-hard-hat" />
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
