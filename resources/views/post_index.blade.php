<x-layout title="Blog">
    <x-banner>
        @if ($activeCategory)
            <h1>Category: {{ $activeCategory->name }}</h1>
        @else
            <h1>All Posts</h1>
        @endif
    </x-banner>

    <x-container>
        @if ($posts->isNotEmpty())
            <div class="mt-8 flex items-center gap-4">
                <x-select name="category">
                    <option value="">Select category</option>
                    @foreach ($categories as $category)
                        <option
                            value="{{ $category->slug }}"
                            @if ($activeCategory && $activeCategory->slug === $category->slug) selected @endif
                        >{{ $category->name }}</option>
                    @endforeach
                </x-select>

                <x-select name="order">
                    <option value="date_desc">Show most recent</option>
                    <option value="date_asc">Show least recent</option>
                </x-select>

                <div class="ml-auto">
                    Showing {{ count($posts) }} of {{ count($posts) }} posts
                </div>
            </div>

            <div class="mt-10 grid gap-16 grid-cols-2">
                @foreach ($posts as $post)
                    <x-card :post="$post"></x-card>
                @endforeach
            </div>

            <div class="mt-16 flex justify-center">
                <x-button label="Load more"></x-button>
            </div>
        @else
            <div class="my-16 text-center">There are no posts</div>
        @endif
    </x-container>
</x-layout>
