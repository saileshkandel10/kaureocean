@props(['name' => '', 'logo' => ''])
<div class="kaure-card text-center p-3 d-flex align-items-center justify-content-center" style="min-height: 120px;">
    @if($logo)
        <img src="{{ $logo }}" alt="{{ $name }}" class="img-fluid" style="max-height: 60px; filter: grayscale(100%); transition: filter 0.3s;" onmouseover="this.style.filter='grayscale(0%)'" onmouseout="this.style.filter='grayscale(100%)'">
    @else
        <span class="fw-bold text-muted">{{ $name }}</span>
    @endif
</div>
