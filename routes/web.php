<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    |
    | Admins see the admin dashboard.
    | Students are redirected to the student dashboard.
    |
    */

    Route::get('/dashboard', function () {

        if (auth()->user()->role === 'admin') {
            return view('dashboard');
        }

        if (auth()->user()->role === 'student') {
            return redirect()->route('student.dashboard');
        }

        abort(403);

    })->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | STUDENT DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get('/student/dashboard', function () {
        return view('student-dashboard');
    })
        ->middleware('student')
        ->name('student.dashboard');


    /*
    |--------------------------------------------------------------------------
    | ADMIN ONLY ROUTES
    |--------------------------------------------------------------------------
    */

    Route::middleware('admin')->group(function () {

        /*
        |--------------------------------------------------------------------------
        | STUDENT MANAGEMENT
        |--------------------------------------------------------------------------
        */

        Route::resource('students', StudentController::class);

        Route::post(
            '/students/{student}/image',
            [StudentController::class, 'updateImage']
        )->name('students.updateImage');


        /*
        |--------------------------------------------------------------------------
        | COURSE MANAGEMENT
        |--------------------------------------------------------------------------
        */

        // Create new course
        Route::get(
            '/courses/create',
            [CourseController::class, 'create']
        )->name('courses.create');

        // Store new course
        Route::post(
            '/courses',
            [CourseController::class, 'store']
        )->name('courses.store');

        // Edit course
        Route::get(
            '/courses/{course}/edit',
            [CourseController::class, 'edit']
        )->name('courses.edit');

        // Update course
        Route::put(
            '/courses/{course}',
            [CourseController::class, 'update']
        )->name('courses.update');

        // Delete course
        Route::delete(
            '/courses/{course}',
            [CourseController::class, 'destroy']
        )->name('courses.destroy');


        /*
        |--------------------------------------------------------------------------
        | USER MANAGEMENT
        |--------------------------------------------------------------------------
        */

        Route::get(
            '/admin/users',
            [UserController::class, 'index']
        )->name('users.index');

        Route::get(
            '/admin/users/create',
            [UserController::class, 'create']
        )->name('users.create');

        Route::post(
            '/admin/users',
            [UserController::class, 'store']
        )->name('users.store');

        Route::patch(
            '/admin/users/{user}/role',
            [UserController::class, 'updateRole']
        )->name('users.updateRole');

        Route::delete(
            '/admin/users/{user}',
            [UserController::class, 'destroy']
        )->name('users.destroy');

    });


    /*
    |--------------------------------------------------------------------------
    | COURSE VIEWING
    |--------------------------------------------------------------------------
    |
    | Both Admin and Student can view courses.
    |
    */

    Route::get(
        '/courses',
        [CourseController::class, 'index']
    )->name('courses.index');

    Route::get(
        '/courses/{course}',
        [CourseController::class, 'show']
    )->name('courses.show');


    /*
    |--------------------------------------------------------------------------
    | STUDENT COURSE LIST
    |--------------------------------------------------------------------------
    |
    | Students can view the list of available courses.
    |
    */

    Route::get(
        '/student/courses',
        [CourseController::class, 'index']
    )
        ->middleware('student')
        ->name('student.courses');


    /*
    |--------------------------------------------------------------------------
    | PROFILE
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/profile',
        [ProfileController::class, 'edit']
    )->name('profile.edit');

    Route::patch(
        '/profile',
        [ProfileController::class, 'update']
    )->name('profile.update');

    Route::delete(
        '/profile',
        [ProfileController::class, 'destroy']
    )->name('profile.destroy');

});


require __DIR__ . '/auth.php';
