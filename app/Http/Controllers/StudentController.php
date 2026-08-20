<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of students.
     */
    public function index(Request $request)
    {
        $query = Student::with('course');

        // Search students by name or email
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        // Filter by course
        if ($request->filled('course_id')) {
            $query->where('course_id', $request->course_id);
        }

        // Pagination
        $students = $query->latest()->paginate(5)->withQueryString();

        $courses = Course::orderBy('name')->get();

        return view('students.index', compact('students', 'courses'));
    }

    /**
     * Show the form for creating a new student.
     */
    public function create()
    {
        $courses = Course::orderBy('name')->get();

        return view('students.create', compact('courses'));
    }

    /**
     * Store a newly created student.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:students,email',
            'phone' => 'required|string|max:20',
            'course_id' => 'required|exists:courses,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')
                ->store('students', 'public');
        }

        Student::create($validated);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student created successfully!');
    }

    /**
     * Display the specified student.
     */
    public function show(Student $student)
    {
        $student->load('course');

        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified student.
     */
    public function edit(Student $student)
    {
        $student->load('course');

        $courses = Course::orderBy('name')->get();

        return view('students.edit', compact('student', 'courses'));
    }

    /**
     * Update the specified student.
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:students,email,' . $student->id,
            'phone' => 'required|string|max:20',
            'course_id' => 'required|exists:courses,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($student->image) {
                Storage::disk('public')->delete($student->image);
            }

            $validated['image'] = $request->file('image')
                ->store('students', 'public');
        }

        $student->update($validated);

        return redirect()
            ->route('students.show', $student)
            ->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified student.
     */
    public function destroy(Student $student)
    {
        if ($student->image) {
            Storage::disk('public')->delete($student->image);
        }

        $student->delete();

        return redirect()
            ->route('students.index')
            ->with('success', 'Student deleted successfully!');
    }

    /**
     * Update only the student's profile image.
     */
    public function updateImage(Request $request, Student $student)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($student->image) {
            Storage::disk('public')->delete($student->image);
        }

        $path = $request->file('image')->store('students', 'public');

        $student->update([
            'image' => $path,
        ]);

        return redirect()
            ->route('students.show', $student)
            ->with('success', 'Profile image updated successfully!');
    }
}