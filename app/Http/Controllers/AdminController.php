<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function manageUsers()
    {
        return view('admin.manage-users'); // Ensure this view exists
    }
}
