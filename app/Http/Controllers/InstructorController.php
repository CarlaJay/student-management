<?php

namespace App\Http\Controllers;

class InstructorController extends Controller
{
    public function createCourse()
    {
        return view('instructor.create-course');
    }
}
