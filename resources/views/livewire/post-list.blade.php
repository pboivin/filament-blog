<div>
    <x-banner>
        @if ($activeCategory)
            <h1>Category: {{ $activeCategory->name }}</h1>
        @else
            <h1>All Posts</h1>
        @endif
    </x-banner>

    <x-container>
        @if ($postChunks->isNotEmpty())
            <div class="mt-8 flex items-center gap-4">
                <x-select name="category" wire:model="category">
                    <option value="">Select category</option>
                    @foreach ($categories as $category)
                        <option
                            value="{{ $category->slug }}"
                            @if ($activeCategory && $activeCategory->slug === $category->slug) selected @endif
                        >{{ $category->name }}</option>
                    @endforeach
                </x-select>

                <x-select name="order" wire:model="order">
                    <option value="date_desc">Show most recent</option>
                    <option value="date_asc">Show least recent</option>
                </x-select>

                <div class="ml-auto">
                    Found {{ $postCount }} {{ Str::plural('post', $postCount) }}
                </div>
            </div>

            <div>
                @foreach ($postChunks as $chunk)
                    @if ($currentChunk >= $loop->index)
                        @livewire('post-chunk', ['postIds' => $chunk], key("chunk-{$queryCount}-{$loop->index}"))
                    @endif
                @endforeach
            </div>

            @if ($currentChunk < count($postChunks) - 1)
                <div class="mt-16 flex justify-center">
                    <x-button label="Load more" wire:click="loadMore"></x-button>
                </div>
            @endif

        @else
            <div class="my-16 text-center">There are no posts</div>
        @endif
    </x-container>
</div>
