<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form {
        width: 400px;
    }
    label {
        display: inline-block;
        width: 120px;
    }
    input{
        float: right;
    }
</style>
<body>
    <Form action="/student/edit/<?php echo e($student->id); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('PUT'); ?>
        
        <label for="">First Name: </label> 
        <input type="text" name="first_name" value="<?php echo e($student->first_name); ?>"> <br> <br>
         <label for="">Last Name: </label>
        <input type="text" name="last_name" value="<?php echo e($student->last_name); ?>"><br> <br>

        <label for="">Course: </label>
         <select name="course_id" id="">
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <option value="<?php echo e($course->id); ?>">
            <?php echo e($course->course_name); ?>

             </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <br> <br>

         <label for="">Year: </label>
        <input type="text" name="year" value="<?php echo e($student->year); ?>"><br> <br>

          <label for="">Sex: </label>
        <input type="text" name="sex" value="<?php echo e($student->sex); ?>"><br> <br>
         <label for="">Bithdate: </label>
        <input type="date" name="birthdate" value="<?php echo e($student->birthdate); ?>"><br> <br>

          <label for="">Number: </label>
        <input type="text" name="number" value="<?php echo e($student->number); ?>"><br> <br>
         <label for="">Address: </label>
        <input type="text" name="address" value="<?php echo e($student->address); ?>"><br> <br>
        
        <img src="<?php echo e(asset('storage/'.$student->image)); ?> " alt="Student image" width="100">
        <label for="">Select Image:</label>
        <input type="file" name="image">
        <br> <br>

        <button type="submit">Submit</button>
         <a href="/">Back</a>
    </Form>
</body>
</html><?php /**PATH C:\xampp\htdocs\CRUDLaravel\resources\views/students/edit.blade.php ENDPATH**/ ?>