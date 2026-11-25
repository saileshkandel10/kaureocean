@props(['title' => '', 'description' => '', 'icon' => 'fas fa-graduation-cap', 'link' => '#'])
<div class="kaure-card h-100 d-flex flex-column">
    <div class="mb-4 text-center">
        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 70px; height: 70px; background-color: rgba(32, 48, 112, 0.1); color: var(--kaure-navy);">
            <i class="{{ $icon }} fa-2x"></i>
        </div>
    </div>
    <h4 class="h5 text-center fw-bold mb-3" style="color: var(--kaure-navy);">{{ $title }}</h4>
    <p class="text-muted small text-center flex-grow-1 mb-4">{{ $description }}</p>
    <div class="text-center mt-auto">
        <a href="{{ $link }}" class="text-decoration-none fw-bold small" style="color: var(--kaure-orange);">
            Learn More <i class="fas fa-arrow-right ms-1"></i>
        </a>
    </div>
</div>
