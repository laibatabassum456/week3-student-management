<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Student</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="max-w-2xl mx-auto py-10 px-4">

    <div class="bg-white shadow-md rounded-lg p-8">

        <div class="flex items-center justify-between mb-6">

            <h1 class="text-2xl font-bold text-gray-800">
                Add New Student
            </h1>

            <a
                href="{{ route('students.index') }}"
                class="text-blue-600 hover:text-blue-800"
            >
                ← Back to Students
            </a>

        </div>

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="mb-6 bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded">

                <strong>Please fix the following errors:</strong>

                <ul class="mt-2 list-disc list-inside">

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>
        @endif

        <form
            action="{{ route('students.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf

            {{-- Name --}}
            <div class="mb-5">

                <label
                    for="name"
                    class="block font-medium text-gray-700 mb-2"
                >
                    Name
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    placeholder="Enter student name"
                >

                @error('name')
                    <p class="text-red-600 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            {{-- Email --}}
            <div class="mb-5">

                <label
                    for="email"
                    class="block font-medium text-gray-700 mb-2"
                >
                    Email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    placeholder="student@example.com"
                >

                @error('email')
                    <p class="text-red-600 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            {{-- Phone --}}
            <div class="mb-5">

                <label
                    for="phone"
                    class="block font-medium text-gray-700 mb-2"
                >
                    Phone
                </label>

                <input
                    type="text"
                    id="phone"
                    name="phone"
                    value="{{ old('phone') }}"
                    required
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    placeholder="03001234567"
                >

                @error('phone')
                    <p class="text-red-600 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            {{-- Course --}}
            <div class="mb-5">

                <label
                    for="course_id"
                    class="block font-medium text-gray-700 mb-2"
                >
                    Course
                </label>

                <select
                    id="course_id"
                    name="course_id"
                    required
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                >

                    <option value="">
                        Select Course
                    </option>

                    @foreach ($courses as $course)

                        <option
                            value="{{ $course->id }}"
                            {{ old('course_id') == $course->id ? 'selected' : '' }}
                        >
                            {{ $course->name }}
                        </option>

                    @endforeach

                </select>

                @error('course_id')
                    <p class="text-red-600 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            {{-- Image --}}
            <div class="mb-6">

                <label
                    for="image"
                    class="block font-medium text-gray-700 mb-2"
                >
                    Profile Image
                </label>

                <input
                    type="file"
                    id="image"
                    name="image"
                    accept=".jpg,.jpeg,.png,.webp"
                    class="w-full border border-gray-300 rounded-md p-2"
                >

                <p class="text-sm text-gray-500 mt-1">
                    JPG, JPEG, PNG or WEBP. Maximum size: 2MB.
                </p>

                @error('image')
                    <p class="text-red-600 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            {{-- Submit --}}
            <div class="flex items-center gap-3">

                <button
                    type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700"
                >
                    Add Student
                </button>

                <a
                    href="{{ route('students.index') }}"
                    class="bg-gray-200 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-300"
                >
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>