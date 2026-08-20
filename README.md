<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Student Management System — Week 3

A Laravel-based Student Management System developed as part of the Week 3 internship tasks.

The system provides authentication, an admin dashboard, student management, course information, student profiles, profile image uploads, search, filtering, validation, and automated testing.

---

## Features

* User Registration and Login
* User Logout
* Email Verification
* Password Reset
* Admin Dashboard
* Admin Middleware
* Student CRUD Operations
* Student Search
* Course Filtering
* Student Profile
* Student Profile Image Upload
* Course Management
* Student-Course Relationship
* Pagination
* Form Validation
* Authentication Tests
* Feature Tests
* Responsive User Interface

---

## Technologies Used

* PHP
* Laravel
* MySQL
* Blade
* Tailwind CSS
* JavaScript
* Vite
* PHPUnit
* Laravel Breeze

---

## Requirements

Before running the project, make sure the computer has:

* PHP 8.2 or higher
* Composer
* Node.js
* npm
* MySQL
* XAMPP or another local PHP/MySQL environment

Check the installed versions:

```bash
php -v
composer -V
node -v
npm -v
```

---

## Installation

### 1. Download the Project

Download the repository from GitHub and extract the ZIP file.

Open PowerShell or Command Prompt inside the project folder.

Example:

```text
week3-student-management
```

---

### 2. Install PHP Dependencies

Run:

```bash
composer install
```

---

### 3. Install Frontend Dependencies

Run:

```bash
npm install
```

Then build the frontend assets:

```bash
npm run build
```

---

### 4. Create the Environment File

Create a `.env` file from `.env.example`.

On Windows PowerShell:

```powershell
copy .env.example .env
```

---

### 5. Generate the Application Key

Run:

```bash
php artisan key:generate
```

---

## Database Setup

### 6. Start MySQL

If using XAMPP:

1. Open XAMPP Control Panel.
2. Start Apache.
3. Start MySQL.

---

### 7. Create the Database

Open phpMyAdmin and create a new database.

Recommended database name:

```text
week3_student_management
```

---

### 8. Configure `.env`

Open the `.env` file and configure the database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=week3_student_management
DB_USERNAME=root
DB_PASSWORD=
```

If the MySQL installation uses a password, enter it in `DB_PASSWORD`.

---

### 9. Run Database Migrations

Run:

```bash
php artisan migrate
```

This creates the required database tables.

If database seeders are available, they can be executed with:

```bash
php artisan db:seed
```

or:

```bash
php artisan migrate --seed
```

---

## Storage Setup

The project supports student profile image uploads.

Create Laravel's storage link:

```bash
php artisan storage:link
```

This allows uploaded images to be accessed from the application.

---

## Run the Application

Start the Laravel development server:

```bash
php artisan serve
```

The terminal will display an address similar to:

```text
http://127.0.0.1:8000
```

Open that address in a web browser.

---

## Running Frontend Development Mode

If frontend assets need to be developed or changed, run:

```bash
npm run dev
```

Keep the Vite development server running while using the application.

For normal evaluation, `npm run build` is sufficient if the compiled assets are being served.

---

## Authentication

The application includes authentication functionality.

Available pages include:

```text
/login
/register
/forgot-password
/profile
```

The admin dashboard is available at:

```text
/dashboard
```

---

## Main Application Routes

### Dashboard

```text
/dashboard
```

### Students

```text
/students
/students/create
/students/{student}
/students/{student}/edit
```

### Courses

```text
/courses
```

### Student Profile Image

```text
/students/{student}/image
```

---

## Student Management

The Student Management module allows administrators to:

* View students
* Add students
* Edit student information
* Delete students
* Search students by name or email
* Filter students by course
* View individual student profiles
* Upload student profile images

---

## Course Management

The Courses module displays available courses and their associated students.

The student-course relationship is handled through Laravel Eloquent relationships.

---

## Testing

The project includes Laravel Unit and Feature tests.

Run all tests using:

```bash
php artisan test
```

Current test result:

```text
25 passed
61 assertions
```

This confirms that the authentication, profile, registration, password, and other application functionality passes the implemented automated tests.

---

## Recommended Setup Order

For quick setup on a new computer:

```bash
composer install
npm install
npm run build
```

Create `.env`:

```powershell
copy .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure the MySQL database in `.env`, then run:

```bash
php artisan migrate
php artisan storage:link
php artisan serve
```

Open:

```text
http://127.0.0.1:8000
```

---

## Project Structure

```text
week3-student-management/
│
├── app/
│   ├── Http/
│   ├── Models/
│   └── ...
│
├── database/
│   ├── migrations/
│   └── seeders/
│
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── courses/
│       ├── students/
│       ├── dashboard.blade.php
│       └── ...
│
├── routes/
│   ├── web.php
│   └── auth.php
│
├── tests/
│   ├── Feature/
│   └── Unit/
│
├── public/
├── composer.json
├── package.json
├── phpunit.xml
└── README.md
```

---

## GitHub Repository

The complete source code is available on GitHub:

**week3-student-management**

Repository:

https://github.com/laibatabassum456/week3-student-management

---

## Notes for Evaluation

The `.env` file is intentionally not included in the repository because it contains environment-specific configuration.

After downloading the project on another computer, the evaluator should create the `.env` file using `.env.example` and configure the local database before running the application.

The `vendor` and `node_modules` directories do not need to be uploaded to GitHub. They are recreated using:

```bash
composer install
npm install
```

---

## Conclusion

The Week 3 Student Management System demonstrates Laravel authentication, middleware, CRUD operations, Eloquent relationships, database migrations, image uploading, search and filtering, responsive interfaces, and automated testing.

The project is maintained in a GitHub repository so that the source code can be reviewed and reproduced on another computer.
