<x-post-layout>
    <div class="bg-white overflow-auto shadow-sm sm:rounded-lg mb-3">
        <div class="p-6 text-gray-900">
            <div class="flex items-center justify-between ">
                <h1>Tag: {{ $tag }}</h1>
                <p>{{ count($posts) }}</p>
            </div>
        </div>
    </div>

    @if (count($posts))
    @foreach ($posts as $post )
        <x-post-list-item :post="$post" />
    @endforeach

@else
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
        <div class="p-6 text-gray-900">
            No data yet.
        </div>
    </div>
@endif

{{ $posts->links() }}

<x-slot name="side">
    <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            Sidebar
        </div>
    </div>

    <div>
        <a href="{{ route('home') }}" class="inline-flex w-full items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">Back</a>
    </div>
</x-slot>


</x-post-layout>
