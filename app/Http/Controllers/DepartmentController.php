<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments=Department::get();
        return view('department.index',compact('departments'));
    }

    public function create()
    {
        return view('department.create');
    }
    public function store(Request $request)
    {
        $department= new Department;
        

            $department->name=$request->department;
              $department->status=$request->status;
              $department->save();
              return redirect('department')->with('success','Record Added');

        
    }
}
