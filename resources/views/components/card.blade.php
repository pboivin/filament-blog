@props(['post'])
<div>
    <a class="block text-black" href="{{ route('post.show', ['slug' => $post->slug]) }}">
        <img
            class="h-[200px] w-full object-cover object-center bg-gray-100"
            src="{{ $post->main_image }}"
            alt=""
            loading="lazy"
        >
        <h2 class="mt-3 text-xl">{{ $post->title }}</h2>
    </a>
    <div class="mt-1">
        Published on {{ $post->published_at->format('M jS, Y') }} —
        in <a href="{{ route('post.index', ['category' => $post->category->slug]) }}">{{ $post->category->name }}</a>
    </div>
</div>
