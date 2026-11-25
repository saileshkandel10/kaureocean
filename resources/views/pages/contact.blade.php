<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Kaure Ocean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['Contact Us' => '#']" />
    <x-page-banner title="Contact Kaure Ocean" subtitle="We are here to help you find the right opportunity. Get in touch with our team today!" jpTitle="お問い合わせ" />

    <main class="py-5 bg-white">
        <div class="container py-4">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="kaure-card bg-light border-0 p-4">
                        <h3 class="h4 fw-bold mb-4" style="color: var(--kaure-navy);">Headquarters Information</h3>
                        <ul class="list-unstyled d-flex flex-column gap-3 mb-4">
                            <li class="d-flex align-items-start gap-3">
                                <i class="fas fa-map-marker-alt text-warning mt-1 fs-5"></i>
                                <div>
                                    <strong class="d-block">Address</strong>
                                    <span class="text-muted small">Kathmandu-26, Samakhusi, Ranibari Marga, Nepal</span>
                                </div>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <i class="fas fa-phone-alt text-warning mt-1 fs-5"></i>
                                <div>
                                    <strong class="d-block">Phone</strong>
                                    <span class="text-muted small">01-5923201</span>
                                </div>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <i class="fas fa-envelope text-warning mt-1 fs-5"></i>
                                <div>
                                    <strong class="d-block">Email</strong>
                                    <span class="text-muted small">kaureocean7@gmail.com</span>
                                </div>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <i class="fas fa-clock text-warning mt-1 fs-5"></i>
                                <div>
                                    <strong class="d-block">Office Hours</strong>
                                    <span class="text-muted small">9:00 AM - 5:30 PM (Nepal Time)</span>
                                </div>
                            </li>
                        </ul>
                        <div class="p-3 bg-white rounded shadow-sm">
                            <span class="badge bg-warning text-dark font-jp mb-1">ライセンス番号：221/082/083</span>
                            <p class="small text-muted mb-0 font-jp">ネパール政府 労働・雇用・社会保障省 海外雇用局</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <x-contact-form />
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
