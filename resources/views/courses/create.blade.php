<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add New Course</title>

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
            max-width: 900px;
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
            font-weight: 750;
            margin-bottom: 22px;
        }

        .back-link:hover {
            color: #4f46e5;
        }

        /* =========================
           HEADER
        ========================= */

        .page-header {
            margin-bottom: 25px;
        }

        .page-label {
            color: #6366f1;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 10px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .page-title {
            margin: 0;
            font-size: 32px;
            font-weight: 850;
            letter-spacing: -1px;
        }

        .page-description {
            color: #7b8495;
            font-size: 13px;
            margin-top: 8px;
        }

        /* =========================
           FORM CARD
        ========================= */

        .form-card {
            background: white;
            border: 1px solid #e1e5ec;
            border-radius: 20px;
            padding: 30px;
        }

        .form-heading {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid #edf0f4;
        }

        .form-icon {
            width: 48px;
            height: 48px;
            border-radius: 13px;
            background: #ede9fe;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .form-heading h2 {
            margin: 0;
            font-size: 18px;
            font-weight: 850;
        }

        .form-heading p {
            margin: 4px 0 0;
            color: #8a93a5;
            font-size: 11px;
        }

        /* =========================
           FORM
        ========================= */

        .form-group {
            margin-bottom: 22px;
        }

        .form-label {
            display: block;
            color: #374151;
            font-size: 11px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .required {
            color: #dc2626;
        }

        .form-input,
        .form-textarea {
            width: 100%;
            border: 1px solid #d9dee8;
            border-radius: 9px;
            padding: 12px 13px;
            font-family: inherit;
            font-size: 12px;
            color: #182033;
            background: #fff;
            outline: none;
            transition: .2s ease;
        }

        .form-input:focus,
        .form-textarea:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99,102,241,.1);
        }

        .form-textarea {
            min-height: 130px;
            resize: vertical;
        }

        .form-help {
            color: #8a93a5;
            font-size: 10px;
            margin-top: 6px;
        }

        .error {
            color: #dc2626;
            font-size: 10px;
            margin-top: 6px;
            font-weight: 600;
        }

        /* =========================
           BUTTONS
        ========================= */

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            padding-top: 20px;
            border-top: 1px solid #edf0f4;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 11px 19px;
            border-radius: 9px;
            font-family: inherit;
            font-size: 11px;
            font-weight: 800;
            text-decoration: none;
            cursor: pointer;
            border: none;
            transition: .2s ease;
        }

        .cancel-button {
            background: #f1f3f7;
            color: #4b5563;
        }

        .cancel-button:hover {
            background: #e5e7eb;
        }

        .save-button {
            background: #6366f1;
            color: white;
        }

        .save-button:hover {
            background: #4f46e5;
            transform: translateY(-1px);
        }

        /* =========================
           VALIDATION SUMMARY
        ========================= */

        .validation-box {
            background: #fee2e2;
            border: 1px solid #fecaca;
            border-radius: 10px;
            padding: 14px 16px;
            margin-bottom: 22px;
            color: #991b1b;
            font-size: 11px;
        }

        .validation-box strong {
            display: block;
            margin-bottom: 6px;
        }

        .validation-box ul {
            margin: 0;
            padding-left: 18px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 650px) {

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

            .page-title {
                font-size: 28px;
            }

            .form-card {
                padding: 22px;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .button {
                width: 100%;
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
     PAGE
========================= -->

<main class="container">


    <!-- BACK -->

    <a
        href="{{ route('courses.index') }}"
        class="back-link"
    >
        ← Back to Courses
    </a>


    <!-- HEADER -->

    <div class="page-header">

        <div class="page-label">
            Academic Management
        </div>

        <h1 class="page-title">
            Add New Course
        </h1>

        <p class="page-description">
            Create a new academic course and make it available for student enrollment.
        </p>

    </div>


    <!-- VALIDATION ERRORS -->

    @if ($errors->any())

        <div class="validation-box">

            <strong>
                Please correct the following errors:
            </strong>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    <!-- FORM CARD -->

    <section class="form-card">


        <div class="form-heading">

            <div class="form-icon">
                🎓
            </div>

            <div>

                <h2>
                    Course Information
                </h2>

                <p>
                    Enter the basic information for the new course.
                </p>

            </div>

        </div>


        <!-- FORM -->

        <form
            action="{{ route('courses.store') }}"
            method="POST"
        >

            @csrf


            <!-- COURSE NAME -->

            <div class="form-group">

                <label
                    for="name"
                    class="form-label"
                >
                    Course Name
                    <span class="required">*</span>
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    class="form-input"
                    placeholder="e.g. Laravel Development"
                    required
                >

                <div class="form-help">
                    Enter a unique name for the course.
                </div>

                @error('name')

                    <div class="error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            <!-- DESCRIPTION -->

            <div class="form-group">

                <label
                    for="description"
                    class="form-label"
                >
                    Course Description
                </label>

                <textarea
                    id="description"
                    name="description"
                    class="form-textarea"
                    placeholder="Enter a short description of the course..."
                >{{ old('description') }}</textarea>

                <div class="form-help">
                    Provide a brief description of what students will learn in this course.
                </div>

                @error('description')

                    <div class="error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            <!-- ACTIONS -->

            <div class="form-actions">

                <a
                    href="{{ route('courses.index') }}"
                    class="button cancel-button"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="button save-button"
                >
                    Create Course
                </button>

            </div>


        </form>

    </section>

</main>


</body>

</html>