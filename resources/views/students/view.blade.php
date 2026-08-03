<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
      <h1>Student Details</h1>
    <img src="{{ asset('storage/'.$student->image)}} " alt="Student image" width="100">
    <p><strong>First Name:</strong> {{ $student->first_name }}</p>
    <p><strong>Last Name:</strong> {{ $student->last_name }}</p>
    <p><strong>Course:</strong> {{ $student->course->course_name }}</p>
    <p><strong>Year:</strong> {{ $student->year }}</p>
    <p><strong>Sex:</strong> {{ $student->sex }}</p>
    <p><strong>Birthdate:</strong> {{ $student->birthdate }}</p>
    <p><strong>Number:</strong> {{ $student->number }}</p>
    <p><strong>Address:</strong> {{ $student->address }}</p>

    <br>

    <a href="/">
        <button type="button">Back</button>
    </a>

</body>
</html>