<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('course')->latest()->get();

        return view('students.index', compact('students'));
    }

    public function show(Student $student)
    {
        $student->load('course');

        return view('students.show', compact('student'));
    }

    public function updateImage(Request $request, Student $student)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($student->image) {
            \Storage::disk('public')->delete($student->image);
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