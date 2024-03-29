<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;


class DepartmentController extends Controller
{
    public function index()
    {
        $departments=Department::get();
        return view('sections.index',compact('departments'));
    }

    public function create()
    {$departments=Department::get();
       
        return view('sections.create',compact('departments'));
    }
    public function store(Request $request)
    {
        $department= new Department;
        $department->student_name=$request->name;
          $department->email=$request->email;
          $department->password=$request->password;

            $department->department=$request->department;
              $department->status=$request->status;
              $department->save();
              return redirect('department')->with('success','Record Added');

        
    }
}
