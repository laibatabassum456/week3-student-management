
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $student->name }} - Student Profile</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #172033;
        }

        .topbar {
            height: 72px;
            background: #ffffff;
            border-bottom: 1px solid #e7eaf0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 42px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: #172033;
        }

        .brand-mark {
            width: 40px;
            height: 40px;
            border-radius: 11px;
            background: #172033;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 16px;
        }

        .brand-title {
            font-size: 17px;
            font-weight: 700;
        }

        .brand-subtitle {
            font-size: 11px;
            color: #7b8495;
            margin-top: 2px;
        }

        .user-area {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #e9eefb;
            color: #3156a3;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 700;
        }

        .user-name {
            font-size: 14px;
            font-weight: 600;
        }

        .page {
            max-width: 1050px;
            margin: 0 auto;
            padding: 42px 24px 60px;
        }

        .breadcrumb {
            margin-bottom: 25px;
        }

        .breadcrumb a {
            color: #64748b;
            text-decoration: none;
            font-size: 13px;
        }

        .breadcrumb a:hover {
            color: #3156a3;
        }

        .page-heading {
            margin-bottom: 25px;
        }

        .page-heading h1 {
            margin: 0;
            font-size: 30px;
            font-weight: 750;
            letter-spacing: -0.5px;
        }

        .page-heading p {
            margin: 7px 0 0;
            color: #697386;
            font-size: 14px;
        }

        .alert {
            border-radius: 12px;
            padding: 14px 17px;
            margin-bottom: 22px;
            font-size: 14px;
        }

        .success {
            background: #ecfdf3;
            border: 1px solid #bbf7d0;
            color: #166534;
        }

        .error {
            background: #fff1f2;
            border: 1px solid #fecdd3;
            color: #be123c;
        }

        .profile-layout {
            display: grid;
            grid-template-columns: 1fr 330px;
            gap: 22px;
            align-items: start;
        }

        .card {
            background: #ffffff;
            border: 1px solid #e7eaf0;
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(20, 32, 56, 0.05);
        }

        .profile-card {
            padding: 32px;
        }

        .profile-header {
            display: flex;
            align-items: center;
            gap: 22px;
            padding-bottom: 28px;
            border-bottom: 1px solid #edf0f4;
        }

        .profile-image {
            width: 110px;
            height: 110px;
            border-radius: 18px;
            object-fit: cover;
            border: 4px solid #f1f4f8;
        }

        .profile-placeholder {
            width: 110px;
            height: 110px;
            border-radius: 18px;
            background: #e9eefb;
            color: #3156a3;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
            font-weight: 700;
            border: 4px solid #f1f4f8;
        }

        .profile-title h2 {
            margin: 0 0 7px;
            font-size: 25px;
            font-weight: 750;
        }

        .profile-title p {
            margin: 0;
            color: #697386;
            font-size: 14px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            margin-top: 12px;
            padding: 6px 10px;
            background: #eef3ff;
            color: #3156a3;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
        }

        .info-section {
            padding-top: 27px;
        }

        .section-title {
            margin: 0 0 17px;
            font-size: 15px;
            font-weight: 750;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
        }

        .info-item {
            padding: 17px;
            background: #f8fafc;
            border: 1px solid #edf0f4;
            border-radius: 12px;
        }

        .info-label {
            display: block;
            color: #7b8495;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .5px;
            margin-bottom: 7px;
        }

        .info-value {
            color: #263247;
            font-size: 14px;
            font-weight: 600;
            word-break: break-word;
        }

        .upload-card {
            padding: 25px;
        }

        .upload-card h2 {
            margin: 0;
            font-size: 17px;
            font-weight: 750;
        }

        .upload-card .description {
            margin: 7px 0 22px;
            color: #788294;
            font-size: 13px;
            line-height: 1.6;
        }

        .file-label {
            display: block;
            font-size: 13px;
            font-weight: 700;
            color: #364152;
            margin-bottom: 8px;
        }

        .file-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #d9dee7;
            border-radius: 10px;
            background: #fafbfc;
            font-size: 12px;
        }

        .file-input:focus {
            outline: none;
            border-color: #5575c5;
        }

        .upload-note {
            margin: 9px 0 18px;
            color: #8a93a3;
            font-size: 11px;
            line-height: 1.5;
        }

        .upload-button {
            width: 100%;
            border: 0;
            border-radius: 10px;
            padding: 11px 16px;
            background: #172033;
            color: white;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            transition: .2s;
        }

        .upload-button:hover {
            background: #263247;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            margin-top: 22px;
            color: #526173;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
        }

        .back-link:hover {
            color: #3156a3;
        }

        .error-list {
            margin: 8px 0 0;
            padding-left: 18px;
        }

        .error-list li {
            margin-bottom: 3px;
        }

        @media (max-width: 800px) {
            .profile-layout {
                grid-template-columns: 1fr;
            }

            .topbar {
                padding: 0 20px;
            }

            .user-name {
                display: none;
            }
        }

        @media (max-width: 550px) {
            .page {
                padding: 28px 15px 45px;
            }

            .profile-card {
                padding: 22px;
            }

            .profile-header {
                align-items: flex-start;
            }

            .profile-image,
            .profile-placeholder {
                width: 82px;
                height: 82px;
            }

            .profile-placeholder {
                font-size: 28px;
            }

            .profile-title h2 {
                font-size: 20px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<header class="topbar">

    <a href="{{ route('students.index') }}" class="brand">

        <div class="brand-mark">
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

    <div class="user-area">

        @auth
            <div class="user-avatar">
                {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
            </div>

            <span class="user-name">
                {{ auth()->user()->name }}
            </span>
        @else
            <div class="user-avatar">
                GU
            </div>

            <span class="user-name">
                Guest
            </span>
        @endauth

    </div>

</header>


<main class="page">

    <div class="breadcrumb">
        <a href="{{ route('students.index') }}">
            ← Student Directory
        </a>
    </div>


    <div class="page-heading">

        <h1>Student Profile</h1>

        <p>
            View student information and manage the profile image.
        </p>

    </div>


    {{-- Success Message --}}
    @if(session('success'))

        <div class="alert success">
            {{ session('success') }}
        </div>

    @endif


    {{-- Validation Errors --}}
    @if($errors->any())

        <div class="alert error">

            <strong>Please fix the following:</strong>

            <ul class="error-list">

                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif


    <div class="profile-layout">


        {{-- Student Profile Card --}}
        <section class="card profile-card">

            <div class="profile-header">

                {{-- Student Image --}}
                @if($student->image)

                    <img
                        src="{{ asset('storage/' . $student->image) }}"
                        alt="{{ $student->name }}"
                        class="profile-image"
                    >

                @else

                    <div class="profile-placeholder">

                        {{ strtoupper(substr($student->name, 0, 1)) }}

                    </div>

                @endif


                <div class="profile-title">

                    <h2>
                        {{ $student->name }}
                    </h2>

                    <p>
                        {{ $student->email }}
                    </p>

                    <span class="badge">
                        {{ $student->course->name ?? 'No Course Assigned' }}
                    </span>

                </div>

            </div>


            {{-- Student Information --}}
            <div class="info-section">

                <h3 class="section-title">
                    Student Information
                </h3>

                <div class="info-grid">

                    <div class="info-item">

                        <span class="info-label">
                            Full Name
                        </span>

                        <span class="info-value">
                            {{ $student->name }}
                        </span>

                    </div>


                    <div class="info-item">

                        <span class="info-label">
                            Email Address
                        </span>

                        <span class="info-value">
                            {{ $student->email }}
                        </span>

                    </div>


                    <div class="info-item">

                        <span class="info-label">
                            Phone Number
                        </span>

                        <span class="info-value">
                            {{ $student->phone }}
                        </span>

                    </div>


                    <div class="info-item">

                        <span class="info-label">
                            Course
                        </span>

                        <span class="info-value">
                            {{ $student->course->name ?? 'No Course Assigned' }}
                        </span>

                    </div>

                </div>

            </div>

        </section>


        {{-- Upload Card --}}
        <aside class="card upload-card">

            <h2>
                Profile Image
            </h2>

            <p class="description">
                Upload a new profile image for this student.
            </p>


            <form
                action="{{ route('students.updateImage', $student) }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf


                <label
                    for="image"
                    class="file-label"
                >
                    Choose Image
                </label>


                <input
                    type="file"
                    id="image"
                    name="image"
                    accept="image/jpeg,image/png,image/jpg,image/webp"
                    class="file-input"
                    required
                >


                <p class="upload-note">
                    JPG, JPEG, PNG or WEBP.
                    Maximum file size: 2MB.
                </p>


                <button
                    type="submit"
                    class="upload-button"
                >
                    Upload New Image
                </button>

            </form>

        </aside>

    </div>


    <a
        href="{{ route('students.index') }}"
        class="back-link"
    >
        ← Back to Students
    </a>

</main>

</body>
</html>
```
