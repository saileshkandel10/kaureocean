@props(['items' => []])
<nav aria-label="breadcrumb" class="py-3 bg-light border-bottom mb-4">
    <div class="container">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none" style="color: var(--kaure-navy);">Home</a></li>
            @foreach($items as $label => $url)
                @if($loop->last)
                    <li class="breadcrumb-item active text-muted" aria-current="page">{{ $label }}</li>
                @else
                    <li class="breadcrumb-item"><a href="{{ $url }}" class="text-decoration-none" style="color: var(--kaure-navy);">{{ $label }}</a></li>
                @endif
            @endforeach
        </ol>
    </div>
</nav>
