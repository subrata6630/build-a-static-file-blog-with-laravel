<div class="bg-white md-3 overflow-hidden shadow-sm sm:rounded-lg">

    <div class="p-6 text-gray-900 prose space-y-6">

       <h1 class="not-prose">

        <a href="{{ route('posts.show', $post->slug) }}"
            class="hover:text-blue-500 transition-colors duration-100">
                {{ $post->title }}
            </a>

       </h1>

       <div>{{ $post->teaser }}</div>

       <div>
            <div>
                <strong>{{ $post->author }}</strong>/ {{ $post->date->diffForHumans() }}
                <ul class="not-prose p-0 list-none flex items-center space-x-1 text-sm">
                    <li>
                        <a href="" class="text-blue-500 text-sm">Laravel</a>
                    </li>
                </ul>
            </div>
       </div>

    </div>
</div>
