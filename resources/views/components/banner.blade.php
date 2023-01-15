@props(['image' => ''])
<div
    class="min-h-[200px] bg-gray-100 flex items-center justify-center"
    @if ($image)
        style="background-image: url({{ $image }}); background-size: cover; background-position: center;"
    @endif
>
    <div class="text-6xl text-gray-700">
        {!! $slot !!}
    </div>
</div>
