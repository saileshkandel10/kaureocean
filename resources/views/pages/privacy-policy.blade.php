<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - Kaure Ocean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['Privacy Policy' => '#']" />
    <x-page-banner title="Privacy Policy" subtitle="How we collect, use, and protect your personal and professional information." jpTitle="プライバシーポリシー" />

    <main class="py-5 bg-white">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="fw-bold mb-3" style="color: var(--kaure-navy);">Commitment to Data Privacy</h3>
                    <p class="text-muted mb-3">
                        Kaure Ocean Educational & Consultancy Pvt. Ltd. respects your privacy and is committed to protecting any personal information you share with us through our website, application forms, and consultation sessions.
                    </p>
                    <p class="text-muted mb-3">
                        Information collected (such as name, contact details, and educational background) is used solely for counseling, training enrollment, and recruitment facilitation in compliance with Nepalese employment regulations and Japanese immigration standards.
                    </p>
                    <p class="text-muted mb-0">
                        We do not sell or share your personal data with unauthorized third parties. For any privacy inquiries, please contact us at kaureocean7@gmail.com.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <x-footer />
    <x-whatsapp-float />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
