<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leadership - Kaure Ocean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['Leadership' => '#']" />
    <x-page-banner title="Leadership Message" subtitle="Message from our Managing Director and CEO, Prakash Bastra (Prakash Bastola)." jpTitle="代表挨拶" />

    <main class="py-5 bg-white">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-5 text-center">
                    <div class="kaure-card p-4 shadow-sm d-inline-block">
                        <div class="rounded-circle overflow-hidden mx-auto mb-3 shadow" style="width: 200px; height: 200px;">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=80" alt="Prakash Bastra" class="w-100 h-100 object-fit-cover">
                        </div>
                        <h3 class="fw-bold mb-1" style="color: var(--kaure-navy);">Prakash Bastra</h3>
                        <span class="text-muted small d-block mb-2">Managing Director / CEO</span>
                        <span class="badge bg-warning text-dark font-jp">代表取締役会長 (CEO)</span>
                    </div>
                </div>
                <div class="col-lg-7">
                    <span class="badge bg-light text-primary border border-primary px-3 py-1 mb-2 font-jp fw-semibold">CEOメッセージ</span>
                    <h2 class="fw-bold mb-4" style="color: var(--kaure-navy);">"Japan experience is where my journey began."</h2>
                    <p class="text-muted mb-3">
                        Following my studies and professional work experience in Japan, I built my career across international stages including the United States and Canada. Deeply understanding global labor standards and professional expectations, I returned to Nepal to establish Kaure Ocean Japanese Language School.
                    </p>
                    <p class="text-muted mb-3">
                        As a Japanese language instructor and interpreter, I am fully committed to cultivating exceptional talent who correctly understand Japanese culture and working methods.
                    </p>
                    <p class="text-muted mb-4">
                        The establishment of Kaure Ocean was realized with a clear vision: to provide Nepalese talent with high-quality education based on international standards, professional guidance, and safe, fair, and promising overseas employment opportunities.
                    </p>
                    <div class="p-3 bg-light rounded border-start border-4 border-warning">
                        <span class="fw-bold d-block text-navy" style="color: var(--kaure-navy);">Prakash Bastra</span>
                        <span class="small text-muted font-jp">代表取締役 | Kaure Ocean Japanese Language School</span>
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
