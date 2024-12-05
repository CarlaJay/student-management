<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::middleware(['role:instructor'])->group(function () {
        Route::get('/courses', [CourseController::class, 'index']);
        Route::get('/activities', [ActivityController::class, 'index']);
    });
    
    Route::middleware(['role:student'])->group(function () {
        Route::get('/courses', [CourseController::class, 'studentIndex']);
    });
    
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index']);
    });    

require __DIR__.'/auth.php';
