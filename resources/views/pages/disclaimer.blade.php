<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment Disclaimer - Kaure Ocean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['Disclaimer' => '#']" />
    <x-page-banner title="Recruitment Disclaimer" subtitle="Important legal notice regarding visa processing and employment placements." jpTitle="免責事項" />

    <main class="py-5 bg-white">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="fw-bold mb-3" style="color: var(--kaure-navy);">Official Disclaimer</h3>
                    <p class="text-muted mb-3">
                        Kaure Ocean Educational & Consultancy Pvt. Ltd. operates strictly in accordance with Nepalese government regulations and official Japanese immigration frameworks (SSW and TITP).
                    </p>
                    <p class="text-muted mb-3">
                        Visa approvals and employment placements are subject to official evaluation by Japanese authorities and employers. Kaure Ocean provides professional training, documentation support, and honest counseling but does not guarantee visa approval or placement independent of official screening criteria.
                    </p>
                    <p class="text-muted mb-0">
                        License No: 221/082/083 | Department of Foreign Employment, Kathmandu, Nepal.
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
