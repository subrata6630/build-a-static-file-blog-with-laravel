<div>
    <strong>{{ $post->author }}</strong>/ {{ $post->date->diffForHumans() }}

    @if (count($post->tags))

        <ul class="not-prose p-0 list-none flex items-center space-x-1 text-sm">

                @foreach ($post->tags as $tag)

                <li>
                    <a href="{{ route('tags.show', ['tag' => $tag]) }}" class="text-blue-500 text-sm">{{ Str::title($tag) }}</a>

                </li>

                @endforeach
        </ul>
    @endif

</div>
