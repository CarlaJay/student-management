<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Admin Routes
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/manage-users', [AdminController::class, 'manageUsers'])->name('admin.manage.users');
    });

    // Instructor Routes
    Route::middleware(['role:instructor'])->group(function () {
        Route::get('/instructor/create-course', [InstructorController::class, 'createCourse'])->name('instructor.create.course');
    });

    // Student Routes
    Route::middleware(['role:student'])->group(function () {
        Route::get('/student/view-courses', [StudentController::class, 'viewCourses'])->name('student.view.courses');
    });
});

// General Routes for Courses
Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('courses/create', [CourseController::class, 'create'])->name('courses.create');

// Authentication Routes
require __DIR__.'/auth.php';
