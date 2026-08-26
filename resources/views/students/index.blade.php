<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Management</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Inter, ui-sans-serif, system-ui, sans-serif;
            background: #eef1f7;
            color: #182033;
        }

        /* =========================
           NAVIGATION
        ========================= */

        .nav {
            height: 70px;
            background: #111827;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 45px;
            color: white;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-box {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #6366f1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
        }

        .logo-title {
            font-size: 15px;
            font-weight: 800;
        }

        .logo-subtitle {
            color: #9ca3af;
            font-size: 10px;
            margin-top: 2px;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-link {
            color: #cbd5e1;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
        }

        .nav-link:hover {
            color: white;
        }

        .user {
            display: flex;
            align-items: center;
            gap: 9px;
            padding-left: 18px;
            border-left: 1px solid #374151;
        }

        .avatar {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: #6366f1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 800;
        }

        .username {
            font-size: 12px;
            font-weight: 600;
            color: #e5e7eb;
        }

        /* =========================
           MAIN CONTAINER
        ========================= */

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 38px 25px 70px;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            background: #111827;
            border-radius: 22px;
            padding: 38px 42px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 30px;
            margin-bottom: 30px;
            overflow: hidden;
            position: relative;
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: #6366f1;
            opacity: .15;
            right: -100px;
            top: -130px;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-label {
            color: #a5b4fc;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 10px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .hero h1 {
            margin: 0;
            font-size: 34px;
            font-weight: 850;
            letter-spacing: -1px;
        }

        .hero p {
            margin: 9px 0 0;
            color: #cbd5e1;
            font-size: 13px;
            max-width: 600px;
            line-height: 1.6;
        }

        .hero-stat {
            position: relative;
            z-index: 2;
            min-width: 170px;
            padding: 20px;
            border-radius: 16px;
            background: rgba(255, 255, 255, .08);
            border: 1px solid rgba(255, 255, 255, .1);
        }

        .hero-stat-label {
            color: #9ca3af;
            font-size: 11px;
        }

        .hero-stat-number {
            font-size: 36px;
            font-weight: 850;
            margin-top: 4px;
        }

        /* =========================
           ACTION BAR
        ========================= */

        .action-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 22px;
        }

        .page-title h2 {
            margin: 0;
            font-size: 20px;
            font-weight: 850;
        }

        .page-title p {
            margin: 5px 0 0;
            color: #7b8495;
            font-size: 12px;
        }

        .add-button {
            background: #6366f1;
            color: white;
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 10px;
            font-size: 12px;
            font-weight: 800;
            transition: .2s ease;
            white-space: nowrap;
        }

        .add-button:hover {
            background: #4f46e5;
            transform: translateY(-1px);
        }

        /* =========================
           SEARCH / FILTER
        ========================= */

        .filter-box {
            background: white;
            border: 1px solid #e1e5ec;
            border-radius: 16px;
            padding: 18px;
            margin-bottom: 24px;
        }

        .filter-form {
            display: grid;
            grid-template-columns: 1fr 230px auto;
            gap: 12px;
            align-items: end;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .field label {
            color: #596273;
            font-size: 11px;
            font-weight: 750;
        }

        .field input,
        .field select {
            width: 100%;
            height: 43px;
            border: 1px solid #dce1e9;
            border-radius: 9px;
            padding: 0 12px;
            font-size: 12px;
            color: #182033;
            background: white;
            outline: none;
        }

        .field input:focus,
        .field select:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, .1);
        }

        .filter-button {
            height: 43px;
            padding: 0 20px;
            border: none;
            border-radius: 9px;
            background: #111827;
            color: white;
            font-size: 12px;
            font-weight: 800;
            cursor: pointer;
        }

        .filter-button:hover {
            background: #1f2937;
        }

        .clear-link {
            display: inline-flex;
            align-items: center;
            height: 43px;
            padding: 0 15px;
            border-radius: 9px;
            color: #6b7280;
            text-decoration: none;
            font-size: 11px;
            font-weight: 700;
        }

        .clear-link:hover {
            color: #111827;
            background: #f3f4f6;
        }

        /* =========================
           SUCCESS MESSAGE
        ========================= */

        .success-message {
            background: #dcfce7;
            border: 1px solid #bbf7d0;
            color: #166534;
            border-radius: 12px;
            padding: 13px 16px;
            margin-bottom: 20px;
            font-size: 12px;
            font-weight: 700;
        }

        /* =========================
           STUDENT TABLE
        ========================= */

        .table-card {
            background: white;
            border: 1px solid #e1e5ec;
            border-radius: 18px;
            overflow: hidden;
        }

        .table-header {
            padding: 18px 20px;
            border-bottom: 1px solid #edf0f4;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .table-header h3 {
            margin: 0;
            font-size: 15px;
            font-weight: 850;
        }

        .student-count {
            color: #8a93a5;
            font-size: 11px;
            font-weight: 650;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 800px;
        }

        thead {
            background: #f8f9fc;
        }

        th {
            text-align: left;
            padding: 13px 18px;
            color: #7b8495;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: .7px;
            font-weight: 800;
            border-bottom: 1px solid #edf0f4;
        }

        td {
            padding: 15px 18px;
            border-bottom: 1px solid #edf0f4;
            font-size: 12px;
            vertical-align: middle;
        }

        tbody tr {
            transition: .15s ease;
        }

        tbody tr:hover {
            background: #fafbff;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .student-info {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .student-image {
            width: 42px;
            height: 42px;
            border-radius: 11px;
            object-fit: cover;
            border: 1px solid #e5e7eb;
        }

        .student-placeholder {
            width: 42px;
            height: 42px;
            border-radius: 11px;
            background: #ede9fe;
            color: #6366f1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 850;
        }

        .student-name {
            font-weight: 800;
            color: #182033;
        }

        .student-id {
            color: #9aa2b1;
            font-size: 10px;
            margin-top: 3px;
        }

        .email {
            color: #596273;
        }

        .phone {
            color: #596273;
        }

        .course-badge {
            display: inline-block;
            padding: 6px 9px;
            border-radius: 7px;
            background: #ede9fe;
            color: #5b21b6;
            font-size: 10px;
            font-weight: 800;
        }

        /* =========================
           ACTIONS
        ========================= */

        .actions {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .action-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 7px 10px;
            border-radius: 7px;
            text-decoration: none;
            font-size: 10px;
            font-weight: 800;
        }

        .view-button {
            background: #eef2ff;
            color: #4f46e5;
        }

        .view-button:hover {
            background: #e0e7ff;
        }

        .edit-button {
            background: #ecfeff;
            color: #0e7490;
        }

        .edit-button:hover {
            background: #cffafe;
        }

        .delete-button {
            background: #fef2f2;
            color: #dc2626;
            border: none;
            cursor: pointer;
        }

        .delete-button:hover {
            background: #fee2e2;
        }

        /* =========================
           EMPTY STATE
        ========================= */

        .empty {
            text-align: center;
            padding: 75px 20px;
        }

        .empty-icon {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .empty h3 {
            margin: 0;
            font-size: 18px;
        }

        .empty p {
            color: #8a93a5;
            font-size: 13px;
            margin: 8px 0 20px;
        }

        /* =========================
           PAGINATION
        ========================= */

        .pagination {
            padding: 18px 20px;
            border-top: 1px solid #edf0f4;
        }

        .pagination nav {
            display: flex;
            justify-content: center;
        }

        .pagination svg {
            width: 16px;
            height: 16px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 800px) {

            .nav {
                padding: 0 18px;
            }

            .username,
            .nav-link {
                display: none;
            }

            .container {
                padding: 25px 15px 50px;
            }

            .hero {
                padding: 28px;
                flex-direction: column;
                align-items: flex-start;
            }

            .hero h1 {
                font-size: 28px;
            }

            .hero-stat {
                width: 100%;
            }

            .action-bar {
                align-items: flex-start;
                flex-direction: column;
            }

            .add-button {
                width: 100%;
                text-align: center;
            }

            .filter-form {
                grid-template-columns: 1fr;
            }

            .filter-button,
            .clear-link {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>

<body>

<!-- =========================
     NAVIGATION
========================= -->

<header class="nav">

    <div class="logo">

        <div class="logo-box">
            SM
        </div>

        <div>
            <div class="logo-title">
                Student Management
            </div>

            <div class="logo-subtitle">
                Administration Portal
            </div>
        </div>

    </div>

    <div class="nav-right">

        @auth

            <a href="{{ route('dashboard') }}" class="nav-link">
                Dashboard
            </a>

            <a href="{{ route('students.index') }}" class="nav-link">
                Students
            </a>

            <a href="{{ route('courses.index') }}" class="nav-link">
                Courses
            </a>

            <div class="user">

                <div class="avatar">
                    {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                </div>

                <span class="username">
                    {{ auth()->user()->name }}
                </span>

            </div>

        @endauth

    </div>

</header>


<main class="container">

    <!-- =========================
         HERO
    ========================= -->

    <section class="hero">

        <div class="hero-content">

            <div class="hero-label">
                Academic Management
            </div>

            <h1>
                Student Management
            </h1>

            <p>
                Manage student records, view profiles, assign courses,
                and keep your academic information organized.
            </p>

        </div>

        <div class="hero-stat">

            <div class="hero-stat-label">
                TOTAL STUDENTS
            </div>

            <div class="hero-stat-number">
                {{ $students->total() }}
            </div>

        </div>

    </section>


    <!-- =========================
         SUCCESS MESSAGE
    ========================= -->

    @if (session('success'))

        <div class="success-message">
            {{ session('success') }}
        </div>

    @endif


    <!-- =========================
         ACTION BAR
    ========================= -->

    <div class="action-bar">

        <div class="page-title">

            <h2>
                All Students
            </h2>

            <p>
                View and manage registered student records.
            </p>

        </div>

        <a href="{{ route('students.create') }}" class="add-button">
            + Add New Student
        </a>

    </div>


    <!-- =========================
         SEARCH / FILTER
    ========================= -->

    <div class="filter-box">

        <form method="GET" action="{{ route('students.index') }}" class="filter-form">

            <div class="field">

                <label for="search">
                    Search Student
                </label>

                <input
                    type="text"
                    id="search"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Search by name or email..."
                >

            </div>


            <div class="field">

                <label for="course_id">
                    Filter by Course
                </label>

                <select name="course_id" id="course_id">

                    <option value="">
                        All Courses
                    </option>

                    @foreach ($courses as $course)

                        <option
                            value="{{ $course->id }}"
                            {{ request('course_id') == $course->id ? 'selected' : '' }}
                        >
                            {{ $course->name }}
                        </option>

                    @endforeach

                </select>

            </div>


            <div>

                <button type="submit" class="filter-button">
                    Search
                </button>

                @if (request('search') || request('course_id'))

                    <a
                        href="{{ route('students.index') }}"
                        class="clear-link"
                    >
                        Clear
                    </a>

                @endif

            </div>

        </form>

    </div>


    <!-- =========================
         STUDENTS TABLE
    ========================= -->

    <div class="table-card">

        <div class="table-header">

            <h3>
                Registered Students
            </h3>

            <span class="student-count">
                {{ $students->total() }} student{{ $students->total() == 1 ? '' : 's' }}
            </span>

        </div>


        @if ($students->count())

            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>

                            <th>
                                Student
                            </th>

                            <th>
                                Email
                            </th>

                            <th>
                                Phone
                            </th>

                            <th>
                                Course
                            </th>

                            <th>
                                Actions
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @foreach ($students as $student)

                            <tr>

                                <!-- STUDENT -->

                                <td>

                                    <div class="student-info">

                                        @if ($student->image)

                                            <img
                                                src="{{ asset('storage/' . $student->image) }}"
                                                alt="{{ $student->name }}"
                                                class="student-image"
                                            >

                                        @else

                                            <div class="student-placeholder">

                                                {{ strtoupper(substr($student->name, 0, 2)) }}

                                            </div>

                                        @endif


                                        <div>

                                            <div class="student-name">
                                                {{ $student->name }}
                                            </div>

                                            <div class="student-id">
                                                Student ID #{{ $student->id }}
                                            </div>

                                        </div>

                                    </div>

                                </td>


                                <!-- EMAIL -->

                                <td>

                                    <span class="email">
                                        {{ $student->email }}
                                    </span>

                                </td>


                                <!-- PHONE -->

                                <td>

                                    <span class="phone">
                                        {{ $student->phone }}
                                    </span>

                                </td>


                                <!-- COURSE -->

                                <td>

                                    @if ($student->course)

                                        <span class="course-badge">
                                            {{ $student->course->name }}
                                        </span>

                                    @else

                                        <span class="course-badge">
                                            No Course
                                        </span>

                                    @endif

                                </td>


                                <!-- ACTIONS -->

                                <td>

                                    <div class="actions">

                                        <a
                                            href="{{ route('students.show', $student) }}"
                                            class="action-link view-button"
                                        >
                                            View
                                        </a>


                                        <a
                                            href="{{ route('students.edit', $student) }}"
                                            class="action-link edit-button"
                                        >
                                            Edit
                                        </a>


                                        <form
                                            action="{{ route('students.destroy', $student) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this student?');"
                                            style="display:inline;"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="action-link delete-button"
                                            >
                                                Delete
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>


            <!-- PAGINATION -->

            <div class="pagination">

                {{ $students->links() }}

            </div>


        @else

            <!-- EMPTY STATE -->

            <div class="empty">

                <div class="empty-icon">
                    👨‍🎓
                </div>

                <h3>
                    No Students Found
                </h3>

                @if (request('search') || request('course_id'))

                    <p>
                        No students match your current search or course filter.
                    </p>

                    <a
                        href="{{ route('students.index') }}"
                        class="add-button"
                    >
                        Clear Filters
                    </a>

                @else

                    <p>
                        There are currently no students registered in the system.
                    </p>

                    <a
                        href="{{ route('students.create') }}"
                        class="add-button"
                    >
                        + Add First Student
                    </a>

                @endif

            </div>

        @endif

    </div>

</main>

</body>

</html>