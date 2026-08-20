<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/courses', [CourseController::class, 'index'])
    ->name('courses.index');

Route::get('/students', [StudentController::class, 'index'])
    ->name('students.index');