<x-app-layout>

    <style>
        .user-create-page {
            background: #eef1f7;
            min-height: calc(100vh - 70px);
            padding: 38px 25px 70px;
        }

        .user-create-container {
            max-width: 850px;
            margin: auto;
        }

        .page-header {
            margin-bottom: 25px;
        }

        .back-link {
            display: inline-block;
            color: #6366f1;
            text-decoration: none;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .back-link:hover {
            color: #4f46e5;
        }

        .page-title {
            margin: 0;
            font-size: 30px;
            font-weight: 850;
            color: #182033;
        }

        .page-description {
            margin-top: 7px;
            color: #7b8495;
            font-size: 13px;
        }

        .form-card {
            background: white;
            border: 1px solid #e1e5ec;
            border-radius: 20px;
            padding: 30px;
        }

        .form-section-title {
            font-size: 18px;
            font-weight: 850;
            color: #182033;
            margin-bottom: 5px;
        }

        .form-section-description {
            color: #8a93a5;
            font-size: 12px;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            color: #374151;
            font-size: 12px;
            font-weight: 800;
            margin-bottom: 7px;
        }

        .form-input,
        .form-select {
            width: 100%;
            border: 1px solid #d9dee8;
            border-radius: 9px;
            padding: 11px 13px;
            font-size: 13px;
            color: #182033;
            background: white;
            outline: none;
            transition: .2s ease;
        }

        .form-input:focus,
        .form-select:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99,102,241,.10);
        }

        .error-message {
            color: #dc2626;
            font-size: 11px;
            margin-top: 5px;
        }

        .role-box {
            background: #f8fafc;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 15px;
            margin-top: 8px;
        }

        .role-help {
            color: #8a93a5;
            font-size: 11px;
            margin-top: 5px;
            line-height: 1.5;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 28px;
            padding-top: 22px;
            border-top: 1px solid #edf0f4;
        }

        .cancel-button,
        .submit-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 11px 20px;
            border-radius: 9px;
            text-decoration: none;
            font-size: 12px;
            font-weight: 800;
            border: none;
            cursor: pointer;
            transition: .2s ease;
        }

        .cancel-button {
            background: #f1f5f9;
            color: #475569;
        }

        .cancel-button:hover {
            background: #e2e8f0;
        }

        .submit-button {
            background: #6366f1;
            color: white;
        }

        .submit-button:hover {
            background: #4f46e5;
            transform: translateY(-1px);
        }

        .security-note {
            background: #eef2ff;
            border: 1px solid #c7d2fe;
            border-radius: 12px;
            padding: 14px;
            margin-bottom: 25px;
        }

        .security-note-title {
            color: #3730a3;
            font-size: 12px;
            font-weight: 800;
            margin-bottom: 4px;
        }

        .security-note-text {
            color: #6366f1;
            font-size: 11px;
            line-height: 1.5;
        }

        @media (max-width: 650px) {

            .user-create-page {
                padding: 25px 15px 50px;
            }

            .form-card {
                padding: 22px;
            }

            .page-title {
                font-size: 25px;
            }

            .form-actions {
                flex-direction: column;
            }

            .cancel-button,
            .submit-button {
                width: 100%;
            }
        }
    </style>


    <div class="user-create-page">

        <div class="user-create-container">

            <!-- HEADER -->

            <div class="page-header">

                <a
                    href="{{ route('users.index') }}"
                    class="back-link"
                >
                    ← Back to User Management
                </a>

                <h1 class="page-title">
                    Create New User
                </h1>

                <p class="page-description">
                    Create a new account and assign the appropriate system role.
                </p>

            </div>


            <!-- FORM CARD -->

            <div class="form-card">

                <div class="form-section-title">
                    User Account Information
                </div>

                <div class="form-section-description">
                    Enter the details below to create a new registered account.
                </div>


                <!-- SECURITY NOTE -->

                <div class="security-note">

                    <div class="security-note-title">
                        🔐 Administrator Access
                    </div>

                    <div class="security-note-text">
                        Only administrators can create accounts from this page.
                        Choose the user's role carefully.
                    </div>

                </div>


                <form
                    method="POST"
                    action="{{ route('users.store') }}"
                >

                    @csrf


                    <!-- NAME -->

                    <div class="form-group">

                        <label
                            for="name"
                            class="form-label"
                        >
                            Full Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            class="form-input"
                            placeholder="Enter full name"
                            required
                        >

                        @error('name')
                            <div class="error-message">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- EMAIL -->

                    <div class="form-group">

                        <label
                            for="email"
                            class="form-label"
                        >
                            Email Address
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="form-input"
                            placeholder="Enter email address"
                            required
                        >

                        @error('email')
                            <div class="error-message">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- PASSWORD -->

                    <div class="form-group">

                        <label
                            for="password"
                            class="form-label"
                        >
                            Password
                        </label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-input"
                            placeholder="Create a password"
                            required
                        >

                        @error('password')
                            <div class="error-message">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- CONFIRM PASSWORD -->

                    <div class="form-group">

                        <label
                            for="password_confirmation"
                            class="form-label"
                        >
                            Confirm Password
                        </label>

                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            class="form-input"
                            placeholder="Confirm password"
                            required
                        >

                    </div>


                    <!-- ROLE -->

                    <div class="form-group">

                        <label
                            for="role"
                            class="form-label"
                        >
                            Account Role
                        </label>

                        <div class="role-box">

                            <select
                                id="role"
                                name="role"
                                class="form-select"
                                required
                            >

                                <option
                                    value="student"
                                    {{ old('role') == 'student' ? 'selected' : '' }}
                                >
                                    Student
                                </option>

                                <option
                                    value="admin"
                                    {{ old('role') == 'admin' ? 'selected' : '' }}
                                >
                                    Administrator
                                </option>

                            </select>

                            <div class="role-help">
                                Students have regular account access.
                                Administrators can manage students, courses,
                                and registered users.
                            </div>

                        </div>

                        @error('role')
                            <div class="error-message">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- ACTIONS -->

                    <div class="form-actions">

                        <a
                            href="{{ route('users.index') }}"
                            class="cancel-button"
                        >
                            Cancel
                        </a>

                        <button
                            type="submit"
                            class="submit-button"
                        >
                            Create User
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>