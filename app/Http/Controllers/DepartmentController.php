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
        

            $department->name=$request->name;
              $department->status=$request->status;
              $department->save();
              return redirect('department')->with('success','Record Added');

        
    }

    
public function edit($id)
    {
        $department=Department::where('id',$id)->first();
        return view('department.edit',compact('department'));
    }
 public function update(Request $request,$id)
    {
        $department=Department::where('id',$id)->first();
          $department->name=$request->name;
          
              $department->status=$request->status;
              $department->save();
        return redirect('department')->with('success','Record Updated');
        

    }
    public function destroy($id)
    {
        $department=Department::where('id',$id)->first();
                      $department->delete();
        return redirect('department')->with('success','Record Deleted');
        

    }





    
}
