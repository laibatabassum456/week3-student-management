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

        /* =========================
           BACK LINK
        ========================= */

        .back-link {
            display: inline-block;
            color: #6366f1;
            text-decoration: none;
            font-size: 12px;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .back-link:hover {
            color: #4f46e5;
        }

        /* =========================
           COURSE HERO
        ========================= */

        .course-hero {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border-radius: 22px;
            padding: 38px;
            color: white;
            position: relative;
            overflow: hidden;
            margin-bottom: 25px;
        }

        .course-hero::after {
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: white;
            opacity: .08;
            right: -100px;
            top: -150px;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .course-number {
            color: rgba(255,255,255,.8);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .course-icon {
            width: 58px;
            height: 58px;
            background: rgba(255,255,255,.18);
            border: 1px solid rgba(255,255,255,.25);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 27px;
            margin-bottom: 20px;
        }

        .course-title {
            margin: 0;
            font-size: 34px;
            font-weight: 850;
            letter-spacing: -1px;
        }

        .course-description {
            margin: 10px 0 0;
            color: #ede9fe;
            font-size: 13px;
            line-height: 1.6;
            max-width: 700px;
        }

        .student-badge {
            display: inline-flex;
            align-items: center;
            margin-top: 20px;
            padding: 8px 13px;
            background: rgba(255,255,255,.14);
            border: 1px solid rgba(255,255,255,.2);
            border-radius: 8px;
            color: white;
            font-size: 10px;
            font-weight: 800;
        }

        /* =========================
           GRID
        ========================= */

        .details-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 20px;
        }

        /* =========================
           CARDS
        ========================= */

        .card {
            background: white;
            border: 1px solid #e1e5ec;
            border-radius: 18px;
            padding: 25px;
        }

        .card-title {
            margin: 0 0 5px;
            font-size: 18px;
            font-weight: 850;
            color: #182033;
        }

        .card-description {
            margin: 0 0 20px;
            color: #8a93a5;
            font-size: 11px;
        }

        /* =========================
           INFORMATION
        ========================= */

        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px;
            padding: 15px 0;
            border-bottom: 1px solid #edf0f4;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            color: #7b8495;
            font-size: 11px;
            font-weight: 700;
        }

        .info-value {
            color: #182033;
            font-size: 12px;
            font-weight: 800;
            text-align: right;
        }

        /* =========================
           ENROLLMENT
        ========================= */

        .enrollment-number {
            font-size: 35px;
            font-weight: 850;
            color: #6366f1;
            margin-top: 5px;
        }

        .enrollment-text {
            color: #7b8495;
            font-size: 11px;
            margin-top: 3px;
        }

        .progress-container {
            margin-top: 20px;
        }

        .progress-label {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .progress-label span {
            color: #7b8495;
            font-size: 10px;
            font-weight: 700;
        }

        .progress {
            width: 100%;
            height: 8px;
            background: #edf0f5;
            border-radius: 20px;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            border-radius: 20px;
            background: #6366f1;
        }

        /* =========================
           ACCESS NOTICE
        ========================= */

        .access-notice {
            background: #eef2ff;
            border: 1px solid #c7d2fe;
            border-radius: 12px;
            padding: 15px;
            margin-top: 20px;
        }

        .access-title {
            color: #3730a3;
            font-size: 11px;
            font-weight: 850;
            margin-bottom: 5px;
        }

        .access-text {
            color: #6366f1;
            font-size: 10px;
            line-height: 1.6;
        }

        /* =========================
           ACTIONS
        ========================= */

        .actions {
            margin-top: 25px;
            display: flex;
            gap: 10px;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 11px 18px;
            border-radius: 9px;
            background: #111827;
            color: white;
            text-decoration: none;
            font-size: 11px;
            font-weight: 800;
            transition: .2s ease;
        }

        .back-button:hover {
            background: #1f2937;
            transform: translateY(-1px);
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 800px) {

            .details-grid {
                grid-template-columns: 1fr;
            }

            .nav {
                padding: 0 20px;
            }

            .username {
                display: none;
            }
        }

        @media (max-width: 600px) {

            .container {
                padding: 25px 15px 50px;
            }

            .course-hero {
                padding: 28px;
            }

            .course-title {
                font-size: 27px;
            }

            .nav-link {
                display: none;
            }

            .info-row {
                flex-direction: column;
                gap: 5px;
            }

            .info-value {
                text-align: left;
            }

            .actions {
                flex-direction: column;
            }

            .back-button {
                width: 100%;
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

            <a
                href="{{ route('student.dashboard') }}"
                class="nav-link"
            >
                Dashboard
            </a>

            <a
                href="{{ route('student.courses') }}"
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


<main class="container">

    <!-- BACK -->

    <a
        href="{{ route('student.courses') }}"
        class="back-link"
    >
        ← Back to Available Courses
    </a>


    <!-- COURSE HERO -->

    <section class="course-hero">

        <div class="hero-content">

            <div class="course-number">
                COURSE {{ str_pad($course->id, 2, '0', STR_PAD_LEFT) }}
            </div>

            <div class="course-icon">
                🎓
            </div>

            <h1 class="course-title">
                {{ $course->name }}
            </h1>

            <p class="course-description">
                {{ $course->description
                    ?? 'Academic course available in the student management system.' }}
            </p>

            <div class="student-badge">
                🎓 Student Access
            </div>

        </div>

    </section>


    <!-- DETAILS -->

    <div class="details-grid">


        <!-- COURSE INFORMATION -->

        <section class="card">

            <h2 class="card-title">
                Course Information
            </h2>

            <p class="card-description">
                Information about this academic course.
            </p>


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
                    Course ID
                </span>

                <span class="info-value">
                    #{{ $course->id }}
                </span>

            </div>


            <div class="info-row">

                <span class="info-label">
                    Description
                </span>

                <span class="info-value">
                    {{ $course->description ?? 'No description available.' }}
                </span>

            </div>


            <div class="info-row">

                <span class="info-label">
                    Current Enrollment
                </span>

                <span class="info-value">
                    {{ $course->students->count() }}
                    {{ $course->students->count() == 1 ? 'Student' : 'Students' }}
                </span>

            </div>

        </section>


        <!-- ENROLLMENT -->

        <section class="card">

            <h2 class="card-title">
                Enrollment
            </h2>

            <p class="card-description">
                Current student enrollment information.
            </p>


            @php

                $enrollment = $course->students->count();

                $maxEnrollment = 50;

                $percentage = min(
                    100,
                    ($enrollment / $maxEnrollment) * 100
                );

            @endphp


            <div class="enrollment-number">
                {{ $enrollment }}
            </div>

            <div class="enrollment-text">
                {{ $enrollment == 1 ? 'student is' : 'students are' }}
                currently enrolled
            </div>


            <div class="progress-container">

                <div class="progress-label">

                    <span>
                        Enrollment
                    </span>

                    <span>
                        {{ round($percentage) }}%
                    </span>

                </div>


                <div class="progress">

                    <div
                        class="progress-bar"
                        style="width: {{ $percentage }}%;"
                    ></div>

                </div>

            </div>


            <!-- ACCESS NOTICE -->

            <div class="access-notice">

                <div class="access-title">
                    🔒 Student Access
                </div>

                <div class="access-text">
                    You can view course information and enrollment
                    details. Course creation, editing, and deletion
                    are restricted to administrators.
                </div>

            </div>

        </section>

    </div>


    <!-- ACTION -->

    <div class="actions">

        <a
            href="{{ route('student.courses') }}"
            class="back-button"
        >
            ← Back to Courses
        </a>

    </div>

</main>

</body>

</html>