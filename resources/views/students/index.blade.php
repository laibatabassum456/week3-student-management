
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Students | Student Management</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system,
                BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: #f5f7fb;
            color: #172033;
        }

        .page-wrapper {
            min-height: 100vh;
        }

        /* Header */
        .topbar {
            height: 72px;
            background: #ffffff;
            border-bottom: 1px solid #e7eaf0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 42px;
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: #172033;
        }

        .brand-logo {
            width: 40px;
            height: 40px;
            border-radius: 11px;
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
            font-weight: 800;
        }

        .brand-text {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }

        .brand-title {
            font-size: 16px;
            font-weight: 750;
        }

        .brand-subtitle {
            color: #8a93a5;
            font-size: 11px;
            margin-top: 2px;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .dashboard-link {
            text-decoration: none;
            color: #566074;
            font-size: 14px;
            font-weight: 600;
            padding: 9px 13px;
            border-radius: 8px;
            transition: 0.2s;
        }

        .dashboard-link:hover {
            background: #f3f4f8;
            color: #4f46e5;
        }

        .user-pill {
            display: flex;
            align-items: center;
            gap: 9px;
            padding-left: 15px;
            border-left: 1px solid #e7eaf0;
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
            font-weight: 650;
            color: #30384a;
        }

        /* Main */
        .main {
            max-width: 1240px;
            margin: 0 auto;
            padding: 42px 28px 60px;
        }

        .page-heading {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 30px;
        }

        .heading-label {
            color: #6366f1;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            margin-bottom: 7px;
        }

        .page-title {
            margin: 0;
            font-size: 31px;
            font-weight: 800;
            letter-spacing: -0.03em;
            color: #172033;
        }

        .page-description {
            margin: 7px 0 0;
            color: #7b8496;
            font-size: 14px;
        }

        .add-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #4f46e5;
            color: white;
            text-decoration: none;
            padding: 11px 17px;
            border-radius: 9px;
            font-size: 13px;
            font-weight: 700;
            box-shadow: 0 5px 14px rgba(79, 70, 229, 0.18);
            transition: 0.2s;
            white-space: nowrap;
        }

        .add-button:hover {
            background: #4338ca;
            transform: translateY(-1px);
        }

        .add-icon {
            font-size: 18px;
            line-height: 1;
        }

        /* Alert */
        .alert {
            background: #ecfdf3;
            border: 1px solid #bbf7d0;
            color: #166534;
            padding: 13px 16px;
            border-radius: 9px;
            margin-bottom: 24px;
            font-size: 13px;
            font-weight: 600;
        }

        /* Filter */
        .filter-card {
            background: white;
            border: 1px solid #e7eaf0;
            border-radius: 13px;
            padding: 18px;
            margin-bottom: 24px;
            box-shadow: 0 3px 12px rgba(16, 24, 40, 0.03);
        }

        .filter-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 14px;
        }

        .filter-title {
            font-size: 13px;
            font-weight: 750;
            color: #343b4c;
        }

        .filter-count {
            color: #8b94a5;
            font-size: 12px;
        }

        .filter-form {
            display: grid;
            grid-template-columns: minmax(200px, 1fr) 210px auto auto;
            gap: 10px;
        }

        .input-wrapper {
            position: relative;
        }

        .search-icon {
            position: absolute;
            left: 13px;
            top: 50%;
            transform: translateY(-50%);
            color: #9aa2b1;
            font-size: 14px;
        }

        .filter-input,
        .filter-select {
            width: 100%;
            height: 42px;
            border: 1px solid #dfe3ea;
            background: #fbfcfe;
            border-radius: 8px;
            padding: 0 13px;
            color: #30384a;
            font-size: 13px;
            outline: none;
            transition: 0.2s;
        }

        .filter-input {
            padding-left: 37px;
        }

        .filter-input:focus,
        .filter-select:focus {
            border-color: #818cf8;
            background: white;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.09);
        }

        .filter-button,
        .reset-button {
            height: 42px;
            padding: 0 17px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .filter-button {
            border: none;
            background: #172033;
            color: white;
        }

        .filter-button:hover {
            background: #0f172a;
        }

        .reset-button {
            border: 1px solid #dfe3ea;
            color: #596274;
            background: white;
        }

        .reset-button:hover {
            background: #f8f9fb;
        }

        /* Students card */
        .students-card {
            background: white;
            border: 1px solid #e7eaf0;
            border-radius: 13px;
            overflow: hidden;
            box-shadow: 0 3px 12px rgba(16, 24, 40, 0.03);
        }

        .students-card-header {
            min-height: 58px;
            padding: 0 22px;
            border-bottom: 1px solid #edf0f4;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .students-card-title {
            font-size: 14px;
            font-weight: 750;
            color: #252c3b;
        }

        .result-badge {
            background: #f3f4f8;
            color: #6b7280;
            padding: 5px 9px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 700;
        }

        .student-list {
            width: 100%;
        }

        .student-row {
            display: grid;
            grid-template-columns: minmax(250px, 1.8fr) minmax(170px, 1fr) minmax(130px, .8fr) 110px;
            align-items: center;
            gap: 20px;
            padding: 17px 22px;
            border-bottom: 1px solid #f0f2f5;
            transition: background 0.18s;
        }

        .student-row:last-child {
            border-bottom: none;
        }

        .student-row:hover {
            background: #fafbfe;
        }

        .table-heading {
            background: #fafbfc;
            color: #8a93a5;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 0.07em;
            text-transform: uppercase;
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .table-heading:hover {
            background: #fafbfc;
        }

        .student-info {
            display: flex;
            align-items: center;
            gap: 13px;
            min-width: 0;
        }

        .student-image {
            width: 44px;
            height: 44px;
            flex: 0 0 44px;
            border-radius: 10px;
            object-fit: cover;
            border: 1px solid #e5e7eb;
            background: #f1f5f9;
        }

        .student-placeholder {
            width: 44px;
            height: 44px;
            flex: 0 0 44px;
            border-radius: 10px;
            background: linear-gradient(135deg, #eef2ff, #f3e8ff);
            color: #6366f1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 800;
        }

        .student-details {
            min-width: 0;
        }

        .student-name {
            display: block;
            color: #202737;
            font-size: 13px;
            font-weight: 750;
            text-decoration: none;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .student-name:hover {
            color: #4f46e5;
        }

        .student-email {
            margin-top: 3px;
            color: #8a93a5;
            font-size: 11px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .phone {
            color: #596274;
            font-size: 12px;
        }

        .course-badge {
            display: inline-flex;
            align-items: center;
            padding: 5px 9px;
            border-radius: 6px;
            background: #f0fdf4;
            color: #15803d;
            font-size: 11px;
            font-weight: 700;
        }

        .course-empty {
            color: #9aa2b1;
            font-size: 11px;
        }

        .view-button {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            padding: 8px 12px;
            border: 1px solid #dfe3ea;
            border-radius: 7px;
            text-decoration: none;
            color: #4f46e5;
            background: white;
            font-size: 11px;
            font-weight: 750;
            transition: 0.2s;
        }

        .view-button:hover {
            background: #eef2ff;
            border-color: #c7d2fe;
        }

        /* Empty state */
        .empty-state {
            text-align: center;
            padding: 70px 25px;
        }

        .empty-icon {
            width: 58px;
            height: 58px;
            margin: 0 auto 15px;
            border-radius: 15px;
            background: #f1f5f9;
            color: #64748b;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
        }

        .empty-title {
            font-size: 15px;
            font-weight: 750;
            color: #30384a;
        }

        .empty-description {
            color: #8a93a5;
            font-size: 12px;
            margin-top: 5px;
        }

        /* Pagination */
        .pagination-wrapper {
            padding: 17px 22px;
            border-top: 1px solid #edf0f4;
        }

        .pagination-wrapper nav {
            display: flex;
            justify-content: center;
        }

        .pagination-wrapper svg {
            width: 16px;
            height: 16px;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .topbar {
                padding: 0 20px;
            }

            .main {
                padding: 30px 18px 50px;
            }

            .filter-form {
                grid-template-columns: 1fr 1fr;
            }

            .student-row {
                grid-template-columns: 1fr 1fr;
            }

            .table-heading {
                display: none;
            }
        }

        @media (max-width: 640px) {
            .topbar {
                height: 64px;
            }

            .brand-subtitle,
            .dashboard-link,
            .user-name {
                display: none;
            }

            .page-heading {
                align-items: flex-start;
                flex-direction: column;
            }

            .page-title {
                font-size: 26px;
            }

            .add-button {
                width: 100%;
                justify-content: center;
            }

            .filter-form {
                grid-template-columns: 1fr;
            }

            .student-row {
                display: flex;
                flex-wrap: wrap;
                gap: 12px;
                padding: 17px;
            }

            .student-info {
                width: 100%;
            }

            .phone {
                flex: 1;
            }

            .course-badge,
            .course-empty {
                flex: 1;
            }

            .view-button {
                width: 100%;
            }

            .students-card-header {
                padding: 0 17px;
            }
        }
    </style>
</head>

<body>

<div class="page-wrapper">

    <!-- Top Navigation -->
    <header class="topbar">

        <a href="{{ route('students.index') }}" class="brand">

            <div class="brand-logo">
                SM
            </div>

            <div class="brand-text">
                <span class="brand-title">
                    Student Management
                </span>

                <span class="brand-subtitle">
                    Administration Portal
                </span>
            </div>

        </a>

        <div class="topbar-right">

            @auth
                <a href="{{ route('dashboard') }}" class="dashboard-link">
                    Dashboard
                </a>

                <div class="user-pill">

                    <div class="user-avatar">
                        {{ strtoupper(substr(auth()->user()->name ?? 'GU', 0, 2)) }}
                    </div>

                    <span class="user-name">
                        {{ auth()->user()->name ?? 'Guest' }}
                    </span>

                </div>
            @else
                <div class="user-pill">

                    <div class="user-avatar">
                        GU
                    </div>

                    <span class="user-name">
                        Guest
                    </span>

                </div>
            @endauth

        </div>

    </header>


    <!-- Main Content -->
    <main class="main">

        <!-- Page Heading -->
        <div class="page-heading">

            <div>

                <div class="heading-label">
                    Administration
                </div>

                <h1 class="page-title">
                    Students
                </h1>

                <p class="page-description">
                    Manage student records, courses, profiles and contact information.
                </p>

            </div>

            @auth
                <a href="{{ route('students.create') }}" class="add-button">
                    <span class="add-icon">+</span>
                    Add Student
                </a>
            @endauth

        </div>


        <!-- Success Message -->
        @if (session('success'))

            <div class="alert">
                {{ session('success') }}
            </div>

        @endif


        <!-- Search & Filters -->
        <section class="filter-card">

            <div class="filter-header">

                <span class="filter-title">
                    Search & Filters
                </span>

                <span class="filter-count">
                    {{ $students->total() }} student{{ $students->total() === 1 ? '' : 's' }}
                </span>

            </div>

            <form method="GET" action="{{ route('students.index') }}" class="filter-form">

                <div class="input-wrapper">

                    <span class="search-icon">
                        🔍
                    </span>

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Search by name or email..."
                        class="filter-input"
                    >

                </div>

                <select name="course_id" class="filter-select">

                    <option value="">
                        All Courses
                    </option>

                    @foreach ($courses as $course)

                        <option
                            value="{{ $course->id }}"
                            {{ request('course_id') == $course->id ? 'selected' : '' }}
                        >
                            {{ $course->name }}
                        </option>

                    @endforeach

                </select>

                <button type="submit" class="filter-button">
                    Search
                </button>

                @if (request()->filled('search') || request()->filled('course_id'))

                    <a href="{{ route('students.index') }}" class="reset-button">
                        Reset
                    </a>

                @else

                    <span class="reset-button" style="visibility: hidden;">
                        Reset
                    </span>

                @endif

            </form>

        </section>


        <!-- Students Table/Card -->
        <section class="students-card">

            <div class="students-card-header">

                <span class="students-card-title">
                    Student Directory
                </span>

                <span class="result-badge">
                    {{ $students->count() }} shown
                </span>

            </div>


            @if ($students->count())

                <div class="student-list">

                    <!-- Table Heading -->
                    <div class="student-row table-heading">

                        <div>
                            Student
                        </div>

                        <div>
                            Phone
                        </div>

                        <div>
                            Course
                        </div>

                        <div>
                            Action
                        </div>

                    </div>


                    @foreach ($students as $student)

                        <div class="student-row">

                            <!-- Student -->
                            <div class="student-info">

                                @if ($student->image)

                                    <img
                                        src="{{ asset('storage/' . $student->image) }}"
                                        alt="{{ $student->name }}"
                                        class="student-image"
                                    >

                                @else

                                    <div class="student-placeholder">
                                        {{ strtoupper(substr($student->name, 0, 2)) }}
                                    </div>

                                @endif


                                <div class="student-details">

                                    <a
                                        href="{{ route('students.show', $student) }}"
                                        class="student-name"
                                    >
                                        {{ $student->name }}
                                    </a>

                                    <div class="student-email">
                                        {{ $student->email }}
                                    </div>

                                </div>

                            </div>


                            <!-- Phone -->
                            <div class="phone">

                                {{ $student->phone ?: 'Not provided' }}

                            </div>


                            <!-- Course -->
                            <div>

                                @if ($student->course)

                                    <span class="course-badge">
                                        {{ $student->course->name }}
                                    </span>

                                @else

                                    <span class="course-empty">
                                        No course assigned
                                    </span>

                                @endif

                            </div>


                            <!-- Action -->
                            <div>

                                <a
                                    href="{{ route('students.show', $student) }}"
                                    class="view-button"
                                >
                                    View Profile
                                </a>

                            </div>

                        </div>

                    @endforeach

                </div>


                <!-- Pagination -->
                @if ($students->hasPages())

                    <div class="pagination-wrapper">

                        {{ $students->links() }}

                    </div>

                @endif

            @else

                <!-- Empty State -->
                <div class="empty-state">

                    <div class="empty-icon">
                        👤
                    </div>

                    <div class="empty-title">
                        No students found
                    </div>

                    <div class="empty-description">
                        Try changing your search or course filter.
                    </div>

                    @if (request()->filled('search') || request()->filled('course_id'))

                        <div style="margin-top: 18px;">

                            <a
                                href="{{ route('students.index') }}"
                                class="reset-button"
                            >
                                Clear Filters
                            </a>

                        </div>

                    @endif

                </div>

            @endif

        </section>

    </main>

</div>

</body>
</html>
```
