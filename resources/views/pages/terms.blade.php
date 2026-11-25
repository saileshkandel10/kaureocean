<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions - Kaure Ocean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['Terms and Conditions' => '#']" />
    <x-page-banner title="Terms and Conditions" subtitle="Guidelines and terms of service for students and candidates." jpTitle="利用規約" />

    <main class="py-5 bg-white">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="fw-bold mb-3" style="color: var(--kaure-navy);">Service Terms</h3>
                    <p class="text-muted mb-3">
                        By using the Kaure Ocean website and services, you agree to comply with and be bound by the following terms and conditions.
                    </p>
                    <p class="text-muted mb-3">
                        All training schedules, admission procedures, and recruitment steps are administered under the official license (No. 221/082/083) issued by the Ministry of Labour, Employment and Social Security, Nepal.
                    </p>
                    <p class="text-muted mb-0">
                        Candidates are expected to provide accurate documentation and maintain professional conduct during training and interview processes.
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
