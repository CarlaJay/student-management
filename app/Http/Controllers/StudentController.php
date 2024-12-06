<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function viewCourses()
    {
        return view('student.view-courses');
    }
}
