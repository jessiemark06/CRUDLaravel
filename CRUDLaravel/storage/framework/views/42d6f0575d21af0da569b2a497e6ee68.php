<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
      <h1>Student Details</h1>
    <img src="<?php echo e(asset('storage/'.$student->image)); ?> " alt="Student image" width="100">
    <p><strong>First Name:</strong> <?php echo e($student->first_name); ?></p>
    <p><strong>Last Name:</strong> <?php echo e($student->last_name); ?></p>
    <p><strong>Course:</strong> <?php echo e($student->course->course_name); ?></p>
    <p><strong>Year:</strong> <?php echo e($student->year); ?></p>
    <p><strong>Sex:</strong> <?php echo e($student->sex); ?></p>
    <p><strong>Birthdate:</strong> <?php echo e($student->birthdate); ?></p>
    <p><strong>Number:</strong> <?php echo e($student->number); ?></p>
    <p><strong>Address:</strong> <?php echo e($student->address); ?></p>

    <br>

    <a href="/">
        <button type="button">Back</button>
    </a>

</body>
</html><?php /**PATH C:\xampp\htdocs\CRUDLaravel\resources\views/students/view.blade.php ENDPATH**/ ?>