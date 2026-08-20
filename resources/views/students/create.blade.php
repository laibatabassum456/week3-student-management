<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Add Student | Student Management</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
    body {
        background: #f5f7fb;
        font-family: Arial, Helvetica, sans-serif;
        color: #172033;
    }

    .page-wrapper {
        max-width: 1000px;
        margin: 0 auto;
        padding: 40px 24px;
    }

    .top-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 28px;
    }

    .brand {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .brand-logo {
        width: 42px;
        height: 42px;
        border-radius: 12px;
        background: #1e3a8a;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 17px;
    }

    .brand-title {
        font-size: 18px;
        font-weight: 700;
    }

    .brand-subtitle {
        font-size: 12px;
        color: #7b8497;
        margin-top: 2px;
    }

    .back-link {
        color: #475569;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
    }

    .back-link:hover {
        color: #1e3a8a;
    }

    .header-card {
        background: linear-gradient(135deg, #1e3a8a, #2563eb);
        border-radius: 18px;
        padding: 30px;
        color: white;
        margin-bottom: 22px;
        box-shadow: 0 10px 30px rgba(30, 58, 138, 0.16);
    }

    .header-card h1 {
        margin: 0;
        font-size: 28px;
        font-weight: 700;
    }

    .header-card p {
        margin: 8px 0 0;
        color: #dbeafe;
        font-size: 14px;
    }

    .form-card {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 18px;
        padding: 32px;
        box-shadow: 0 8px 25px rgba(15, 23, 42, 0.06);
    }

    .section-title {
        font-size: 17px;
        font-weight: 700;
        margin-bottom: 22px;
        color: #172033;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 22px;
    }

    .full-width {
        grid-column: 1 / -1;
    }

    .field label {
        display: block;
        font-size: 13px;
        font-weight: 700;
        color: #374151;
        margin-bottom: 8px;
    }

    .field input,
    .field select {
        width: 100%;
        box-sizing: border-box;
        padding: 12px 14px;
        border: 1px solid #d8dee9;
        border-radius: 10px;
        background: #fff;
        color: #172033;
        font-size: 14px;
        outline: none;
        transition: 0.2s;
    }

    .field input:focus,
    .field select:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.10);
    }

    .field input::placeholder {
        color: #a0a7b4;
    }

    .field-help {
        font-size: 12px;
        color: #7b8497;
        margin-top: 7px;
    }

    .error-box {
        background: #fff1f2;
        border: 1px solid #fecdd3;
        color: #be123c;
        border-radius: 12px;
        padding: 15px 18px;
        margin-bottom: 24px;
        font-size: 13px;
    }

    .error-box strong {
        display: block;
        margin-bottom: 7px;
    }

    .error-box ul {
        margin: 0;
        padding-left: 20px;
    }

    .field-error {
        color: #dc2626;
        font-size: 12px;
        margin-top: 6px;
    }

    .image-upload {
        border: 1px dashed #cbd5e1;
        border-radius: 12px;
        padding: 18px;
        background: #f8fafc;
    }

    .image-upload input {
        background: white;
    }

    .actions {
        display: flex;
        justify-content: flex-end;
        gap: 12px;
        margin-top: 30px;
        padding-top: 24px;
        border-top: 1px solid #edf0f4;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 11px 20px;
        border-radius: 9px;
        text-decoration: none;
        border: none;
        cursor: pointer;
        font-size: 14px;
        font-weight: 700;
    }

    .btn-primary {
        background: #1e3a8a;
        color: white;
    }

    .btn-primary:hover {
        background: #172554;
    }

    .btn-secondary {
        background: #f1f5f9;
        color: #475569;
    }

    .btn-secondary:hover {
        background: #e2e8f0;
    }

    .required {
        color: #dc2626;
    }

    @media (max-width: 700px) {
        .page-wrapper {
            padding: 25px 16px;
        }

        .top-bar {
            align-items: flex-start;
        }

        .form-grid {
            grid-template-columns: 1fr;
        }

        .full-width {
            grid-column: auto;
        }

        .form-card {
            padding: 22px;
        }

        .header-card {
            padding: 24px;
        }

        .actions {
            flex-direction: column-reverse;
        }

        .btn {
            width: 100%;
        }
    }
</style>


</head>

<body>

<div class="page-wrapper">


<!-- Top Navigation -->
<div class="top-bar">

    <div class="brand">
        <div class="brand-logo">SM</div>

        <div>
            <div class="brand-title">Student Management</div>
            <div class="brand-subtitle">Administration Portal</div>
        </div>
    </div>

    <a href="{{ route('students.index') }}" class="back-link">
        ← Back to Students
    </a>

</div>

<!-- Page Header -->
<div class="header-card">
    <h1>Add New Student</h1>

    <p>
        Create a new student record and assign the appropriate course.
    </p>
</div>

<!-- Form -->
<div class="form-card">

    <div class="section-title">
        Student Information
    </div>

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div class="error-box">
            <strong>Please fix the following errors:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        action="{{ route('students.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf

        <div class="form-grid">

            <!-- Name -->
            <div class="field">
                <label for="name">
                    Full Name <span class="required">*</span>
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="e.g. Laiba Tabassum"
                    required
                >

                @error('name')
                    <div class="field-error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="field">
                <label for="email">
                    Email Address <span class="required">*</span>
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="student@example.com"
                    required
                >

                @error('email')
                    <div class="field-error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Phone -->
            <div class="field">
                <label for="phone">
                    Phone Number <span class="required">*</span>
                </label>

                <input
                    type="text"
                    id="phone"
                    name="phone"
                    value="{{ old('phone') }}"
                    placeholder="03001234567"
                    required
                >

                @error('phone')
                    <div class="field-error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Course -->
            <div class="field">
                <label for="course_id">
                    Course <span class="required">*</span>
                </label>

                <select
                    id="course_id"
                    name="course_id"
                    required
                >
                    <option value="">Select a course</option>

                    @foreach ($courses as $course)
                        <option
                            value="{{ $course->id }}"
                            {{ old('course_id') == $course->id ? 'selected' : '' }}
                        >
                            {{ $course->name }}
                        </option>
                    @endforeach
                </select>

                @error('course_id')
                    <div class="field-error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image -->
            <div class="field full-width">

                <label for="image">
                    Profile Image
                </label>

                <div class="image-upload">

                    <input
                        type="file"
                        id="image"
                        name="image"
                        accept=".jpg,.jpeg,.png,.webp"
                    >

                    <div class="field-help">
                        JPG, JPEG, PNG or WEBP. Maximum file size: 2MB.
                    </div>

                </div>

                @error('image')
                    <div class="field-error">{{ $message }}</div>
                @enderror

            </div>

        </div>

        <!-- Actions -->
        <div class="actions">

            <a
                href="{{ route('students.index') }}"
                class="btn btn-secondary"
            >
                Cancel
            </a>

            <button
                type="submit"
                class="btn btn-primary"
            >
                Add Student
            </button>

        </div>

    </form>

</div>


</div>

</body>
</html>
