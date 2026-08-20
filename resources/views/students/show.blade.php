<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="max-w-3xl mx-auto py-10 px-4">

    <div class="bg-white shadow rounded-lg p-8">

        {{-- Success Message --}}
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        {{-- Validation Errors --}}
        @if($errors->any())
            <div class="mb-6 p-4 bg-red-100 text-red-700 rounded">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Student Profile --}}
        <div class="text-center">

            {{-- Student Image --}}
            @if($student->image)
                <img
                    src="{{ asset('storage/' . $student->image) }}"
                    alt="{{ $student->name }}"
                    class="w-32 h-32 rounded-full object-cover mx-auto mb-4"
                >
            @else
                <div
                    class="w-32 h-32 rounded-full bg-gray-300 flex items-center justify-center mx-auto mb-4"
                >
                    <span class="text-gray-600 text-4xl">
                        {{ strtoupper(substr($student->name, 0, 1)) }}
                    </span>
                </div>
            @endif

            {{-- Student Name --}}
            <h1 class="text-2xl font-bold">
                {{ $student->name }}
            </h1>

            {{-- Student Email --}}
            <p class="text-gray-600 mt-2">
                {{ $student->email }}
            </p>

        </div>

        {{-- Student Information --}}
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

        {{-- Image Upload --}}
        <div class="border-t mt-6 pt-6">

            <h2 class="text-lg font-semibold mb-4">
                Update Profile Image
            </h2>

            <form
                action="{{ route('students.updateImage', $student) }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf

                <div>
                    <label
                        for="image"
                        class="block font-medium text-gray-700 mb-2"
                    >
                        Choose Image
                    </label>

                    <input
                        type="file"
                        id="image"
                        name="image"
                        accept="image/jpeg,image/png,image/jpg,image/webp"
                        class="block w-full border border-gray-300 rounded p-2"
                        required
                    >
                </div>

                <p class="text-sm text-gray-500 mt-2">
                    Allowed formats: JPG, JPEG, PNG, WEBP.
                    Maximum size: 2MB.
                </p>

                <button
                    type="submit"
                    class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
                >
                    Upload Image
                </button>

            </form>

        </div>

        {{-- Back Button --}}
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