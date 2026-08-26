<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Management - Student Management</title>

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

        /* NAVIGATION */

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

        /* CONTAINER */

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 38px 25px 70px;
        }

        /* BACK */

        .back {
            display: inline-block;
            text-decoration: none;
            color: #6366f1;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .back:hover {
            color: #4f46e5;
        }

        /* HERO */

        .hero {
            background: #111827;
            border-radius: 22px;
            padding: 38px 42px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 30px;
            margin-bottom: 30px;
            overflow: hidden;
            position: relative;
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: #6366f1;
            opacity: .15;
            right: -100px;
            top: -130px;
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

        .hero h1 {
            margin: 0;
            font-size: 34px;
            font-weight: 850;
            letter-spacing: -1px;
        }

        .hero p {
            margin: 9px 0 0;
            color: #cbd5e1;
            font-size: 13px;
            max-width: 600px;
            line-height: 1.6;
        }

        .hero-stat {
            position: relative;
            z-index: 2;
            min-width: 170px;
            padding: 20px;
            border-radius: 16px;
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.1);
        }

        .hero-stat-label {
            color: #9ca3af;
            font-size: 11px;
        }

        .hero-stat-number {
            font-size: 36px;
            font-weight: 850;
            margin-top: 4px;
        }

        /* ALERTS */

        .alert {
            padding: 14px 18px;
            border-radius: 12px;
            margin-bottom: 22px;
            font-size: 13px;
            font-weight: 600;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
        }

        .error {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }

        /* SECTION */

        .section {
            background: white;
            border: 1px solid #e1e5ec;
            border-radius: 18px;
            overflow: hidden;
        }

        .section-header {
            padding: 24px 26px;
            border-bottom: 1px solid #edf0f4;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .section-header h2 {
            margin: 0;
            font-size: 19px;
            font-weight: 850;
        }

        .section-header p {
            margin: 5px 0 0;
            color: #7b8495;
            font-size: 12px;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .user-count {
            color: #7b8495;
            font-size: 12px;
            font-weight: 700;
            white-space: nowrap;
        }

        /* ADD USER BUTTON */

        .add-user-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 15px;
            border-radius: 8px;
            background: #6366f1;
            color: white;
            text-decoration: none;
            font-size: 11px;
            font-weight: 800;
            transition: .2s ease;
            white-space: nowrap;
        }

        .add-user-button:hover {
            background: #4f46e5;
            transform: translateY(-1px);
        }

        /* TABLE */

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #f8fafc;
            color: #6b7280;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: .7px;
            font-weight: 800;
            text-align: left;
            padding: 15px 20px;
            border-bottom: 1px solid #e5e7eb;
        }

        td {
            padding: 18px 20px;
            border-bottom: 1px solid #edf0f4;
            vertical-align: middle;
            font-size: 13px;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: #fafbff;
        }

        /* USER */

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .user-avatar {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: #ede9fe;
            color: #6366f1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 850;
        }

        .user-name {
            font-weight: 800;
            color: #182033;
        }

        .user-id {
            color: #9aa2b1;
            font-size: 10px;
            margin-top: 3px;
        }

        .email {
            color: #596273;
        }

        /* ROLE */

        .role {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 7px;
            font-size: 10px;
            font-weight: 850;
            text-transform: uppercase;
        }

        .role-admin {
            background: #ede9fe;
            color: #6d28d9;
        }

        .role-student {
            background: #dcfce7;
            color: #15803d;
        }

        /* ACTIONS */

        .actions {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .role-form {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        select {
            border: 1px solid #d9dee8;
            border-radius: 7px;
            padding: 7px 9px;
            font-size: 11px;
            background: white;
            color: #374151;
            outline: none;
        }

        select:focus {
            border-color: #6366f1;
        }

        .btn {
            border: none;
            border-radius: 7px;
            padding: 8px 11px;
            font-size: 10px;
            font-weight: 800;
            cursor: pointer;
        }

        .btn-role {
            background: #6366f1;
            color: white;
        }

        .btn-role:hover {
            background: #4f46e5;
        }

        .btn-delete {
            background: #fee2e2;
            color: #b91c1c;
        }

        .btn-delete:hover {
            background: #fecaca;
        }

        .self {
            color: #9ca3af;
            font-size: 10px;
            font-weight: 700;
        }

        /* EMPTY */

        .empty {
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

        /* RESPONSIVE */

        @media (max-width: 800px) {

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

            .hero {
                padding: 28px;
                flex-direction: column;
                align-items: flex-start;
            }

            .hero h1 {
                font-size: 28px;
            }

            .hero-stat {
                width: 100%;
            }

            .section-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .header-right {
                width: 100%;
                justify-content: space-between;
            }

            th,
            td {
                padding: 14px 12px;
            }
        }
    </style>
</head>

<body>

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

        <a href="{{ route('dashboard') }}" class="nav-link">
            Dashboard
        </a>

        <a href="{{ route('students.index') }}" class="nav-link">
            Students
        </a>

        <a href="{{ route('courses.index') }}" class="nav-link">
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

    </div>

</header>


<main class="container">

    <a href="{{ route('dashboard') }}" class="back">
        ← Back to Dashboard
    </a>


    <!-- HERO -->

    <section class="hero">

        <div class="hero-content">

            <div class="hero-label">
                Administration
            </div>

            <h1>
                User Management
            </h1>

            <p>
                Manage registered accounts, control user roles,
                and maintain administrator access to the system.
            </p>

        </div>

        <div class="hero-stat">

            <div class="hero-stat-label">
                REGISTERED USERS
            </div>

            <div class="hero-stat-number">
                {{ $users->count() }}
            </div>

        </div>

    </section>


    <!-- ALERTS -->

    @if(session('success'))

        <div class="alert success">
            {{ session('success') }}
        </div>

    @endif


    @if(session('error'))

        <div class="alert error">
            {{ session('error') }}
        </div>

    @endif


    <!-- USERS -->

    <section class="section">

        <div class="section-header">

            <div>

                <h2>
                    Registered Users
                </h2>

                <p>
                    View accounts and manage administrator permissions.
                </p>

            </div>

            <div class="header-right">

                <span class="user-count">
                    {{ $users->count() }}
                    {{ $users->count() === 1 ? 'User' : 'Users' }}
                </span>

                <!-- ADD NEW USER -->

                <a
                    href="{{ route('users.create') }}"
                    class="add-user-button"
                >
                    + Add New User
                </a>

            </div>

        </div>


        @if($users->count())

            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>
                            <th>User</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Manage Role</th>
                            <th>Account</th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach($users as $user)

                            <tr>

                                <!-- USER -->

                                <td>

                                    <div class="user-info">

                                        <div class="user-avatar">
                                            {{ strtoupper(substr($user->name, 0, 2)) }}
                                        </div>

                                        <div>

                                            <div class="user-name">
                                                {{ $user->name }}
                                            </div>

                                            <div class="user-id">
                                                USER ID #{{ $user->id }}
                                            </div>

                                        </div>

                                    </div>

                                </td>


                                <!-- EMAIL -->

                                <td>
                                    <span class="email">
                                        {{ $user->email }}
                                    </span>
                                </td>


                                <!-- ROLE -->

                                <td>

                                    @if($user->role === 'admin')

                                        <span class="role role-admin">
                                            Admin
                                        </span>

                                    @else

                                        <span class="role role-student">
                                            Student
                                        </span>

                                    @endif

                                </td>


                                <!-- CHANGE ROLE -->

                                <td>

                                    @if($user->id !== auth()->id())

                                        <form
                                            action="{{ route('users.updateRole', $user) }}"
                                            method="POST"
                                            class="role-form"
                                        >

                                            @csrf
                                            @method('PATCH')

                                            <select name="role">

                                                <option
                                                    value="student"
                                                    {{ $user->role === 'student' ? 'selected' : '' }}
                                                >
                                                    Student
                                                </option>

                                                <option
                                                    value="admin"
                                                    {{ $user->role === 'admin' ? 'selected' : '' }}
                                                >
                                                    Admin
                                                </option>

                                            </select>

                                            <button
                                                type="submit"
                                                class="btn btn-role"
                                            >
                                                Update
                                            </button>

                                        </form>

                                    @else

                                        <span class="self">
                                            Current Account
                                        </span>

                                    @endif

                                </td>


                                <!-- DELETE -->

                                <td>

                                    @if($user->id !== auth()->id())

                                        <form
                                            action="{{ route('users.destroy', $user) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this user?');"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-delete"
                                            >
                                                Delete
                                            </button>

                                        </form>

                                    @else

                                        <span class="self">
                                            Protected
                                        </span>

                                    @endif

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        @else

            <div class="empty">

                <div class="empty-icon">
                    👥
                </div>

                <h3>
                    No Users Found
                </h3>

                <p>
                    There are currently no registered accounts.
                </p>

                <a
                    href="{{ route('users.create') }}"
                    class="add-user-button"
                    style="margin-top: 15px;"
                >
                    + Add First User
                </a>

            </div>

        @endif

    </section>

</main>

</body>

</html>