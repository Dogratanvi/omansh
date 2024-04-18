@props(['blog'])

<div {{ $attributes }}>
    <a wire:navigate href="{{ route('blogs.show', $blog->slug) }}">
        <div>
            <img class="w-full rounded-xl" src="{{ $blog->getThumbnailUrl() }}">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2 gap-x-2">
            @if ($category = $blog->categories->first())
                <x-blogs.category-badge :category="$category" />
            @endif
            <p class="text-sm text-gray-500">{{ $blog->published_at }}</p>
        </div>
        <a wire:navigate href="{{ route('blogs.show', $blog->slug) }}"
            class="text-xl font-bold text-gray-900">{{ $blog->title }}</a>
    </div>
</div>