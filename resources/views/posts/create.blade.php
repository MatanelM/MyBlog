<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="POST" action="{{ route('posts.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="title" class="block font-medium text-gray-700 dark:text-gray-300">Title</label>
                        <input type="text" name="title" id="title" class="form-input mt-1 block w-full" required autofocus>
                    </div>

                    <div class="mb-4">
                        <label for="content" class="block font-medium text-gray-700 dark:text-gray-300">Content</label>
                        <textarea name="content" id="content" rows="5" class="form-input mt-1 block w-full" required></textarea>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
