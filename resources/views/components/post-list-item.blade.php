<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-3">
    <div class="p-6 text-gray-900 dark:text-gray-100 prose space-y-6">

        <h1 class="font-bold">
            <a href="{{ route('posts.show', $post->slug) }}" class="hover:text-blue-500 transition-colors duration-100" style="text-decoration: none;">
                {{ $post->title }}
            </a>
        </h1>

        <div>{{ $post->teaser }}</div>

        <x-post-meta :post="$post" />
    </div>
</div>
