<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students=Student::get();
        return view ('students.index', compact('students'));
    }
    public function create()
    {
        return view('students.create');
    }
     public function store(Request $request)
    {
        
        $student= new Student;
        
        $student->first_name=$request->fname;
        $student->last_name=$request->lname;
         $student->username=$request->username;
         $tstudent->email=$request->email;
          $student->password=$request->password;
            $student->confirm_password=$request->cnfrm_password;
        $student->phone=$request->mobile;
         $student->department=$request->department;
         
         $student->save();
         return redirect('student')->with('success','Record Added');
    
    }
    
}
