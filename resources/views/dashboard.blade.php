<x-app-layout>

    <style>
        .dashboard-page {
            background: #eef1f7;
            min-height: calc(100vh - 70px);
            padding: 38px 25px 70px;
        }

        .dashboard-container {
            max-width: 1200px;
            margin: auto;
        }

        /* =========================
           HERO
        ========================= */

        .dashboard-hero {
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

        .dashboard-hero::after {
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
            color: white;
        }

        .hero-user-role {
            color: #a5b4fc;
            font-size: 11px;
            margin-top: 3px;
        }

        /* =========================
           STATISTICS
        ========================= */

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-bottom: 28px;
        }

        .stat-card {
            background: white;
            border: 1px solid #e1e5ec;
            border-radius: 17px;
            padding: 21px;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: .2s ease;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(15,23,42,.07);
        }

        .stat-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            flex-shrink: 0;
        }

        .student-icon {
            background: #ede9fe;
        }

        .course-icon {
            background: #cffafe;
        }

        .user-icon {
            background: #dcfce7;
        }

        .admin-icon {
            background: #fef3c7;
        }

        .stat-label {
            color: #7b8495;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .4px;
        }

        .stat-value {
            color: #182033;
            font-size: 28px;
            font-weight: 850;
            margin-top: 3px;
        }

        .stat-link {
            display: inline-block;
            margin-top: 5px;
            color: #6366f1;
            text-decoration: none;
            font-size: 11px;
            font-weight: 750;
        }

        .stat-link:hover {
            color: #4f46e5;
        }

        .stat-description {
            display: inline-block;
            margin-top: 5px;
            color: #8a93a5;
            font-size: 11px;
        }

        /* =========================
           WELCOME CARD
        ========================= */

        .welcome-card {
            background: white;
            border: 1px solid #e1e5ec;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 28px;
        }

        .welcome-label {
            color: #6366f1;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-size: 10px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .welcome-title {
            margin: 0;
            font-size: 24px;
            font-weight: 850;
            color: #182033;
        }

        .welcome-text {
            color: #7b8495;
            font-size: 13px;
            line-height: 1.6;
            margin: 8px 0 22px;
        }

        .action-buttons {
            display: flex;
            gap: 11px;
            flex-wrap: wrap;
        }

        .primary-button,
        .secondary-button,
        .admin-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 11px 18px;
            border-radius: 9px;
            text-decoration: none;
            font-size: 11px;
            font-weight: 800;
            transition: .2s ease;
        }

        .primary-button {
            background: #6366f1;
            color: white;
        }

        .primary-button:hover {
            background: #4f46e5;
            transform: translateY(-1px);
        }

        .secondary-button {
            background: #111827;
            color: white;
        }

        .secondary-button:hover {
            background: #1f2937;
            transform: translateY(-1px);
        }

        .admin-button {
            background: #059669;
            color: white;
        }

        .admin-button:hover {
            background: #047857;
            transform: translateY(-1px);
        }

        /* =========================
           QUICK ACCESS
        ========================= */

        .section-title {
            margin: 0 0 15px;
            font-size: 18px;
            font-weight: 850;
            color: #182033;
        }

        .quick-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .quick-card {
            background: white;
            border: 1px solid #e1e5ec;
            border-radius: 16px;
            padding: 20px;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: .2s ease;
        }

        .quick-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(15,23,42,.07);
        }

        .quick-left {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .quick-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 19px;
            flex-shrink: 0;
        }

        .quick-student-icon {
            background: #ede9fe;
        }

        .quick-course-icon {
            background: #cffafe;
        }

        .quick-user-icon {
            background: #dcfce7;
        }

        .quick-title {
            color: #182033;
            font-size: 13px;
            font-weight: 800;
        }

        .quick-description {
            color: #8a93a5;
            font-size: 10px;
            margin-top: 3px;
        }

        .quick-arrow {
            color: #6366f1;
            font-size: 17px;
            font-weight: 800;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 950px) {

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .dashboard-hero {
                align-items: flex-start;
            }

            .quick-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 650px) {

            .dashboard-page {
                padding: 25px 15px 50px;
            }

            .dashboard-hero {
                padding: 28px;
                flex-direction: column;
            }

            .hero-title {
                font-size: 28px;
            }

            .hero-user {
                width: 100%;
            }

            .welcome-card {
                padding: 24px;
            }

            .welcome-title {
                font-size: 21px;
            }

            .primary-button,
            .secondary-button,
            .admin-button {
                width: 100%;
            }
        }
    </style>


    <!-- =========================
         DASHBOARD PAGE
    ========================= -->

    <div class="dashboard-page">

        <div class="dashboard-container">


            <!-- =========================
                 HERO
            ========================= -->

            <section class="dashboard-hero">

                <div class="hero-content">

                    <div class="hero-label">
                        Administration Portal
                    </div>

                    <h1 class="hero-title">
                        Admin Dashboard
                    </h1>

                    <p class="hero-description">
                        Monitor students, courses, and registered accounts
                        from one central administration portal.
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
                        Administrator
                    </div>

                </div>

            </section>


            <!-- =========================
                 STATISTICS
            ========================= -->

            <div class="stats-grid">


                <!-- STUDENTS -->

                <div class="stat-card">

                    <div class="stat-icon student-icon">
                        👥
                    </div>

                    <div>

                        <div class="stat-label">
                            Total Students
                        </div>

                        <div class="stat-value">
                            {{ \App\Models\Student::count() }}
                        </div>

                        <a
                            href="{{ route('students.index') }}"
                            class="stat-link"
                        >
                            View Students →
                        </a>

                    </div>

                </div>


                <!-- COURSES -->

                <div class="stat-card">

                    <div class="stat-icon course-icon">
                        🎓
                    </div>

                    <div>

                        <div class="stat-label">
                            Total Courses
                        </div>

                        <div class="stat-value">
                            {{ \App\Models\Course::count() }}
                        </div>

                        <a
                            href="{{ route('courses.index') }}"
                            class="stat-link"
                        >
                            View Courses →
                        </a>

                    </div>

                </div>


                <!-- USERS -->

                <div class="stat-card">

                    <div class="stat-icon user-icon">
                        👤
                    </div>

                    <div>

                        <div class="stat-label">
                            Total Users
                        </div>

                        <div class="stat-value">
                            {{ \App\Models\User::count() }}
                        </div>

                        <a
                            href="{{ route('users.index') }}"
                            class="stat-link"
                        >
                            Manage Users →
                        </a>

                    </div>

                </div>

            </div>


            <!-- =========================
                 WELCOME
            ========================= -->

            <section class="welcome-card">

                <div class="welcome-label">
                    Administration
                </div>

                <h2 class="welcome-title">
                    Welcome, {{ auth()->user()->name }}!
                </h2>

                <p class="welcome-text">
                    You are logged in as an administrator. Use the
                    management tools below to maintain student records,
                    manage academic courses, and control registered users.
                </p>


                <div class="action-buttons">

                    <a
                        href="{{ route('students.index') }}"
                        class="primary-button"
                    >
                        Manage Students
                    </a>

                    <a
                        href="{{ route('courses.index') }}"
                        class="secondary-button"
                    >
                        Manage Courses
                    </a>

                    <a
                        href="{{ route('users.index') }}"
                        class="admin-button"
                    >
                        Manage Users
                    </a>

                </div>

            </section>


            <!-- =========================
                 QUICK ACCESS
            ========================= -->

            <h2 class="section-title">
                Quick Access
            </h2>


            <div class="quick-grid">


                <!-- STUDENT MANAGEMENT -->

                <a
                    href="{{ route('students.index') }}"
                    class="quick-card"
                >

                    <div class="quick-left">

                        <div class="quick-icon quick-student-icon">
                            👨‍🎓
                        </div>

                        <div>

                            <div class="quick-title">
                                Student Directory
                            </div>

                            <div class="quick-description">
                                View, search, edit and manage student records
                            </div>

                        </div>

                    </div>

                    <div class="quick-arrow">
                        →
                    </div>

                </a>


                <!-- COURSE MANAGEMENT -->

                <a
                    href="{{ route('courses.index') }}"
                    class="quick-card"
                >

                    <div class="quick-left">

                        <div class="quick-icon quick-course-icon">
                            🎓
                        </div>

                        <div>

                            <div class="quick-title">
                                Course Management
                            </div>

                            <div class="quick-description">
                                Create, edit and manage academic courses
                            </div>

                        </div>

                    </div>

                    <div class="quick-arrow">
                        →
                    </div>

                </a>


                <!-- USER MANAGEMENT -->

                <a
                    href="{{ route('users.index') }}"
                    class="quick-card"
                >

                    <div class="quick-left">

                        <div class="quick-icon quick-user-icon">
                            👤
                        </div>

                        <div>

                            <div class="quick-title">
                                User Management
                            </div>

                            <div class="quick-description">
                                Manage registered accounts and user roles
                            </div>

                        </div>

                    </div>

                    <div class="quick-arrow">
                        →
                    </div>

                </a>


            </div>

        </div>

    </div>

</x-app-layout>