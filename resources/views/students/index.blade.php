<!DOCTYPE html>
<html>
<head>
    <title>Students</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 40px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .filters {
            background: white;
            padding: 20px;
            margin-bottom: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .filters form {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .filters input,
        .filters select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .filters input {
            flex: 1;
            min-width: 250px;
        }

        .btn {
            padding: 10px 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-search {
            background: #2563eb;
            color: white;
        }

        .btn-reset {
            background: #6b7280;
            color: white;
        }

        .btn-add {
            background: #16a34a;
            color: white;
            display: inline-block;
            margin-bottom: 20px;
        }

        .student {
            background: white;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .student h2 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .course {
            color: #555;
            margin-bottom: 15px;
        }

        .student-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .view-btn {
            background: #2563eb;
            color: white;
            padding: 8px 14px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }

        .pagination {
            margin-top: 25px;
            display: flex;
            justify-content: center;
        }

        .pagination nav {
            display: flex;
            gap: 5px;
        }

        .pagination a,
        .pagination span {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-decoration: none;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 12px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .empty {
            background: white;
            padding: 30px;
            text-align: center;
            border-radius: 8px;
            color: #666;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Students</h1>

    {{-- Success Message --}}
    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Add Student --}}
    <a href="{{ route('students.create') }}" class="btn btn-add">
        + Add Student
    </a>

    {{-- Search and Filter --}}
    <div class="filters">

        <form method="GET" action="{{ route('students.index') }}">

            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Search by name or email..."
            >

            <select name="course_id">
                <option value="">All Courses</option>

                @foreach ($courses as $course)
                    <option
                        value="{{ $course->id }}"
                        {{ request('course_id') == $course->id ? 'selected' : '' }}
                    >
                        {{ $course->name }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-search">
                Search
            </button>

            <a href="{{ route('students.index') }}" class="btn btn-reset">
                Reset
            </a>

        </form>

    </div>

    {{-- Students --}}
    @forelse ($students as $student)

        <div class="student">

            @if ($student->image)
                <img
                    src="{{ asset('storage/' . $student->image) }}"
                    alt="{{ $student->name }}"
                    class="student-image"
                >
            @endif

            <h2>{{ $student->name }}</h2>

            <p>
                <strong>Email:</strong>
                {{ $student->email }}
            </p>

            <p>
                <strong>Phone:</strong>
                {{ $student->phone }}
            </p>

            <div class="course">
                <strong>Course:</strong>
                {{ $student->course->name ?? 'No course assigned' }}
            </div>

            <a
                href="{{ route('students.show', $student) }}"
                class="view-btn"
            >
                View Profile
            </a>

        </div>

    @empty

        <div class="empty">
            <h3>No students found</h3>
            <p>Try changing your search or course filter.</p>
        </div>

    @endforelse

    {{-- Pagination --}}
    @if ($students->hasPages())
        <div class="pagination">
            {{ $students->links() }}
        </div>
    @endif

</div>

</body>
</html>