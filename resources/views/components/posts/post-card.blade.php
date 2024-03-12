@props(['post'])

<div class="shadow-2xl rounded-xl post-card">
    <a wire:navigate href="{{ route('posts.show', $post->slug) }}">
        <div>
            <img class="rounded-xl post-img" alt="post image" src="{{ $post->image }}">
        </div>
    </a>
    <div class="mt-3 mb-10 ml-3 flex flex-col justify-center">
        <div class="flex items-center mb-2">
            @if ($category = $post->categories->first())
                <x-posts.category-badge :category="$category" />
            @endif
            <p class="text-gray-500 text-sm">{{ $post->published_at }}</p>
        </div>
        <a wire:navigate href="{{ route('posts.show', $post->slug) }}"
            class="text-xl font-bold text-gray-900 mr-3">{{ $post->title }}</a>
    </div>
</div>
