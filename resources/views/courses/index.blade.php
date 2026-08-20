<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Courses | Student Management</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system,
                BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: #eef2f7;
            color: #172033;
        }

        .page {
            min-height: 100vh;
        }

        /* TOP BAR */

        .topbar {
            height: 72px;
            background: #172033;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 42px;
            color: white;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: white;
        }

        .brand-logo {
            width: 41px;
            height: 41px;
            border-radius: 12px;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 16px;
        }

        .brand-title {
            font-size: 16px;
            font-weight: 750;
        }

        .brand-subtitle {
            font-size: 11px;
            color: #aeb7c7;
            margin-top: 2px;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .dashboard-link {
            color: #d8deea;
            text-decoration: none;
            font-size: 13px;
            font-weight: 650;
            padding: 8px 12px;
            border-radius: 8px;
        }

        .dashboard-link:hover {
            background: #263247;
            color: white;
        }

        .user-area {
            display: flex;
            align-items: center;
            gap: 9px;
            border-left: 1px solid #394457;
            padding-left: 18px;
        }

        .user-avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: #eef2ff;
            color: #4f46e5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 800;
        }

        .user-name {
            font-size: 13px;
            color: #e5e7eb;
            font-weight: 600;
        }

        /* MAIN */

        .main {
            max-width: 1180px;
            margin: auto;
            padding: 42px 25px 65px;
        }

        .breadcrumb {
            margin-bottom: 20px;
        }

        .breadcrumb a {
            text-decoration: none;
            color: #64748b;
            font-size: 13px;
            font-weight: 600;
        }

        .breadcrumb a:hover {
            color: #4f46e5;
        }

        .heading {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 32px;
        }

        .eyebrow {
            color: #6366f1;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .12em;
            margin-bottom: 7px;
        }

        h1 {
            margin: 0;
            font-size: 34px;
            letter-spacing: -.04em;
            font-weight: 800;
            color: #172033;
        }

        .description {
            margin-top: 8px;
            color: #697586;
            font-size: 14px;
        }

        /* SUMMARY */

        .summary {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 18px;
            margin-bottom: 30px;
        }

        .summary-card {
            background: white;
            border-radius: 16px;
            padding: 21px;
            border: 1px solid #e1e6ee;
            box-shadow: 0 5px 18px rgba(15, 23, 42, .05);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .summary-label {
            color: #7b8494;
            font-size: 12px;
            font-weight: 700;
        }

        .summary-number {
            margin-top: 5px;
            font-size: 28px;
            font-weight: 800;
            color: #172033;
        }

        .summary-icon {
            width: 48px;
            height: 48px;
            border-radius: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .icon-purple {
            background: #ede9fe;
            color: #7c3aed;
        }

        .icon-green {
            background: #dcfce7;
            color: #15803d;
        }

        .icon-blue {
            background: #dbeafe;
            color: #2563eb;
        }

        /* COURSE GRID */

        .section-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 17px;
        }

        .section-title {
            font-size: 17px;
            font-weight: 800;
            color: #202737;
        }

        .section-count {
            background: #e2e8f0;
            color: #64748b;
            padding: 5px 10px;
            border-radius: 999px;
            font-size: 11px;
            font-weight: 750;
        }

        .course-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .course-card {
            background: white;
            border: 1px solid #e1e6ee;
            border-radius: 17px;
            overflow: hidden;
            box-shadow: 0 5px 18px rgba(15, 23, 42, .05);
            transition: .2s ease;
        }

        .course-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(15, 23, 42, .10);
        }

        .course-top {
            height: 105px;
            padding: 20px;
            background: linear-gradient(135deg, #312e81, #6366f1);
            position: relative;
        }

        .course-number {
            color: rgba(255,255,255,.7);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: .08em;
            text-transform: uppercase;
        }

        .course-symbol {
            position: absolute;
            right: 19px;
            bottom: 15px;
            width: 45px;
            height: 45px;
            border-radius: 13px;
            background: rgba(255,255,255,.16);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .course-body {
            padding: 21px;
        }

        .course-name {
            font-size: 18px;
            font-weight: 800;
            color: #202737;
            margin-bottom: 8px;
        }

        .course-description {
            color: #7b8494;
            font-size: 12px;
            line-height: 1.6;
            min-height: 39px;
        }

        .course-footer {
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #edf0f4;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .students-count {
            display: flex;
            align-items: center;
            gap: 7px;
            color: #596274;
            font-size: 12px;
            font-weight: 650;
        }

        .students-icon {
            width: 28px;
            height: 28px;
            border-radius: 8px;
            background: #eef2ff;
            color: #4f46e5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        .view-link {
            text-decoration: none;
            color: #4f46e5;
            font-size: 12px;
            font-weight: 750;
        }

        .view-link:hover {
            color: #3730a3;
        }

        /* EMPTY */

        .empty {
            background: white;
            border: 1px solid #e1e6ee;
            border-radius: 17px;
            padding: 65px 20px;
            text-align: center;
        }

        .empty-icon {
            width: 62px;
            height: 62px;
            border-radius: 16px;
            background: #ede9fe;
            color: #7c3aed;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 25px;
        }

        .empty-title {
            font-size: 17px;
            font-weight: 800;
        }

        .empty-text {
            margin-top: 6px;
            color: #7b8494;
            font-size: 13px;
        }

        /* RESPONSIVE */

        @media(max-width: 900px) {
            .course-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .summary {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media(max-width: 620px) {
            .topbar {
                padding: 0 18px;
            }

            .brand-subtitle,
            .dashboard-link,
            .user-name {
                display: none;
            }

            .main {
                padding: 30px 16px 50px;
            }

            .heading {
                align-items: flex-start;
                flex-direction: column;
            }

            h1 {
                font-size: 28px;
            }

            .summary {
                grid-template-columns: 1fr;
            }

            .course-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="page">

    {{-- TOP NAVIGATION --}}
    <header class="topbar">

        <a href="{{ route('dashboard') }}" class="brand">

            <div class="brand-logo">
                SM
            </div>

            <div>
                <div class="brand-title">
                    Student Management
                </div>

                <div class="brand-subtitle">
                    Administration Portal
                </div>
            </div>

        </a>

        <div class="topbar-right">

            @auth

                <a href="{{ route('dashboard') }}" class="dashboard-link">
                    Dashboard
                </a>

                <div class="user-area">

                    <div class="user-avatar">
                        {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                    </div>

                    <span class="user-name">
                        {{ auth()->user()->name }}
                    </span>

                </div>

            @endauth

        </div>

    </header>


    {{-- MAIN --}}
    <main class="main">

        <div class="breadcrumb">
            <a href="{{ route('dashboard') }}">
                ← Back to Dashboard
            </a>
        </div>


        {{-- HEADING --}}
        <div class="heading">

            <div>

                <div class="eyebrow">
                    Academic Management
                </div>

                <h1>
                    Courses
                </h1>

                <p class="description">
                    View available courses and monitor student enrollment.
                </p>

            </div>

        </div>


        {{-- SUMMARY --}}
        @php
            $totalCourses = $courses->count();
            $totalStudents = $courses->sum(function ($course) {
                return $course->students->count();
            });
            $averageStudents = $totalCourses > 0
                ? round($totalStudents / $totalCourses, 1)
                : 0;
        @endphp

        <div class="summary">

            <div class="summary-card">

                <div>
                    <div class="summary-label">
                        TOTAL COURSES
                    </div>

                    <div class="summary-number">
                        {{ $totalCourses }}
                    </div>
                </div>

                <div class="summary-icon icon-purple">
                    📚
                </div>

            </div>


            <div class="summary-card">

                <div>
                    <div class="summary-label">
                        ENROLLED STUDENTS
                    </div>

                    <div class="summary-number">
                        {{ $totalStudents }}
                    </div>
                </div>

                <div class="summary-icon icon-green">
                    👥
                </div>

            </div>


            <div class="summary-card">

                <div>
                    <div class="summary-label">
                        AVG. ENROLLMENT
                    </div>

                    <div class="summary-number">
                        {{ $averageStudents }}
                    </div>
                </div>

                <div class="summary-icon icon-blue">
                    📊
                </div>

            </div>

        </div>


        {{-- COURSE SECTION --}}
        <div class="section-header">

            <div class="section-title">
                Available Courses
            </div>

            <div class="section-count">
                {{ $totalCourses }} Courses
            </div>

        </div>


        @if($courses->count())

            <div class="course-grid">

                @foreach($courses as $index => $course)

                    <article class="course-card">

                        <div class="course-top">

                            <div class="course-number">
                                Course {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </div>

                            <div class="course-symbol">
                                📖
                            </div>

                        </div>


                        <div class="course-body">

                            <div class="course-name">
                                {{ $course->name }}
                            </div>

                            <div class="course-description">
                                Academic course available in the student management system.
                            </div>


                            <div class="course-footer">

                                <div class="students-count">

                                    <div class="students-icon">
                                        👥
                                    </div>

                                    {{ $course->students->count() }}
                                    {{ $course->students->count() === 1 ? 'Student' : 'Students' }}

                                </div>

                            </div>

                        </div>

                    </article>

                @endforeach

            </div>

        @else

            <div class="empty">

                <div class="empty-icon">
                    📚
                </div>

                <div class="empty-title">
                    No courses available
                </div>

                <div class="empty-text">
                    There are currently no courses registered in the system.
                </div>

            </div>

        @endif

    </main>

</div>

</body>

</html>