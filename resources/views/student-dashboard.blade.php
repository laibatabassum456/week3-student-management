<x-app-layout>

    <style>
        .student-page {
            background: #eef1f7;
            min-height: calc(100vh - 70px);
            padding: 38px 25px 70px;
        }

        .student-container {
            max-width: 1200px;
            margin: auto;
        }

        /* HERO */

        .student-hero {
            background: #111827;
            border-radius: 22px;
            padding: 38px 42px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 30px;
            margin-bottom: 28px;
            overflow: hidden;
            position: relative;
        }

        .student-hero::after {
            content: "";
            position: absolute;
            width: 320px;
            height: 320px;
            border-radius: 50%;
            background: #6366f1;
            opacity: .15;
            right: -110px;
            top: -150px;
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
            margin: 9px 0 0;
            color: #cbd5e1;
            font-size: 13px;
            max-width: 600px;
            line-height: 1.6;
        }

        .hero-user {
            position: relative;
            z-index: 2;
            min-width: 210px;
            padding: 20px;
            border-radius: 16px;
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.1);
        }

        .hero-user-label {
            color: #9ca3af;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
        }

        .hero-user-name {
            font-size: 20px;
            font-weight: 800;
            margin-top: 6px;
        }

        .hero-user-role {
            color: #a5b4fc;
            font-size: 11px;
            margin-top: 3px;
        }

        /* CARDS */

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
            margin-bottom: 28px;
        }

        .info-card {
            background: white;
            border: 1px solid #e1e5ec;
            border-radius: 18px;
            padding: 25px;
        }

        .card-icon {
            width: 50px;
            height: 50px;
            border-radius: 13px;
            background: #ede9fe;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 15px;
        }

        .card-title {
            margin: 0;
            font-size: 18px;
            font-weight: 850;
            color: #182033;
        }

        .card-text {
            color: #7b8495;
            font-size: 12px;
            line-height: 1.6;
            margin: 7px 0 18px;
        }

        .course-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 16px;
            border-radius: 9px;
            background: #6366f1;
            color: white;
            text-decoration: none;
            font-size: 11px;
            font-weight: 800;
            transition: .2s ease;
        }

        .course-button:hover {
            background: #4f46e5;
            transform: translateY(-1px);
        }

        /* INFORMATION */

        .information-card {
            background: white;
            border: 1px solid #e1e5ec;
            border-radius: 18px;
            padding: 28px;
        }

        .information-title {
            margin: 0 0 18px;
            font-size: 19px;
            font-weight: 850;
            color: #182033;
        }

        .information-row {
            display: flex;
            justify-content: space-between;
            padding: 14px 0;
            border-bottom: 1px solid #edf0f4;
        }

        .information-row:last-child {
            border-bottom: none;
        }

        .information-label {
            color: #7b8495;
            font-size: 12px;
            font-weight: 700;
        }

        .information-value {
            color: #182033;
            font-size: 12px;
            font-weight: 800;
        }

        /* RESPONSIVE */

        @media (max-width: 700px) {

            .student-page {
                padding: 25px 15px 50px;
            }

            .student-hero {
                padding: 28px;
                flex-direction: column;
                align-items: flex-start;
            }

            .hero-title {
                font-size: 28px;
            }

            .hero-user {
                width: 100%;
            }

            .cards-grid {
                grid-template-columns: 1fr;
            }

            .information-card {
                padding: 22px;
            }

            .information-row {
                gap: 20px;
            }
        }
    </style>


    <div class="student-page">

        <div class="student-container">

            <!-- HERO -->

            <section class="student-hero">

                <div class="hero-content">

                    <div class="hero-label">
                        Student Portal
                    </div>

                    <h1 class="hero-title">
                        Student Dashboard
                    </h1>

                    <p class="hero-description">
                        Welcome to your student portal. View available
                        courses and manage your account information.
                    </p>

                </div>

                <div class="hero-user">

                    <div class="hero-user-label">
                        Logged In As
                    </div>

                    <div class="hero-user-name">
                        {{ auth()->user()->name }}
                    </div>

                    <div class="hero-user-role">
                        Student
                    </div>

                </div>

            </section>


            <!-- ACTION CARDS -->

            <div class="cards-grid">

                <!-- COURSES -->

                <div class="info-card">

                    <div class="card-icon">
                        🎓
                    </div>

                    <h2 class="card-title">
                        Available Courses
                    </h2>

                    <p class="card-text">
                        Browse the courses available in the student
                        portal. Students can view course information
                        but cannot modify courses.
                    </p>

                    <a
                        href="{{ route('student.courses') }}"
                        class="course-button"
                    >
                        View Courses →
                    </a>

                </div>


                <!-- PROFILE -->

                <div class="info-card">

                    <div class="card-icon">
                        👤
                    </div>

                    <h2 class="card-title">
                        My Profile
                    </h2>

                    <p class="card-text">
                        View and update your account information and
                        profile settings.
                    </p>

                    <a
                        href="{{ route('profile.edit') }}"
                        class="course-button"
                    >
                        View Profile →
                    </a>

                </div>

            </div>


            <!-- ACCOUNT INFORMATION -->

            <section class="information-card">

                <h2 class="information-title">
                    Account Information
                </h2>

                <div class="information-row">

                    <span class="information-label">
                        Name
                    </span>

                    <span class="information-value">
                        {{ auth()->user()->name }}
                    </span>

                </div>

                <div class="information-row">

                    <span class="information-label">
                        Email
                    </span>

                    <span class="information-value">
                        {{ auth()->user()->email }}
                    </span>

                </div>

                <div class="information-row">

                    <span class="information-label">
                        Account Role
                    </span>

                    <span class="information-value">
                        Student
                    </span>

                </div>

            </section>

        </div>

    </div>

</x-app-layout>