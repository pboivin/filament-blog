<x-layout title="Blog">
    <x-banner>
        <h1>All Posts</h1>
    </x-banner>

    <x-container>
        <div class="mt-8 flex items-center gap-4">
            <x-select name="category">
                <option value="">Categories</option>
                <option value="animals">Animals</option>
                <option value="mountains">Mountains</option>
                <option value="people">People</option>
                <option value="things">Things</option>
            </x-select>

            <x-select name="order">
                <option value="date_desc">Show most recent</option>
                <option value="date_asc">Show least recent</option>
            </x-select>

            <div class="ml-auto">
                Showing 10 of 30 posts
            </div>
        </div>

        <div class="mt-10 grid gap-16 grid-cols-2">
            @for ($i = 0; $i < 10; $i++)
                <x-card></x-card>
            @endfor
        </div>

        <div class="mt-16 flex justify-center">
            <x-button label="Load more"></x-button>
        </div>
    </x-container>
</x-layout>
