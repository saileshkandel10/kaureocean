@props(['name' => '', 'program' => '', 'destination' => 'Japan', 'quote' => ''])
<div class="kaure-card h-100 bg-white shadow-sm position-relative">
    <div class="text-warning mb-3">
        <i class="fas fa-quote-left fa-2x opacity-25"></i>
    </div>
    <p class="small text-muted italic mb-4">"{{ $quote }}"</p>
    <div class="d-flex align-items-center mt-auto border-top pt-3">
        <div class="bg-navy rounded-circle text-white d-flex align-items-center justify-content-center fw-bold me-3" style="width: 45px; height: 45px; background-color: var(--kaure-navy);">
            {{ substr($name, 0, 1) }}
        </div>
        <div>
            <h6 class="fw-bold mb-0" style="color: var(--kaure-navy);">{{ $name }}</h6>
            <span class="small text-muted">{{ $program }} | <span class="text-success">{{ $destination }}</span></span>
        </div>
    </div>
</div>
