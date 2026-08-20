<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        h1 {
            color: #333;
        }

        .course {
            background: white;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .course h2 {
            margin-top: 0;
        }

        .students {
            margin-top: 10px;
            color: #555;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Courses</h1>

    @foreach ($courses as $course)

        <div class="course">

            <h2>{{ $course->name }}</h2>

            <p>{{ $course->description }}</p>

            <div class="students">
                <strong>Students:</strong>
                {{ $course->students->count() }}
            </div>

        </div>

    @endforeach

</div>

</body>
</html>