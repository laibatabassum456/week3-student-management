<x-app-layout>
    <style>
        .dashboard-shell {
            min-height: calc(100vh - 65px);
            background: #f5f7fb;
            color: #172033;
        }


    .dashboard-container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 32px 24px 50px;
    }

    .dashboard-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 28px;
    }

    .eyebrow {
        color: #64748b;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 7px;
    }

    .dashboard-title {
        margin: 0;
        font-size: 30px;
        font-weight: 800;
        letter-spacing: -0.6px;
        color: #172033;
    }

    .dashboard-subtitle {
        margin: 7px 0 0;
        color: #7b8495;
        font-size: 14px;
    }

    .admin-pill {
        display: flex;
        align-items: center;
        gap: 10px;
        background: #ffffff;
        border: 1px solid #e5e9f0;
        border-radius: 12px;
        padding: 9px 13px;
        box-shadow: 0 3px 12px rgba(20, 32, 56, 0.04);
    }

    .admin-avatar {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #172033;
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: 800;
    }

    .admin-label {
        color: #8a93a3;
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: .5px;
    }

    .admin-name {
        color: #263247;
        font-size: 13px;
        font-weight: 700;
        margin-top: 2px;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
        margin-bottom: 22px;
    }

    .stat-card {
        background: #ffffff;
        border: 1px solid #e5e9f0;
        border-radius: 15px;
        padding: 22px;
        box-shadow: 0 4px 16px rgba(20, 32, 56, 0.045);
        transition: transform .2s ease, box-shadow .2s ease;
    }

    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 22px rgba(20, 32, 56, 0.08);
    }

    .stat-top {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .stat-label {
        color: #7b8495;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .5px;
    }

    .stat-number {
        color: #172033;
        font-size: 32px;
        line-height: 1;
        font-weight: 800;
        margin-top: 10px;
    }

    .stat-icon {
        width: 43px;
        height: 43px;
        border-radius: 11px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .icon-dark {
        background: #edf0f4;
        color: #172033;
    }

    .icon-blue {
        background: #edf3ff;
        color: #3156a3;
    }

    .icon-green {
        background: #ecfdf3;
        color: #16805b;
    }

    .stat-link {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        margin-top: 17px;
        color: #526173;
        text-decoration: none;
        font-size: 12px;
        font-weight: 700;
    }

    .stat-link:hover {
        color: #172033;
    }

    .main-grid {
        display: grid;
        grid-template-columns: 1.55fr .9fr;
        gap: 22px;
        align-items: stretch;
    }

    .welcome-card {
        position: relative;
        overflow: hidden;
        background: #172033;
        color: white;
        border-radius: 17px;
        padding: 30px;
        min-height: 270px;
        box-shadow: 0 8px 25px rgba(23, 32, 51, 0.12);
    }

    .welcome-card::after {
        content: "";
        position: absolute;
        width: 220px;
        height: 220px;
        border: 1px solid rgba(255,255,255,.08);
        border-radius: 50%;
        right: -80px;
        top: -70px;
    }

    .welcome-card::before {
        content: "";
        position: absolute;
        width: 150px;
        height: 150px;
        border: 1px solid rgba(255,255,255,.06);
        border-radius: 50%;
        right: 30px;
        bottom: -90px;
    }

    .welcome-content {
        position: relative;
        z-index: 2;
    }

    .welcome-tag {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        background: rgba(255,255,255,.09);
        border: 1px solid rgba(255,255,255,.1);
        border-radius: 999px;
        padding: 6px 10px;
        font-size: 11px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .welcome-card h2 {
        margin: 0;
        font-size: 27px;
        font-weight: 800;
        letter-spacing: -.4px;
    }

    .welcome-card p {
        max-width: 560px;
        margin: 10px 0 0;
        color: #b9c1cf;
        font-size: 13px;
        line-height: 1.7;
    }

    .welcome-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 25px;
    }

    .primary-action,
    .secondary-action {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 10px 15px;
        border-radius: 9px;
        text-decoration: none;
        font-size: 12px;
        font-weight: 700;
        transition: .2s;
    }

    .primary-action {
        background: white;
        color: #172033;
    }

    .primary-action:hover {
        background: #edf0f4;
    }

    .secondary-action {
        background: rgba(255,255,255,.08);
        border: 1px solid rgba(255,255,255,.12);
        color: white;
    }

    .secondary-action:hover {
        background: rgba(255,255,255,.14);
    }

    .quick-card {
        background: #ffffff;
        border: 1px solid #e5e9f0;
        border-radius: 17px;
        padding: 25px;
        box-shadow: 0 4px 16px rgba(20, 32, 56, 0.045);
    }

    .quick-card h3 {
        margin: 0;
        color: #172033;
        font-size: 17px;
        font-weight: 800;
    }

    .quick-card-description {
        margin: 7px 0 20px;
        color: #7b8495;
        font-size: 12px;
        line-height: 1.6;
    }

    .quick-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 0;
        border-top: 1px solid #edf0f4;
        text-decoration: none;
    }

    .quick-item:first-of-type {
        border-top: 0;
    }

    .quick-icon {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: #f1f4f8;
        color: #3156a3;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .quick-text {
        flex: 1;
    }

    .quick-title {
        color: #263247;
        font-size: 12px;
        font-weight: 700;
    }

    .quick-subtitle {
        color: #8a93a3;
        font-size: 11px;
        margin-top: 3px;
    }

    .quick-arrow {
        color: #9aa3b1;
        font-size: 16px;
    }

    .system-card {
        margin-top: 22px;
        background: #ffffff;
        border: 1px solid #e5e9f0;
        border-radius: 15px;
        padding: 20px 22px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        box-shadow: 0 4px 16px rgba(20, 32, 56, 0.04);
    }

    .system-title {
        color: #263247;
        font-size: 13px;
        font-weight: 700;
    }

    .system-text {
        color: #8a93a3;
        font-size: 11px;
        margin-top: 4px;
    }

    .status {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 7px 11px;
        border-radius: 999px;
        background: #ecfdf3;
        color: #166534;
        font-size: 11px;
        font-weight: 700;
    }

    .status-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #22c55e;
    }

    @media (max-width: 900px) {
        .stats-grid {
            grid-template-columns: 1fr;
        }

        .main-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 600px) {
        .dashboard-container {
            padding: 25px 15px 40px;
        }

        .dashboard-top {
            align-items: flex-start;
            flex-direction: column;
        }

        .dashboard-title {
            font-size: 25px;
        }

        .admin-pill {
            width: 100%;
        }

        .welcome-card {
            padding: 24px;
        }

        .welcome-card h2 {
            font-size: 23px;
        }

        .welcome-actions {
            flex-direction: column;
        }

        .primary-action,
        .secondary-action {
            width: 100%;
        }

        .system-card {
            align-items: flex-start;
            flex-direction: column;
        }
    }
</style>

<div class="dashboard-shell">

    <div class="dashboard-container">

        {{-- Dashboard Header --}}
        <div class="dashboard-top">

            <div>
                <div class="eyebrow">
                    Administration
                </div>

                <h1 class="dashboard-title">
                    Dashboard
                </h1>

                <p class="dashboard-subtitle">
                    Overview of your student management system.
                </p>
            </div>

            <div class="admin-pill">

                <div class="admin-avatar">
                    {{ strtoupper(substr(auth()->user()->name ?? 'AD', 0, 2)) }}
                </div>

                <div>
                    <div class="admin-label">
                        Signed in as
                    </div>

                    <div class="admin-name">
                        {{ auth()->user()->name ?? 'Administrator' }}
                    </div>
                </div>

            </div>

        </div>


        {{-- Statistics --}}
        <div class="stats-grid">

            {{-- Students --}}
            <div class="stat-card">

                <div class="stat-top">

                    <div>
                        <div class="stat-label">
                            Total Students
                        </div>

                        <div class="stat-number">
                            {{ \App\Models\Student::count() }}
                        </div>
                    </div>

                    <div class="stat-icon icon-dark">
                        <svg width="21" height="21" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1.8"
                                  d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/>
                            <circle cx="9" cy="7" r="4" stroke-width="1.8"/>
                            <path stroke-linecap="round"
                                  stroke-width="1.8"
                                  d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
                        </svg>
                    </div>

                </div>

                <a href="{{ route('students.index') }}" class="stat-link">
                    View student directory
                    <span>→</span>
                </a>

            </div>


            {{-- Courses --}}
            <div class="stat-card">

                <div class="stat-top">

                    <div>
                        <div class="stat-label">
                            Total Courses
                        </div>

                        <div class="stat-number">
                            {{ \App\Models\Course::count() }}
                        </div>
                    </div>

                    <div class="stat-icon icon-blue">
                        <svg width="21" height="21" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1.8"
                                  d="M12 3L2 8l10 5 10-5-10-5z"/>
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1.8"
                                  d="M6 10.5V16c3.5 3 8.5 3 12 0v-5.5"/>
                        </svg>
                    </div>

                </div>

                <a href="{{ route('courses.index') }}" class="stat-link">
                    View course directory
                    <span>→</span>
                </a>

            </div>


            {{-- Users --}}
            <div class="stat-card">

                <div class="stat-top">

                    <div>
                        <div class="stat-label">
                            Registered Users
                        </div>

                        <div class="stat-number">
                            {{ \App\Models\User::count() }}
                        </div>
                    </div>

                    <div class="stat-icon icon-green">
                        <svg width="21" height="21" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="4" stroke-width="1.8"/>
                            <path stroke-linecap="round"
                                  stroke-width="1.8"
                                  d="M4 21a8 8 0 0116 0"/>
                        </svg>
                    </div>

                </div>

                <span class="stat-link">
                    Active administration accounts
                </span>

            </div>

        </div>


        {{-- Main Content --}}
        <div class="main-grid">

            {{-- Welcome --}}
            <section class="welcome-card">

                <div class="welcome-content">

                    <div class="welcome-tag">
                        <span>●</span>
                        Administrator Access
                    </div>

                    <h2>
                        Welcome back, {{ auth()->user()->name ?? 'Administrator' }}.
                    </h2>

                    <p>
                        Manage your student records, profiles and courses
                        from one centralized administration portal.
                    </p>

                    <div class="welcome-actions">

                        <a href="{{ route('students.index') }}"
                           class="primary-action">
                            Manage Students
                            <span style="margin-left:8px;">→</span>
                        </a>

                        <a href="{{ route('students.create') }}"
                           class="secondary-action">
                            + Add Student
                        </a>

                    </div>

                </div>

            </section>


            {{-- Quick Actions --}}
            <section class="quick-card">

                <h3>
                    Quick Actions
                </h3>

                <p class="quick-card-description">
                    Frequently used administration tools.
                </p>


                <a href="{{ route('students.index') }}" class="quick-item">

                    <div class="quick-icon">
                        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1.8"
                                  d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/>
                            <circle cx="9" cy="7" r="4" stroke-width="1.8"/>
                        </svg>
                    </div>

                    <div class="quick-text">
                        <div class="quick-title">
                            Student Directory
                        </div>

                        <div class="quick-subtitle">
                            Search and manage students
                        </div>
                    </div>

                    <div class="quick-arrow">
                        →
                    </div>

                </a>


                <a href="{{ route('students.create') }}" class="quick-item">

                    <div class="quick-icon">
                        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1.8"
                                  d="M12 5v14M5 12h14"/>
                        </svg>
                    </div>

                    <div class="quick-text">
                        <div class="quick-title">
                            Add Student
                        </div>

                        <div class="quick-subtitle">
                            Create a new student record
                        </div>
                    </div>

                    <div class="quick-arrow">
                        →
                    </div>

                </a>


                <a href="{{ route('courses.index') }}" class="quick-item">

                    <div class="quick-icon">
                        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1.8"
                                  d="M12 3L2 8l10 5 10-5-10-5z"/>
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1.8"
                                  d="M6 10.5V16c3.5 3 8.5 3 12 0v-5.5"/>
                        </svg>
                    </div>

                    <div class="quick-text">
                        <div class="quick-title">
                            Course Management
                        </div>

                        <div class="quick-subtitle">
                            View available courses
                        </div>
                    </div>

                    <div class="quick-arrow">
                        →
                    </div>

                </a>

            </section>

        </div>


        {{-- System Status --}}
        <div class="system-card">

            <div>
                <div class="system-title">
                    Student Management System
                </div>

                <div class="system-text">
                    Administration portal is ready for use.
                </div>
            </div>

            <div class="status">
                <span class="status-dot"></span>
                System Online
            </div>

        </div>

    </div>

</div>


</x-app-layout>
