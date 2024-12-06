<?php

namespace App\Http\Controllers;

use App\Models\Course;  // Assuming you have a Course model
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Method to create a course
    public function create()
    {
        return view('course.create');  // Ensure you have a view for creating courses
    }

    // Method to show all courses
    public function index()
    {
        $courses = Course::all();  // Retrieve courses from the database
        return view('course.index', compact('courses'));  // Ensure you have a view to display courses
    }
}
