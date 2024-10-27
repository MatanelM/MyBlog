<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                @foreach($posts as $post)
                    <div class="border-b border-gray-300 py-4">
                        <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">{{ $post->title }}</h3>
                        <p class="text-gray-700 dark:text-gray-300">{{ $post->content }}</p>
                        <div class="mt-4">
			    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline ml-4">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
