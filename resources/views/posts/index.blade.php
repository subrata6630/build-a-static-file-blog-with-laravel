<x-post-layout>

    @if (count($posts))
        @foreach ($posts as $post )
            <x-post-list-item :post="$post" />
        @endforeach

    @else
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                No data yet. Please come back later!
            </div>
        </div>
    @endif


    <x-slot name="side">
        <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                Sidebar
            </div>
        </div>
    </x-slot>
</x-post-layout>
