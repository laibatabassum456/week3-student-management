<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Course Management</title>

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
           PAGE
        ========================= */

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 38px 25px 70px;
        }

        /* =========================
           TOP
        ========================= */

        .page-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 20px;
            margin-bottom: 25px;
        }

        .page-label {
            color: #6366f1;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 10px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .page-title {
            margin: 0;
            font-size: 32px;
            font-weight: 850;
            letter-spacing: -1px;
        }

        .page-description {
            color: #7b8495;
            font-size: 13px;
            margin-top: 7px;
        }

        .add-button {
            background: #6366f1;
            color: white;
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 9px;
            font-size: 11px;
            font-weight: 800;
            transition: .2s ease;
            white-space: nowrap;
        }

        .add-button:hover {
            background: #4f46e5;
            transform: translateY(-1px);
        }

        /* =========================
           ALERTS
        ========================= */

        .alert {
            padding: 13px 16px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .alert-success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
        }

        .alert-error {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }

        /* =========================
           STATS
        ========================= */

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-bottom: 30px;
        }

        .stat {
            background: white;
            border-radius: 16px;
            padding: 21px;
            border: 1px solid #e1e5ec;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .purple {
            background: #ede9fe;
        }

        .green {
            background: #dcfce7;
        }

        .blue {
            background: #dbeafe;
        }

        .stat-label {
            color: #7b8495;
            font-size: 11px;
            font-weight: 600;
        }

        .stat-value {
            font-size: 22px;
            font-weight: 850;
            margin-top: 3px;
        }

        /* =========================
           SECTION
        ========================= */

        .section-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 18px;
        }

        .section-top h2 {
            margin: 0;
            font-size: 19px;
            font-weight: 850;
        }

        .section-top span {
            color: #8a93a5;
            font-size: 12px;
        }

        /* =========================
           COURSES
        ========================= */

        .courses {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .course {
            background: white;
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid #e1e5ec;
            transition: .25s ease;
        }

        .course:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 35px rgba(15,23,42,.1);
        }

        .course-top {
            height: 115px;
            padding: 20px;
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .course:nth-child(3n+1) .course-top {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
        }

        .course:nth-child(3n+2) .course-top {
            background: linear-gradient(135deg, #0891b2, #2563eb);
        }

        .course:nth-child(3n+3) .course-top {
            background: linear-gradient(135deg, #059669, #0d9488);
        }

        .course-number {
            color: rgba(255,255,255,.8);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .course-symbol {
            width: 52px;
            height: 52px;
            background: rgba(255,255,255,.18);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255,255,255,.25);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 23px;
        }

        .course-body {
            padding: 21px;
        }

        .course-title {
            margin: 0;
            font-size: 18px;
            font-weight: 800;
            color: #182033;
        }

        .course-description {
            color: #7b8495;
            font-size: 12px;
            line-height: 1.6;
            min-height: 40px;
            margin: 8px 0 20px;
        }

        .enrollment-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
        }

        .enrollment-label {
            color: #6b7280;
            font-size: 11px;
            font-weight: 650;
        }

        .enrollment-number {
            color: #182033;
            font-size: 13px;
            font-weight: 850;
        }

        .progress {
            width: 100%;
            height: 7px;
            background: #edf0f5;
            border-radius: 20px;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            border-radius: 20px;
        }

        .course:nth-child(3n+1) .progress-bar {
            background: #6366f1;
        }

        .course:nth-child(3n+2) .progress-bar {
            background: #0891b2;
        }

        .course:nth-child(3n+3) .progress-bar {
            background: #059669;
        }

        /* =========================
           ACTIONS
        ========================= */

        .course-bottom {
            margin-top: 18px;
            padding-top: 15px;
            border-top: 1px solid #edf0f4;
        }

        .course-actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .action-button {
            text-decoration: none;
            padding: 8px 13px;
            border-radius: 7px;
            font-size: 10px;
            font-weight: 800;
            border: none;
            cursor: pointer;
            font-family: inherit;
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
            background: #fee2e2;
            color: #b91c1c;
        }

        .delete-button:hover {
            background: #fecaca;
        }

        .delete-form {
            margin: 0;
        }

        /* =========================
           EMPTY
        ========================= */

        .empty {
            background: white;
            border: 1px solid #e1e5ec;
            border-radius: 18px;
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
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 850px) {

            .courses {
                grid-template-columns: 1fr;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .page-top {
                align-items: flex-start;
                flex-direction: column;
            }
        }

        @media (max-width: 650px) {

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

            .page-title {
                font-size: 28px;
            }

            .add-button {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

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


    <!-- PAGE HEADER -->

    <div class="page-top">

        <div>

            <div class="page-label">
                Academic Management
            </div>

            <h1 class="page-title">
                Courses
            </h1>

            <p class="page-description">
                Create, edit, view and manage academic courses and monitor student enrollment.
            </p>

        </div>


        <a
            href="{{ route('courses.create') }}"
            class="add-button"
        >
            + Add New Course
        </a>

    </div>


    <!-- SUCCESS MESSAGE -->

    @if (session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif


    <!-- ERROR MESSAGE -->

    @if (session('error'))

        <div class="alert alert-error">
            {{ session('error') }}
        </div>

    @endif


    <!-- STATISTICS -->

    @php

        $totalCourses = $courses->count();

        $totalStudents = $courses->sum(function ($course) {
            return $course->students->count();
        });

        $averageEnrollment = $totalCourses > 0
            ? round($totalStudents / $totalCourses, 1)
            : 0;

    @endphp


    <div class="stats">


        <div class="stat">

            <div class="stat-icon purple">
                📚
            </div>

            <div>

                <div class="stat-label">
                    TOTAL COURSES
                </div>

                <div class="stat-value">
                    {{ $totalCourses }}
                </div>

            </div>

        </div>


        <div class="stat">

            <div class="stat-icon green">
                👥
            </div>

            <div>

                <div class="stat-label">
                    ENROLLED STUDENTS
                </div>

                <div class="stat-value">
                    {{ $totalStudents }}
                </div>

            </div>

        </div>


        <div class="stat">

            <div class="stat-icon blue">
                📊
            </div>

            <div>

                <div class="stat-label">
                    AVG. ENROLLMENT
                </div>

                <div class="stat-value">
                    {{ $averageEnrollment }}
                </div>

            </div>

        </div>

    </div>


    <!-- COURSE SECTION -->

    <div class="section-top">

        <h2>
            Available Courses
        </h2>

        <span>
            {{ $totalCourses }}
            {{ $totalCourses == 1 ? 'Course' : 'Courses' }}
        </span>

    </div>


    @if ($courses->count())


        <div class="courses">

            @foreach ($courses as $course)

                @php

                    $enrollment = $course->students->count();

                    $maxEnrollment = 50;

                    $percentage = min(
                        100,
                        ($enrollment / $maxEnrollment) * 100
                    );

                @endphp


                <article class="course">


                    <!-- COURSE HEADER -->

                    <div class="course-top">

                        <div class="course-number">

                            COURSE
                            {{ str_pad($course->id, 2, '0', STR_PAD_LEFT) }}

                        </div>

                        <div class="course-symbol">
                            🎓
                        </div>

                    </div>


                    <!-- COURSE BODY -->

                    <div class="course-body">


                        <h3 class="course-title">
                            {{ $course->name }}
                        </h3>


                        <p class="course-description">

                            {{ $course->description
                                ?? 'Academic course available in the student management system.' }}

                        </p>


                        <div class="enrollment-row">

                            <span class="enrollment-label">
                                Student Enrollment
                            </span>

                            <span class="enrollment-number">

                                {{ $enrollment }}

                                {{ $enrollment == 1 ? 'Student' : 'Students' }}

                            </span>

                        </div>


                        <div class="progress">

                            <div
                                class="progress-bar"
                                style="width: {{ $percentage }}%;"
                            ></div>

                        </div>


                        <!-- ACTIONS -->

                        <div class="course-bottom">

                            <div class="course-actions">


                                <!-- VIEW -->

                                <a
                                    href="{{ route('courses.show', $course) }}"
                                    class="action-button view-button"
                                >
                                    View
                                </a>


                                <!-- EDIT -->

                                <a
                                    href="{{ route('courses.edit', $course) }}"
                                    class="action-button edit-button"
                                >
                                    Edit
                                </a>


                                <!-- DELETE -->

                                <form
                                    action="{{ route('courses.destroy', $course) }}"
                                    method="POST"
                                    class="delete-form"
                                    onsubmit="return confirm('Are you sure you want to delete this course?');"
                                >

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="action-button delete-button"
                                    >
                                        Delete
                                    </button>

                                </form>


                            </div>

                        </div>

                    </div>

                </article>

            @endforeach

        </div>


    @else


        <!-- EMPTY STATE -->

        <div class="empty">

            <div class="empty-icon">
                🎓
            </div>

            <h3>
                No Courses Available
            </h3>

            <p>
                There are currently no courses registered in the system.
            </p>

            <br>

            <a
                href="{{ route('courses.create') }}"
                class="add-button"
            >
                + Add Your First Course
            </a>

        </div>

    @endif


</main>

</body>

</html>