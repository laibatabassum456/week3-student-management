<x-app-layout>

    <style>
        .student-courses-page {
            background: #eef1f7;
            min-height: calc(100vh - 70px);
            padding: 38px 25px 70px;
        }

        .student-courses-container {
            max-width: 1200px;
            margin: auto;
        }

        .page-header {
            background: #111827;
            border-radius: 22px;
            padding: 35px 40px;
            color: white;
            margin-bottom: 28px;
        }

        .page-label {
            color: #a5b4fc;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 10px;
            font-weight: 800;
            margin-bottom: 9px;
        }

        .page-title {
            margin: 0;
            font-size: 32px;
            font-weight: 850;
        }

        .page-description {
            margin-top: 8px;
            color: #cbd5e1;
            font-size: 13px;
            line-height: 1.6;
        }

        .back-link {
            display: inline-block;
            color: #a5b4fc;
            text-decoration: none;
            font-size: 11px;
            font-weight: 800;
            margin-bottom: 18px;
        }

        .back-link:hover {
            color: white;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
            margin-bottom: 30px;
        }

        .stat {
            background: white;
            border: 1px solid #e1e5ec;
            border-radius: 17px;
            padding: 22px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .purple {
            background: #ede9fe;
        }

        .blue {
            background: #dbeafe;
        }

        .stat-label {
            color: #7b8495;
            font-size: 10px;
            font-weight: 800;
            text-transform: uppercase;
        }

        .stat-value {
            color: #182033;
            font-size: 25px;
            font-weight: 850;
            margin-top: 3px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
        }

        .section-title {
            margin: 0;
            font-size: 19px;
            font-weight: 850;
            color: #182033;
        }

        .course-count {
            color: #8a93a5;
            font-size: 11px;
            font-weight: 700;
        }

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
            transition: .2s ease;
        }

        .course:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(15,23,42,.08);
        }

        .course-top {
            height: 110px;
            padding: 20px;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
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
            width: 50px;
            height: 50px;
            background: rgba(255,255,255,.18);
            border: 1px solid rgba(255,255,255,.25);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .course-body {
            padding: 22px;
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
            margin: 9px 0 20px;
            min-height: 40px;
        }

        .enrollment {
            background: #f8fafc;
            border: 1px solid #edf0f4;
            border-radius: 10px;
            padding: 12px;
            margin-bottom: 16px;
        }

        .enrollment-label {
            color: #8a93a5;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .enrollment-number {
            color: #182033;
            font-size: 13px;
            font-weight: 850;
            margin-top: 3px;
        }

        .view-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #eef2ff;
            color: #4f46e5;
            text-decoration: none;
            padding: 9px 15px;
            border-radius: 8px;
            font-size: 10px;
            font-weight: 800;
        }

        .view-button:hover {
            background: #e0e7ff;
        }

        .student-note {
            background: #eef2ff;
            border: 1px solid #c7d2fe;
            color: #4338ca;
            border-radius: 12px;
            padding: 13px 15px;
            margin-bottom: 25px;
            font-size: 11px;
            line-height: 1.5;
        }

        .empty {
            background: white;
            border: 1px solid #e1e5ec;
            border-radius: 18px;
            text-align: center;
            padding: 70px 20px;
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

        @media (max-width: 850px) {

            .courses {
                grid-template-columns: 1fr;
            }

            .stats {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 650px) {

            .student-courses-page {
                padding: 25px 15px 50px;
            }

            .page-header {
                padding: 28px;
            }

            .page-title {
                font-size: 27px;
            }
        }
    </style>


    <div class="student-courses-page">

        <div class="student-courses-container">

            <!-- HEADER -->

            <div class="page-header">

                <a
                    href="{{ route('student.dashboard') }}"
                    class="back-link"
                >
                    ← Back to Student Dashboard
                </a>

                <div class="page-label">
                    Student Portal
                </div>

                <h1 class="page-title">
                    Available Courses
                </h1>

                <p class="page-description">
                    Browse the academic courses available in the student
                    management system.
                </p>

            </div>


            <!-- INFORMATION -->

            <div class="student-note">

                🎓 <strong>Student Access:</strong>
                You can view course information and enrollment details.
                Course creation, editing, and deletion are restricted to administrators.

            </div>


            <!-- STATISTICS -->

            @php

                $totalCourses = $courses->count();

                $totalStudents = $courses->sum(function ($course) {
                    return $course->students->count();
                });

            @endphp


            <div class="stats">

                <div class="stat">

                    <div class="stat-icon purple">
                        📚
                    </div>

                    <div>

                        <div class="stat-label">
                            Available Courses
                        </div>

                        <div class="stat-value">
                            {{ $totalCourses }}
                        </div>

                    </div>

                </div>


                <div class="stat">

                    <div class="stat-icon blue">
                        👥
                    </div>

                    <div>

                        <div class="stat-label">
                            Total Enrollments
                        </div>

                        <div class="stat-value">
                            {{ $totalStudents }}
                        </div>

                    </div>

                </div>

            </div>


            <!-- COURSE HEADER -->

            <div class="section-header">

                <h2 class="section-title">
                    Courses
                </h2>

                <span class="course-count">
                    {{ $totalCourses }}
                    {{ $totalCourses == 1 ? 'Course' : 'Courses' }}
                </span>

            </div>


            @if ($courses->count())

                <div class="courses">

                    @foreach ($courses as $course)

                        @php
                            $enrollment = $course->students->count();
                        @endphp


                        <article class="course">

                            <div class="course-top">

                                <div class="course-number">

                                    COURSE
                                    {{ str_pad($course->id, 2, '0', STR_PAD_LEFT) }}

                                </div>

                                <div class="course-symbol">
                                    🎓
                                </div>

                            </div>


                            <div class="course-body">

                                <h3 class="course-title">
                                    {{ $course->name }}
                                </h3>


                                <p class="course-description">

                                    {{ $course->description
                                        ?? 'Academic course available in the student management system.' }}

                                </p>


                                <div class="enrollment">

                                    <div class="enrollment-label">
                                        Student Enrollment
                                    </div>

                                    <div class="enrollment-number">

                                        {{ $enrollment }}

                                        {{ $enrollment == 1 ? 'Student' : 'Students' }}

                                    </div>

                                </div>


                                <!-- ONLY VIEW BUTTON -->

                                <a
                                    href="{{ route('courses.show', $course) }}"
                                    class="view-button"
                                >
                                    View Course →
                                </a>

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
                        There are currently no courses available.
                    </p>

                </div>

            @endif

        </div>

    </div>

</x-app-layout>