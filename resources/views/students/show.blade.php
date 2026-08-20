<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="max-w-3xl mx-auto py-10">

    <div class="bg-white shadow rounded-lg p-8">

        <div class="text-center">

            @if($student->image)
                <img
                    src="{{ asset('storage/' . $student->image) }}"
                    alt="{{ $student->name }}"
                    class="w-32 h-32 rounded-full object-cover mx-auto mb-4"
                >
            @else
                <div class="w-32 h-32 rounded-full bg-gray-300 flex items-center justify-center mx-auto mb-4">
                    <span class="text-gray-600 text-4xl">
                        {{ strtoupper(substr($student->name, 0, 1)) }}
                    </span>
                </div>
            @endif

            <h1 class="text-2xl font-bold">
                {{ $student->name }}
            </h1>

            <p class="text-gray-600 mt-2">
                {{ $student->email }}
            </p>

        </div>

        <div class="border-t mt-6 pt-6 space-y-4">

            <div>
                <strong>Phone:</strong>
                {{ $student->phone }}
            </div>

            <div>
                <strong>Course:</strong>
                {{ $student->course->name ?? 'No course assigned' }}
            </div>

        </div>

        <div class="mt-6">
            <a
                href="{{ route('students.index') }}"
                class="text-blue-600 hover:underline"
            >
                ← Back to Students
            </a>
        </div>

    </div>

</div>

</body>
</html>