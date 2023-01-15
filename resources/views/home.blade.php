<x-layout :site-name="false">
    <div class="site-intro flex items-center justify-center bg-black text-white">
        <h1 class="text-[140px]">{{ config('app.name') }}</h1>
    </div>

    <x-container>
        <h2 class="mt-8 text-2xl">Featured posts</h2>


        <div class="mt-10 grid gap-8 grid-cols-2">
            @for ($i = 0; $i < 2; $i++)
                <x-card></x-card>
            @endfor
        </div>
    </x-container>
</x-layout>
