<x-layout title="Blog">
    <x-banner>
        <h1>All Posts</h1>
    </x-banner>

    <x-container>
        <div class="mt-8 flex items-center">
            <select name="category" class="mr-4">
                <option value="">Categories</option>
                <option value="animals">Animals</option>
                <option value="mountains">Mountains</option>
                <option value="people">People</option>
                <option value="things">Things</option>
            </select>

            <select name="order" class="mr-4">
                <option value="date_desc">Show most recent</option>
                <option value="date_asc">Show least recent</option>
            </select>

            <div class="ml-auto">
                Showing 10 of 30 posts
            </div>
        </div>

        <div class="mt-10 grid gap-8 grid-cols-2 grid-rows-2">
            @for ($i = 0; $i < 10; $i++)
                <div>
                    <img class="h-[200px] w-full object-cover object-center" src="https://picsum.photos/id/353/800/600" alt="">
                    <h2 class="mt-3 text-xl">Lorem ipsum dolor sit</h2>
                    <div class="mt-1">Published on 2022-01-01 under <a href="#">Animals</a></div>
                </div>
            @endfor
        </div>

        <div class="mt-16 flex justify-center">
            <x-button label="Load more"></x-button>
        </div>
    </x-container>
</x-layout>
