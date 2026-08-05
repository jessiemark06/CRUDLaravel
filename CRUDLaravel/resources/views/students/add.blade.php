<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
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
    select{
         float: right;
    }
</style>

<body>
 
    <Form action="/student/create" method="POST" enctype="multipart/form-data">
        @csrf 
        
        <h1>Add Student</h1>
        <label for="">First Name: </label> 
        <input type="text" name="first_name">   
        @error('first_name')
        <p>{{$message}}</p>
        @enderror
        <br> <br>
      
       
        <label for="">Last Name: </label>
        <input type="text" name="last_name">
        @error('last_name')
        <p>{{$message}}</p>
        @enderror
        <br> <br>

        <label for="">Course: </label>
        <select name="course_id" id="">
            @foreach($courses as $course)
             <option value="{{ $course->id }}">
            {{ $course->course_name }}
             </option>
            @endforeach
        </select>

        @error('course_id')
        <p>{{$message}}</p>
        @enderror
        <br> <br>

         <label for="">Year: </label>
        <input type="text" name="year">
        @error('year')
        <p>{{$message}}</p>
        @enderror
        <br> <br>

          <label for="">Sex: </label>
        <input type="text" name="sex">
        @error('last_name')
        <p>{{$message}}</p>
        @enderror
        <br> <br>

         <label for="">Bithdate: </label>
        <input type="date" name="birthdate">
        @error('birthdate')
        <p>{{$message}}</p>
        @enderror
        <br> <br>

          <label for="">Number: </label>
        <input type="text" name="number">
        @error('number')
        <p>{{$message}}</p>
        @enderror
        <br> <br>

         <label for="">Address: </label>
        <input type="text" name="address">
        @error('address')
        <p>{{$message}}</p>
        @enderror
        <br> <br>

        <label for="">Select Image:</label>
        <input type="file" name="image">
        <br> <br>

        <button type="submit">Submit</button>
         <a href="/">Back</a>
    </Form>
</body>
</html>