<x-post-layout>

    @if (count($posts ?? []))
        @foreach ($posts as $post )
            <x-post-list-item :post="$post" />
        @endforeach

    @else
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                No data yet.
            </div>
        </div>
    @endif


    {{ $posts->links() }}



    <x-slot name="side">
        <x-side-ber/>
    </x-slot>
</x-post-layout>
