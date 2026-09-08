<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list()
    {
        return Student::all();
    }
    function addStudent(Request $request){
    $student = Student::create($request->only(['name', 'email', 'roll_number']));
    return response()->json($student, 201);
    }


}
