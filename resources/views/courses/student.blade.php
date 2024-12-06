extends('layouts.app')
@section('content')
    <h2>Enrolled Courses</h2>
    <ul>
        @foreach ($courses as $course)
            <li>{{ $course->name }} - Instructor: {{ $course->instructor->name }}</li>
        @endforeach
    </ul>
@endsection
