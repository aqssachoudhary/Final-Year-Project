<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Spatie\Permission\Models\Role;

class TeacherController extends Controller
{
    public function index()

    { $teachers=User::role('Teacher')->get();
        return view('teachers.index',compact('teachers'));
    }
    public function create()
    {
        return view('teachers.create');
    }
    public function store(Request $request)
    {
        
        $teacher= new User;
        
        $teacher->first_name=$request->fname;
        $teacher->last_name=$request->lname;
         $teacher->email=$request->email;
          $teacher->password=Hash::make($request->password);
        $teacher->phone=$request->mobile;
         $teacher->department_id=(int)$request->department;
         
         $teacher->save();

          $customerRole = Role::where('name', 'Teacher')->first();
        $teacher->assignRole($customerRole);
         return redirect('teacher')->with('success','Record Added');
    
    }
   
}
