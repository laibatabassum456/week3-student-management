<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $course->name }} - Student Portal</title>

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

        .container {
            max-width: 1000px;
            margin: auto;
            padding: 38px 25px 70px;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 22px;
            color: #6366f1;
            text-decoration: none;
            font-size: 12px;
            font-weight: 800;
        }

        .hero {
            background: #111827;
            border-radius: 20px;
            padding: 35px;
            color: white;
            margin-bottom: 22px;
        }

        .label {
            color: #a5b4fc;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 10px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .title {
            margin: 0;
            font-size: 32px;
            font-weight: 850;
        }

        .description {
            color: #cbd5e1;
            font-size: 13px;
            line-height: 1.7;
            margin-top: 10px;
        }

        .course-number {
            margin-top: 18px;
            color: #9ca3af;
            font-size: 11px;
            font-weight: 700;
        }

        .grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
        }

        .card {
            background: white;
            border: 1px solid #e1e5ec;
            border-radius: 18px;
            padding: 25px;
        }

        .card-title {
            margin: 0 0 18px;
            font-size: 18px;
            font-weight: 850;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 13px 0;
            border-bottom: 1px solid #edf0f4;
        }

        .info-label {
            color: #7b8495;
            font-size: 12px;
            font-weight: 700;
        }

        .info-value {
            color: #182033;
            font-size: 12px;
            font-weight: 800;
            text-align: right;
        }

        .enrollment-number {
            font-size: 34px;
            font-weight: 850;
            color: #6366f1;
        }

        .enrollment-text {
            color: #7b8495;
            font-size: 12px;
        }

        .student-list {
            margin-top: 20px;
        }

        .student {
            padding: 12px;
            background: #f8fafc;
            border-radius: 9px;
            margin-bottom: 8px;
            font-size: 12px;
            font-weight: 700;
        }

        .notice {
            margin-top: 20px;
            padding: 15px;
            border-radius: 10px;
            background: #eef2ff;
            color: #4338ca;
            font-size: 11px;
            line-height: 1.6;
            font-weight: 600;
        }

        @media (max-width: 750px) {

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

            .grid {
                grid-template-columns: 1fr;
            }

            .hero {
                padding: 27px;
            }

            .title {
                font-size: 27px;
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
                Student Portal
            </div>
        </div>

    </div>

    <div class="nav-right">

        @auth

            <a href="{{ route('student.dashboard') }}" class="nav-link">
                Dashboard
            </a>

            <a href="{{ route('student.courses') }}" class="nav-link">
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

    <a
        href="{{ route('student.courses') }}"
        class="back-link"
    >
        ← Back to Available Courses
    </a>


    <section class="hero">

        <div class="label">
            Student Portal
        </div>

        <h1 class="title">
            {{ $course->name }}
        </h1>

        <div class="description">
            {{ $course->description ?? 'No description has been provided for this course.' }}
        </div>

        <div class="course-number">
            COURSE {{ str_pad($course->id, 2, '0', STR_PAD_LEFT) }}
        </div>

    </section>


    <div class="grid">

        <section class="card">

            <h2 class="card-title">
                Course Information
            </h2>

            <div class="info-row">

                <span class="info-label">
                    Course Name
                </span>

                <span class="info-value">
                    {{ $course->name }}
                </span>

            </div>

            <div class="info-row">

                <span class="info-label">
                    Description
                </span>

                <span class="info-value">
                    {{ $course->description ?? 'Not provided' }}
                </span>

            </div>

            <div class="info-row">

                <span class="info-label">
                    Course ID
                </span>

                <span class="info-value">
                    {{ $course->id }}
                </span>

            </div>

            <div class="info-row">

                <span class="info-label">
                    Total Students
                </span>

                <span class="info-value">
                    {{ $course->students->count() }}
                </span>

            </div>

            <div class="notice">
                🔒 You are viewing this course as a student.
                Course creation, editing, and deletion are restricted
                to administrators.
            </div>

        </section>


        <section class="card">

            <h2 class="card-title">
                Enrollment
            </h2>

            <div class="enrollment-number">
                {{ $course->students->count() }}
            </div>

            <div class="enrollment-text">
                {{ $course->students->count() == 1 ? 'Student enrolled' : 'Students enrolled' }}
            </div>


            @if ($course->students->count())

                <div class="student-list">

                    <strong style="font-size: 12px;">
                        Enrolled Students
                    </strong>

                    <br><br>

                    @foreach ($course->students as $student)

                        <div class="student">
                            👤 {{ $student->name }}
                        </div>

                    @endforeach

                </div>

            @else

                <div class="notice">
                    No students are currently enrolled in this course.
                </div>

            @endif

        </section>

    </div>

</main>

</body>

</html>