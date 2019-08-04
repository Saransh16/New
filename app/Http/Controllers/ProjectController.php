<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;
use App\Course;


class ProjectController extends Controller
{
    public function index()
    {
        $students =  Student::orderBy('id','desc')->paginate(5);
        // dd($student);
        //return $student;
        return view('project.index',compact('students'));
    }

    public function create()
    {
        return view('project.create');
    }

    public function store()
    {
        request()->validate(
            [
                'firstname' => ['required','alpha','min:4','max:255'],
                'lastname' => ['required','alpha','min:5','max:255'],
                'email' => ['required','max:255','email','unique:students,email'],
                'contact' => ['required','min:10','max:10'],
                'dob' => ['required','date_format:Y-m-d'],
                'course_name' => ['required']
            ]);

        $course_ids=request()-> get('course_name');
        $student = new Student();
        $student->firstname = request('firstname');
        $student->lastname = request('lastname');
        $student->email = request('email');
        $student->contact = request('contact');
        $student->dob = request('dob');
               
        $student->save();

        $student->courses()->attach($course_ids);

        return redirect('/projects');
    }

    public function show($id)
    {    
        
        //dd("here");
        $student = \App\Student::with('courses')->findorFail($id);
        // dd($student->courses);
        return view('project.show',compact('student'));
        //dd("Here");
    }


    public function edit($id)
    {   
        $courses =  Course::all();
        $student = \App\Student::with('courses')->findorFail($id);        

        return view('project.edit',compact('student','courses'));

        //dd("here");
    }

    public function update($id)
    {
        // dd();
        request()->validate(
            [
                'firstname' => ['required','alpha','min:4','max:255'],
                'lastname' => ['required','alpha','min:5','max:255'],
                'email' => ['required','max:255','email','unique:students,email'],
                'contact' => ['required','min:10','max:10'],
                'dob' => ['required','date_format:Y-m-d'],
                'course_name[]' => ['required']
            ]);
        $student = \App\Student::findorFail($id);
        $course = new Course();
        $course_ids=request()->get('course_name');
        $student->firstname = request('firstname');
        $student->lastname = request('lastname');
        $student->contact = request('contact');
        $student->dob = request('dob');
        $student->courses()->sync($course_ids);
        $student->save();

        return redirect('/projects');
        // dd("Here");
    }

    public function remove($id)
    {
        $courses =  Course::all();
        $student = \App\Student::findorFail($id);
        
        return view('project.remove',compact('student','courses'));

        //dd("Here");
    }

    public function destroy($id)
    {   
        
        // $course_ids=request()->get('course_name'); 
        $student = \App\Student::findorFail($id);
        $student->courses()->detach();
        $student->delete();
        
        return redirect('/projects');
    }
    
}
