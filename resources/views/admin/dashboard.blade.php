<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-semibold mb-4">{{ __("Welcome, Admin!") }}</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- Admin Widgets -->
                        <div class="bg-gray-100 p-4 rounded-lg shadow">
                            <h3 class="text-lg font-semibold mb-2">Manage Users</h3>
                            <p>View and manage all the users in the system.</p>
                            <a href="{{ route('admin.allUsers') }}" class="text-blue-500 hover:underline">View Users</a>
                        </div>

                        <div class="bg-gray-100 p-4 rounded-lg shadow">
                            <h3 class="text-lg font-semibold mb-2">Manage Books</h3>
                            <p>View and manage all the books in the library.</p>
                            <a href="{{ route('admin.allBooks') }}" class="text-blue-500 hover:underline">View Books</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
