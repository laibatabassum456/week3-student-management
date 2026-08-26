<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $course->name }} - Course Details</title>

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
            max-width: 1050px;
            margin: auto;
            padding: 38px 25px 70px;
        }

        .back-link {
            display: inline-block;
            color: #6366f1;
            text-decoration: none;
            font-size: 12px;
            font-weight: 750;
            margin-bottom: 22px;
        }

        .back-link:hover {
            color: #4f46e5;
        }

        /* =========================
           COURSE HERO
        ========================= */

        .course-hero {
            background: #111827;
            border-radius: 22px;
            padding: 38px 42px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 30px;
            margin-bottom: 25px;
            position: relative;
            overflow: hidden;
        }

        .course-hero::after {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            border-radius: 50%;
            background: #6366f1;
            opacity: .15;
            right: -90px;
            top: -120px;
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

        .hero-title {
            margin: 0;
            font-size: 34px;
            font-weight: 850;
            letter-spacing: -1px;
        }

        .hero-description {
            color: #cbd5e1;
            font-size: 13px;
            line-height: 1.7;
            max-width: 600px;
            margin: 10px 0 0;
        }

        .hero-id {
            position: relative;
            z-index: 2;
            min-width: 130px;
            padding: 18px;
            text-align: center;
            border-radius: 15px;
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.1);
        }

        .hero-id-label {
            color: #9ca3af;
            font-size: 10px;
        }

        .hero-id-number {
            font-size: 26px;
            font-weight: 850;
            margin-top: 4px;
        }

        /* =========================
           ACTIONS
        ========================= */

        .actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-bottom: 25px;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 17px;
            border-radius: 9px;
            font-family: inherit;
            font-size: 11px;
            font-weight: 800;
            text-decoration: none;
            cursor: pointer;
            border: none;
            transition: .2s ease;
        }

        .edit-button {
            background: #6366f1;
            color: white;
        }

        .edit-button:hover {
            background: #4f46e5;
        }

        .delete-button {
            background: #fee2e2;
            color: #b91c1c;
        }

        .delete-button:hover {
            background: #fecaca;
        }

        /* =========================
           STATS
        ========================= */

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-bottom: 25px;
        }

        .stat {
            background: white;
            border-radius: 16px;
            padding: 21px;
            border: 1px solid #e1e5ec;
        }

        .stat-label {
            color: #7b8495;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        .stat-value {
            font-size: 24px;
            font-weight: 850;
            margin-top: 5px;
        }

        /* =========================
           INFORMATION CARD
        ========================= */

        .card {
            background: white;
            border: 1px solid #e1e5ec;
            border-radius: 18px;
            padding: 25px;
            margin-bottom: 25px;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #edf0f4;
        }

        .card-header h2 {
            margin: 0;
            font-size: 18px;
            font-weight: 850;
        }

        .card-header span {
            color: #8a93a5;
            font-size: 11px;
        }

        .description {
            color: #5f6878;
            font-size: 13px;
            line-height: 1.8;
        }

        /* =========================
           STUDENTS
        ========================= */

        .student-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .student {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            padding: 14px;
            border: 1px solid #edf0f4;
            border-radius: 12px;
            transition: .2s ease;
        }

        .student:hover {
            background: #f8fafc;
        }

        .student-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .student-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            overflow: hidden;
            background: #ede9fe;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6366f1;
            font-size: 12px;
            font-weight: 850;
            flex-shrink: 0;
        }

        .student-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .student-name {
            font-size: 13px;
            font-weight: 800;
            color: #182033;
        }

        .student-email {
            color: #8a93a5;
            font-size: 10px;
            margin-top: 3px;
        }

        .view-student {
            color: #6366f1;
            background: #ede9fe;
            padding: 7px 11px;
            border-radius: 7px;
            text-decoration: none;
            font-size: 10px;
            font-weight: 800;
        }

        .view-student:hover {
            background: #ddd6fe;
        }

        /* =========================
           EMPTY
        ========================= */

        .empty {
            text-align: center;
            padding: 45px 20px;
        }

        .empty-icon {
            font-size: 38px;
            margin-bottom: 10px;
        }

        .empty h3 {
            margin: 0;
            font-size: 16px;
        }

        .empty p {
            color: #8a93a5;
            font-size: 12px;
            margin-top: 7px;
        }

        /* =========================
           SUCCESS MESSAGE
        ========================= */

        .success {
            background: #dcfce7;
            border: 1px solid #bbf7d0;
            color: #166534;
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 700px) {

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

            .course-hero {
                padding: 28px;
                flex-direction: column;
                align-items: flex-start;
            }

            .hero-title {
                font-size: 28px;
            }

            .hero-id {
                width: 100%;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .actions {
                justify-content: stretch;
            }

            .actions .button {
                flex: 1;
            }

            .student {
                align-items: flex-start;
            }

            .view-student {
                align-self: center;
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

            <a
                href="{{ route('dashboard') }}"
                class="nav-link"
            >
                Dashboard
            </a>

            <a
                href="{{ route('students.index') }}"
                class="nav-link"
            >
                Students
            </a>

            <a
                href="{{ route('courses.index') }}"
                class="nav-link"
            >
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


<!-- =========================
     MAIN
========================= -->

<main class="container">


    <!-- BACK -->

    <a
        href="{{ route('courses.index') }}"
        class="back-link"
    >
        ← Back to Courses
    </a>


    <!-- SUCCESS -->

    @if (session('success'))

        <div class="success">
            {{ session('success') }}
        </div>

    @endif


    <!-- COURSE HERO -->

    <section class="course-hero">

        <div class="hero-content">

            <div class="hero-label">
                Academic Management
            </div>

            <h1 class="hero-title">
                {{ $course->name }}
            </h1>

            <p class="hero-description">
                {{ $course->description ?? 'Academic course available in the student management system.' }}
            </p>

        </div>


        <div class="hero-id">

            <div class="hero-id-label">
                COURSE ID
            </div>

            <div class="hero-id-number">
                #{{ $course->id }}
            </div>

        </div>

    </section>


    <!-- ACTIONS -->

    <div class="actions">

        <a
            href="{{ route('courses.edit', $course) }}"
            class="button edit-button"
        >
            ✏ Edit Course
        </a>


        <form
            action="{{ route('courses.destroy', $course) }}"
            method="POST"
            onsubmit="return confirm('Are you sure you want to delete this course?');"
        >

            @csrf
            @method('DELETE')

            <button
                type="submit"
                class="button delete-button"
            >
                🗑 Delete Course
            </button>

        </form>

    </div>


    <!-- STATISTICS -->

    @php
        $studentCount = $course->students->count();
    @endphp

    <div class="stats">


        <div class="stat">

            <div class="stat-label">
                Course Status
            </div>

            <div class="stat-value">
                Active
            </div>

        </div>


        <div class="stat">

            <div class="stat-label">
                Enrolled Students
            </div>

            <div class="stat-value">
                {{ $studentCount }}
            </div>

        </div>


        <div class="stat">

            <div class="stat-label">
                Course ID
            </div>

            <div class="stat-value">
                #{{ $course->id }}
            </div>

        </div>

    </div>


    <!-- COURSE INFORMATION -->

    <section class="card">

        <div class="card-header">

            <h2>
                Course Information
            </h2>

            <span>
                Course #{{ $course->id }}
            </span>

        </div>


        <div class="description">

            {{ $course->description
                ?? 'No description has been added for this course.' }}

        </div>

    </section>


    <!-- ENROLLED STUDENTS -->

    <section class="card">

        <div class="card-header">

            <h2>
                Enrolled Students
            </h2>

            <span>
                {{ $studentCount }}
                {{ $studentCount == 1 ? 'Student' : 'Students' }}
            </span>

        </div>


        @if ($course->students->count())


            <div class="student-list">

                @foreach ($course->students as $student)

                    <div class="student">


                        <div class="student-left">


                            <div class="student-avatar">

                                @if ($student->image)

                                    <img
                                        src="{{ asset('storage/' . $student->image) }}"
                                        alt="{{ $student->name }}"
                                    >

                                @else

                                    {{ strtoupper(substr($student->name, 0, 2)) }}

                                @endif

                            </div>


                            <div>

                                <div class="student-name">
                                    {{ $student->name }}
                                </div>

                                <div class="student-email">
                                    {{ $student->email }}
                                </div>

                            </div>


                        </div>


                        <a
                            href="{{ route('students.show', $student) }}"
                            class="view-student"
                        >
                            View Student
                        </a>


                    </div>

                @endforeach

            </div>


        @else


            <div class="empty">

                <div class="empty-icon">
                    👥
                </div>

                <h3>
                    No Students Enrolled
                </h3>

                <p>
                    There are currently no students assigned to this course.
                </p>

            </div>


        @endif

    </section>


</main>

</body>

</html>