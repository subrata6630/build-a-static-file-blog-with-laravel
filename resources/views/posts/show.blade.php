<x-post-layout>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 prose space-y-6">
                <h1 class="not-prose">  {{ $post->title }} </h1>
                <div>{{ $post->contents }}</div>

                <x-post-meta :post="$post" />
            </div>
        </div>

    <x-slot name="side">
        <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
             <a href="{{ route ('home') }}" class="inline-flex w-full items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                Back
             </a>
            </div>
        </div>
    </x-slot>
</x-post-layout>

