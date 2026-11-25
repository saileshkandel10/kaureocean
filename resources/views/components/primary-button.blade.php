@props(['href' => '#', 'type' => 'a'])
@if($type === 'button')
    <button {{ $attributes->merge(['class' => 'btn btn-kaure-primary']) }}>
        {{ $slot }}
    </button>
@else
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'btn btn-kaure-primary']) }}>
        {{ $slot }}
    </a>
@endif
