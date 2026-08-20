<!DOCTYPE html>
<html>
<head>
    <title>Students</title>

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

        .student {
            background: white;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .student h2 {
            margin-top: 0;
        }

        .course {
            color: #555;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Students</h1>

    @foreach ($students as $student)

        <div class="student">

            <h2>{{ $student->name }}</h2>

            <p>Email: {{ $student->email }}</p>

            <p>Phone: {{ $student->phone }}</p>

            <div class="course">
                <strong>Course:</strong>
                {{ $student->course->name }}
            </div>

        </div>

    @endforeach

</div>

</body>
</html>