<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

class ProjectController extends Controller
{
    public function index()
    {
        $students =  Student::all();
        // dd($student);
        //return $student;
        return view('project.index',compact('students'));
    }

}
