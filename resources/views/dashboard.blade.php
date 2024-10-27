<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-semibold text-lg">All Posts</h3>
                    <div class="mt-4">
                        @foreach ($posts as $post)
                            <div class="mb-4 p-4 bg-gray-100 rounded shadow">
                                <h4 class="font-bold">{{ $post->title }}</h4>
                                <p>{{ $post->content }}</p>
                                <span class="text-sm text-gray-500">By {{ $post->user->name }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
