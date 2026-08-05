<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;

class StudentController extends Controller
{
   public function index(){ 

     return response()->json(Students::all());

   }
}
