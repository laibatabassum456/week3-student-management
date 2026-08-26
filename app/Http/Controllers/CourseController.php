<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of courses.
     */
    public function index()
    {
        $courses = Course::with('students')->latest()->get();

        /*
         * Students get their own course listing page.
         * Admins get the admin course management page.
         */
        if (auth()->user()->role === 'student') {
            return view('student-courses', compact('courses'));
        }

        return view('courses.index', compact('courses'));
    }


    /**
     * Show the form for creating a new course.
     *
     * Admin only.
     */
    public function create()
    {
        return view('courses.create');
    }


    /**
     * Store a newly created course.
     *
     * Admin only.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:courses,name',
            'description' => 'nullable|string|max:1000',
        ]);

        Course::create($validated);

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course created successfully!');
    }


    /**
     * Display the specified course.
     *
     * Admins and students can VIEW a course.
     * They receive different Blade pages.
     */
    public function show(Course $course)
    {
        // Load enrolled students
        $course->load('students');

        /*
         * If the logged-in user is a student,
         * show the student-only course details page.
         */
        if (auth()->user()->role === 'student') {
            return view('student-course-details', compact('course'));
        }

        /*
         * Otherwise show the admin course details page.
         */
        return view('courses.show', compact('course'));
    }


    /**
     * Show the form for editing the specified course.
     *
     * Admin only.
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }


    /**
     * Update the specified course.
     *
     * Admin only.
     */
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:courses,name,' . $course->id,
            'description' => 'nullable|string|max:1000',
        ]);

        $course->update($validated);

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course updated successfully!');
    }


    /**
     * Remove the specified course.
     *
     * Admin only.
     */
    public function destroy(Course $course)
    {
        /*
         * Prevent deleting a course that still has students.
         * This protects existing student-course relationships.
         */
        if ($course->students()->exists()) {
            return redirect()
                ->route('courses.index')
                ->with(
                    'error',
                    'This course cannot be deleted because students are currently enrolled in it.'
                );
        }

        $course->delete();

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course deleted successfully!');
    }
}