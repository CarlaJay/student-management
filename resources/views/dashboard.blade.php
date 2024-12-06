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
                    <h1 class="text-lg font-bold">Welcome, {{ Auth::user()->name }}!</h1>

                    {{-- Role-Based Dashboard --}}
                    @if(Auth::user()->role == 'instructor')
                        <h2 class="text-xl mt-6">Instructor Dashboard</h2>
                        <a href="{{ route('create.course') }}" class="text-blue-600 underline">Create Course</a>
                    @elseif(Auth::user()->role == 'student')
                        <h2 class="text-xl mt-6">Student Dashboard</h2>
                        <a href="{{ route('view.courses') }}" class="text-blue-600 underline">View Courses</a>
                    @else
                        <h2 class="text-xl mt-6">Admin Dashboard</h2>
                        <a href="{{ route('manage.users') }}" class="text-blue-600 underline">Manage Users</a>
                    @endif

                    {{-- Activities Section --}}
                    <h2 class="mt-8 text-lg font-semibold">Recent Activities</h2>
                    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                        @if(isset($activities) && $activities->count())
                            @foreach ($activities as $activity)
                                <li>{{ $activity->title }} - Due: {{ $activity->due_date }}</li>
                            @endforeach
                        @else
                            <li>No recent activities.</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
