<x-layout :site-name="false">
    <div class="site-intro flex items-center justify-center bg-black text-white">
        <h1 class="text-[140px]">{{ config('app.name') }}</h1>
    </div>

    <x-container>
        <h2 class="mt-8 text-xl">Featured posts</h2>

        <div class="mt-8 flex flex-col">
            <a href="/blog/lorem">Lorem</a>
            <a href="/blog/ipsum">Ipsum</a>
            <a href="/blog/dolor">Dolor</a>
        </div>
    </x-container>
</x-layout>
