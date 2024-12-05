<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index()
    {
    $courses = Course::all();
    return view('courses.index', compact('courses'));
    }

     function store(Request $request)
    {
    Course::create($request->all());
    return redirect()->route('courses.index');
    }

}
