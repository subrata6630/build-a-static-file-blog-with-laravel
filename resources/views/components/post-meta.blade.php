<div>
    <strong>{{ $post->author }}</strong>/ {{ $post->date->diffForHumans() }}

    @if (count($post->tags))

        <ul class="not-prose p-0 list-none flex items-center space-x-1 text-sm">

                @foreach ($post->tags as $tag)

                <li>
                    <a href="" class="text-blue-500 text-sm">{{ $tag }}</a>
                </li>

                @endforeach
        </ul>
    @endif

</div>
