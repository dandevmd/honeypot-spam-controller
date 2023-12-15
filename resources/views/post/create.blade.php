<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a new post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/post/store" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="title" class="block mb-2 font-bold text-xs text-gray-700">Title</label>

                            <input type="text" name="title" id="title"
                                class="w-full p-2 border border-gray-400" required>

                            @error('title')
                                <p class="text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="body" class="block mb-2 font-bold text-xs text-gray-700">Body</label>

                            <input type="text" name="body" id="body"
                                class="w-full p-2 border border-gray-400" required>

                            @error('body')
                                <p class="text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <x-honeypot />

                        <button type="submit"
                            class="block mt-3 px-4 py-3 text-black  border border-gray-500 bg-indigo-500 rounded hover:bg-gray-600">POST</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
