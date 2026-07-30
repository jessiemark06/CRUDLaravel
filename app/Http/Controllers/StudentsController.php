<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentsController extends Controller
{
   public function home(){
    return view('index');
   }

   public function display(Request $request){
      
      $students = Students::query();

    if ($request->filled('search')) {
        $search = $request->search;

        $students->where(function ($query) use ($search) {
            $query->where('first_name', 'like', '%' . $search . '%')
                  ->orWhere('last_name', 'like', '%' . $search . '%')
                  ->orWhere('course', 'like', '%' . $search . '%');
        });
    }
        
      $students = $students->get();

      return view('index', compact('students'));
   }


   public function add(){
      return view('students/add');
   }

   public function create(Request $request){
      $request->validate([
         'first_name' => 'required|max:50',
         'last_name' => 'required|max:50',
          'course' => 'required|max:50',
         'year' =>'required|integer',
         'sex' => 'required|max:50',
         'birthdate' => 'required|max:50',
         'number' => 'required|integer',
         'address'=> 'required',
      ]);
      Students::create([
         'first_name' => $request->first_name,
         'last_name' => $request->last_name,
         'course' => $request->course,
         'year' => $request->year,
         'sex' => $request->sex,
         'birthdate' => $request->birthdate,
         'number' => $request->number,
         'address'=> $request->address,
      ]);
      return redirect('/');

   }

   public function edit($id){
      
      $student = Students::findorfail($id);

      return view('students.edit', compact('student')); 
   }

   public function update(Request $request, $id){

      $student = Students::findorfail($id);

      $student->fill([
         'first_name' => $request->first_name,
         'last_name' => $request->last_name,
         'course' => $request->course,
         'year' => $request->year,
         'sex' => $request->sex,
         'birthdate' => $request->birthdate,
         'number' => $request->number,
         'address'=> $request->address,
      ]);
     if(!$student->isDirty()){
       return redirect('/')->with('info', "No changes were made.");
     }
     $student->save();

     return redirect('/')->with('success', "Student updated sucessfully!");
   }

   public function delete($id){
      $student = Students::findorfail($id);

      $student->delete();

      return redirect('/');
   }

   public function view($id){

      $student = Students::findorfail($id);
      
      return view('students.view', compact('student'));
   }
}
