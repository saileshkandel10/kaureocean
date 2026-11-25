<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Kaure Ocean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['Gallery' => '#']" />
    <x-page-banner title="Photo & Video Gallery" subtitle="Explore our classrooms, training activities, cultural events, and student milestones." jpTitle="ギャラリー" />

    <main class="py-5 bg-white">
        <div class="container py-4">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="rounded overflow-hidden shadow-sm position-relative">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600&q=80" alt="Language Class" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-75 text-white p-2 text-center small fw-semibold">Japanese Language Class</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded overflow-hidden shadow-sm position-relative">
                        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=600&q=80" alt="Training Session" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-75 text-white p-2 text-center small fw-semibold">Technical Skill Training</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded overflow-hidden shadow-sm position-relative">
                        <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&w=600&q=80" alt="Cultural Program" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-75 text-white p-2 text-center small fw-semibold">Cultural Orientation Event</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded overflow-hidden shadow-sm position-relative">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=80" alt="Student Discussion" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-75 text-white p-2 text-center small fw-semibold">Interactive Study Group</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded overflow-hidden shadow-sm position-relative">
                        <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&w=600&q=80" alt="Pre-Departure Briefing" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-75 text-white p-2 text-center small fw-semibold">Pre-Departure Briefing</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rounded overflow-hidden shadow-sm position-relative">
                        <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&w=600&q=80" alt="Graduation" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-75 text-white p-2 text-center small fw-semibold">Certificate Awarding</div>
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
