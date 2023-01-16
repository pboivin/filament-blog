@props(['image' => ''])
@php
    $background = $image ? 'bg-black' : 'bg-gray-100';
@endphp
<div class="relative min-h-[200px] flex items-center justify-center {{ $background }}">
    @if ($image)
        <div
            class="absolute inset-0 z-0 opacity-50"
            style="background-image: url({{ $image }}); background-size: cover; background-position: center;"
        ></div>
    @endif

    <div class="relative z-1 text-6xl text-gray-700">
        {!! $slot !!}
    </div>
</div>
