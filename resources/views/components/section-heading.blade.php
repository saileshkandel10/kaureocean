@props(['title' => '', 'subtitle' => '', 'jpTitle' => '', 'centered' => true])
<div class="mb-5 {{ $centered ? 'text-center' : '' }}">
    @if($jpTitle)
        <span class="badge bg-light text-primary border border-primary px-3 py-1 mb-2 font-jp fw-semibold">{{ $jpTitle }}</span>
    @endif
    <h2 class="fw-bold mb-3" style="color: var(--kaure-navy);">{{ $title }}</h2>
    @if($subtitle)
        <p class="text-muted mx-auto" style="max-width: 700px;">{{ $subtitle }}</p>
    @endif
    <div class="mx-auto mt-2" style="width: 60px; height: 3px; background-color: var(--kaure-orange); {{ $centered ? '' : 'margin-left: 0 !important;' }}"></div>
</div>
