<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-semibold mb-4">{{ __("Welcome, User!") }}</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- User Widgets -->
                        <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:bg-gray-200 transition ease-in-out duration-300">
                            <h3 class="text-lg font-semibold mb-3">Manage Books</h3>
                            <p class="mb-4 text-gray-700">View and manage your favorite books.</p>
                            <a href="{{ route('books.index') }}" class="text-blue-600 hover:underline">View Books</a>
                        </div>


                        <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:bg-gray-200 transition ease-in-out duration-300">
                            <h3 class="text-lg font-semibold mb-3">Wishlist</h3>
                            <p class="mb-4 text-gray-700">Manage and view books added to your wishlist.</p>
                            <a href="{{ route('wishlist.index') }}" class="text-blue-600 hover:underline">View Wishlist</a>
                        </div>

                        <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:bg-gray-200 transition ease-in-out duration-300">
                            <h3 class="text-lg font-semibold mb-3">Blog</h3>
                            <p class="mb-4 text-gray-700">Read Our Blog . <br>Its Benefit.</p>
                            <a href="{{ route('blog') }}" class="text-blue-600 hover:underline">View Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
