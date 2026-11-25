@props(['title' => '', 'subtitle' => '', 'jpTitle' => ''])
<div class="kaure-hero py-5 text-center">
    <div class="container py-4">
        @if($jpTitle)
            <span class="badge bg-warning text-dark mb-2 font-jp">{{ $jpTitle }}</span>
        @endif
        <h1 class="text-white display-5 fw-bold mb-3">{{ $title }}</h1>
        @if($subtitle)
            <p class="lead text-light opacity-75 mx-auto" style="max-width: 700px;">{{ $subtitle }}</p>
        @endif
    </div>
</div>
