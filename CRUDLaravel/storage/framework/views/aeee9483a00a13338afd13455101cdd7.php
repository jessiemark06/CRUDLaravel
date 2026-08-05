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
    <Form action="/student/edit/<?php echo e($student->id); ?>" method="POST">
        <?php echo csrf_field(); ?> 
        <label for="">First Name: </label> 
        <input type="text" name="first_name" value="<?php echo e($student->first_name); ?>"> <br> <br>
         <label for="">Last Name: </label>
        <input type="text" name="last_name"><br> <br>

        <label for="">Course: </label>
        <input type="text" name="course"><br> <br>
         <label for="">Year: </label>
        <input type="text" name="year"><br> <br>

          <label for="">Sex: </label>
        <input type="text" name="sex"><br> <br>
         <label for="">Bithdate: </label>
        <input type="date" name="birthdate"><br> <br>

          <label for="">Number: </label>
        <input type="text" name="number"><br> <br>
         <label for="">Address: </label>
        <input type="text" name="address"><br> <br>

        <button type="submit">Submit</button>
         <a href="/">Back</a>
    </Form>
</body>
</html><?php /**PATH C:\xampp\htdocs\CRUDLaravel\resources\views//students/edit.blade.php ENDPATH**/ ?>