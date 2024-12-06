<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('dashboard');
    }

    public function manageUsers()
    {
        return view('admin.manage-users');
    }

    public function createCourse()
    {
        return view('instructor.create-course');
    }

    public function viewCourses()
    {
        return view('student.view-courses');
    }
}
