<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex">
            <!-- Sidebar -->
            <div class="w-1/4 bg-blue-600 text-white h-screen p-5">
                <ul>
                    <li><a href="{{ route('account') }}" class="block py-2">Account</a></li>
                    <li><a href="/dashboard" class="block py-2">Dashboard</a></li>
                    <li><a href="/courses" class="block py-2">Courses</a></li>
                    <li><a href="/calendar" class="block py-2">Calendar</a></li>
                    <li><a href="/history" class="block py-2">History</a></li>
                    <li class="mt-auto"><a href="/logout" class="block py-2">Logout</a></li>
                </ul>
            </div>

            <!-- Main Content Area -->
            <div class="w-3/4 p-5">
                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white dark:bg-gray-800 shadow mb-6">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
