@props(['title' => '', 'level' => 'N5-N4', 'duration' => '3-6 Months', 'description' => ''])
<div class="kaure-card h-100 border-top border-4 border-warning">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <span class="badge bg-primary font-jp">{{ $level }}</span>
        <span class="small text-muted"><i class="far fa-clock me-1"></i> {{ $duration }}</span>
    </div>
    <h4 class="h5 fw-bold mb-3" style="color: var(--kaure-navy);">{{ $title }}</h4>
    <p class="text-muted small mb-4">{{ $description }}</p>
    <a href="#contact" class="btn btn-outline-primary btn-sm w-100 mt-auto fw-semibold">Enroll Now</a>
</div>
