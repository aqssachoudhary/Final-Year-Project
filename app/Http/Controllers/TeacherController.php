<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()

    { $teachers=Teacher::get();
        return view('teachers.index',compact('teachers'));
    }
    public function create()
    {
        return view('teachers.create');
    }
    public function store(Request $request)
    {
        
        $teacher= new Teacher;
        
        $teacher->first_name=$request->fname;
        $teacher->last_name=$request->lname;
         $teacher->username=$request->lname;
         $teacher->email=$request->email;
          $teacher->password=$request->password;
            $teacher->confirm_password=$request->cnfrm_password;
        $teacher->phone=$request->mobile;
         $teacher->department=$request->department;
         
         $teacher->save();
         return redirect('teacher')->with('success','Record Added');
    
    }
   
}
