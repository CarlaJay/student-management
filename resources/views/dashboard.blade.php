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
                    {{ __("You're logged in!") }}

                    {{-- Role-based content --}}
                    @if(Auth::user()->role == 'instructor')
                        <h1>Instructor Dashboard</h1>
                        <a href="{{ route('create.course') }}" class="text-blue-600">Create Course</a>
                    @elseif(Auth::user()->role == 'student')
                        <h1>Student Dashboard</h1>
                        <a href="{{ route('view.courses') }}" class="text-blue-600">View Courses</a>
                    @else
                        <h1>Admin Dashboard</h1>
                        <a href="{{ route('manage.users') }}" class="text-blue-600">Manage Users</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
