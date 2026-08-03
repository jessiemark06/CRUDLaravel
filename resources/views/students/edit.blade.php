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
    <Form action="/student/edit/{{ $student->id }}" method="POST">
        @csrf 
        @method('PUT')
        
        <label for="">First Name: </label> 
        <input type="text" name="first_name" value="{{$student->first_name}}"> <br> <br>
         <label for="">Last Name: </label>
        <input type="text" name="last_name" value="{{$student->last_name}}"><br> <br>

        <label for="">Course: </label>
         <select name="course_id" id="">
            @foreach($courses as $course)
             <option value="{{ $course->id }}">
            {{ $course->course_name }}
             </option>
            @endforeach
        </select>
        <br> <br>

         <label for="">Year: </label>
        <input type="text" name="year" value="{{$student->year}}"><br> <br>

          <label for="">Sex: </label>
        <input type="text" name="sex" value="{{$student->sex}}"><br> <br>
         <label for="">Bithdate: </label>
        <input type="date" name="birthdate" value="{{$student->birthdate}}"><br> <br>

          <label for="">Number: </label>
        <input type="text" name="number" value="{{$student->number}}"><br> <br>
         <label for="">Address: </label>
        <input type="text" name="address" value="{{$student->address}}"><br> <br>

        <button type="submit">Submit</button>
         <a href="/">Back</a>
    </Form>
</body>
</html>