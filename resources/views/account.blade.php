@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Account Information
        </h2>
        <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        <p><strong>Role:</strong> {{ Auth::user()->role }}</p>
    </div>
@endsection
