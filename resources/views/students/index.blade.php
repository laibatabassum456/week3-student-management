```blade
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
            max-width: 550px;
            line-height: 1.6;
        }

        .hero-stat {
            position: relative;
            z-index: 2;
            min-width: 170px;
            padding: 20px;
            border-radius: 16px;
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.1);
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
           QUICK STATS
        ========================= */

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-bottom: 32px;
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

        .orange {
            background: #ffedd5;
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
            grid-template-columns: repeat(3, 1fr);
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
            transform: translateY(-6px);
            box-shadow: 0 18px 35px rgba(15,23,42,.1);
        }

        .course-top {
            height: 125px;
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
            font-size: 17px;
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

        .course-bottom {
            margin-top: 18px;
            padding-top: 15px;
            border-top: 1px solid #edf0f4;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .active {
            color: #15803d;
            background: #dcfce7;
            padding: 5px 9px;
            border-radius: 6px;
            font-size: 10px;
            font-weight: 800;
        }

        .course-code {
            color: #9aa2b1;
            font-size: 10px;
            font-weight: 700;
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

        @media (max-width: 950px) {
            .courses {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero {
                align-items: flex-start;
            }
        }

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

            .hero {
                padding: 28px;
                flex-direction: column;
            }

            .hero h1 {
                font-size: 28px;
            }

            .hero-stat {
                width: 100%;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .courses {
                grid-template-columns: 1fr;
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

    <!-- HERO -->

    <section class="hero">

        <div class="hero-content">

            <div class="hero-label">
                Academic Management
            </div>

            <h1>
                Course Management
            </h1>

            <p>
                Manage your academic courses and monitor how many
                students are enrolled in each program.
            </p>

        </div>


        <div class="hero-stat">

            <div class="hero-stat-label">
                AVAILABLE COURSES
            </div>

            <div class="hero-stat-number">
                {{ $courses->count() }}
            </div>

        </div>

    </section>


    <!-- QUICK STATS -->

    @php
        $totalStudents = $courses->sum(function ($course) {
            return $course->students->count();
        });

        $largestCourse = $courses->sortByDesc(function ($course) {
            return $course->students->count();
        })->first();

        $largestEnrollment = $largestCourse
            ? $largestCourse->students->count()
            : 0;
    @endphp


    <div class="stats">

        <div class="stat">

            <div class="stat-icon purple">
                🎓
            </div>

            <div>

                <div class="stat-label">
                    TOTAL COURSES
                </div>

                <div class="stat-value">
                    {{ $courses->count() }}
                </div>

            </div>

        </div>


        <div class="stat">

            <div class="stat-icon green">
                👥
            </div>

            <div>

                <div class="stat-label">
                    TOTAL ENROLLMENTS
                </div>

                <div class="stat-value">
                    {{ $totalStudents }}
                </div>

            </div>

        </div>


        <div class="stat">

            <div class="stat-icon orange">
                ⭐
            </div>

            <div>

                <div class="stat-label">
                    LARGEST COURSE
                </div>

                <div class="stat-value">
                    {{ $largestEnrollment }}
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
            {{ $courses->count() }}
            total
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

                    <!-- COLOR HEADER -->

                    <div class="course-top">

                        <div class="course-number">
                            COURSE {{ str_pad($course->id, 2, '0', STR_PAD_LEFT) }}
                        </div>

                        <div class="course-symbol">
                            🎓
                        </div>

                    </div>


                    <!-- BODY -->

                    <div class="course-body">

                        <h3 class="course-title">
                            {{ $course->name }}
                        </h3>


                        <p class="course-description">

                            {{ $course->description
                                ?? 'Academic program available for student enrollment and management.' }}

                        </p>


                        <div class="enrollment-row">

                            <span class="enrollment-label">
                                Student Enrollment
                            </span>

                            <span class="enrollment-number">
                                {{ $enrollment }}
                            </span>

                        </div>


                        <div class="progress">

                            <div
                                class="progress-bar"
                                style="width: {{ $percentage }}%;">
                            </div>

                        </div>


                        <div class="course-bottom">

                            <span class="active">
                                ● ACTIVE
                            </span>

                            <span class="course-code">
                                ID #{{ $course->id }}
                            </span>

                        </div>

                    </div>

                </article>

            @endforeach

        </div>

    @else

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

        </div>

    @endif

</main>

</body>

</html>
```
