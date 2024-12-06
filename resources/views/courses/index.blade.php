@extends('layouts.app')
@section('content')
    <h2>Your Courses</h2>
    <a href="{{ route('create.course') }}" class="btn btn-primary">Add New Course</a>
    <ul>
        @foreach ($courses as $course)
            <li>{{ $course->name }} ({{ $course->edp_code }})</li>
        @endforeach
    </ul>
@endsection
