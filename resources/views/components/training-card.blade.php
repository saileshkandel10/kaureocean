@props(['title' => '', 'jpTitle' => '', 'description' => '', 'icon' => 'fas fa-book-reader'])
<div class="kaure-card kaure-card-cream h-100">
    <div class="d-flex align-items-center gap-3 mb-3">
        <div class="bg-white p-3 rounded shadow-sm text-primary" style="color: var(--kaure-orange) !important;">
            <i class="{{ $icon }} fa-2x"></i>
        </div>
        <div>
            <h4 class="h5 fw-bold mb-0" style="color: var(--kaure-navy);">{{ $title }}</h4>
            @if($jpTitle)
                <span class="small text-muted font-jp">{{ $jpTitle }}</span>
            @endif
        </div>
    </div>
    <p class="text-muted small mb-0">{{ $description }}</p>
</div>
