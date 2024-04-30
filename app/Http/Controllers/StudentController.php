<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Spatie\Permission\Models\Role;
use App\Models\Department;

class StudentController extends Controller
{
    public function index()
    {
        $students=User::role('student')->get();
        return view ('students.index', compact('students'));
    }
    public function create()
    {
         $departments = Department::orderBy('id', 'DESC')->get();
        return view('students.create',compact('departments'));
    }

    public function store(Request $request)
    {
        
        $student= new User;
        
        $student->first_name=$request->first_name;
        $student->last_name=$request->last_name;
         $student->username=$request->username;
         $student->email=$request->email;
          $student->password=Hash::make($request->password);            
        $student->mobile=$request->mobile; 
        $student->address=$request->address; 
         $student->department_id=$request->department_id;       
         $student->save();
          $customerRole = Role::where('name', 'student')->first();
        $student->assignRole($customerRole);
         return redirect('student')->with('success','Record Added');
    
    }

public function edit($id)
    {
        $student=User::where('id',$id)->first();
       $departments = Department::orderBy('id', 'DESC')->get();

        return view('students.edit',compact('departments','student'));
    }
    public function update(Request $request,$id)
    {
        $student=User::where('id',$id)->first();
          $student->first_name=$request->first_name;
          $student->last_name=$request->last_name;
          $student->username=$request->username;
         $student->email=$request->email;
         $student->password=Hash::make($request->password);   
        $student->mobile=$request->mobile;
         $student->address=$request->address;
         $student->department_id=$request->department_id;
         $student->save();
          $customerRole = Role::where('name', 'student')->first();
        $student->assignRole($customerRole);
         return redirect('student')->with('success','Record updated');
    
          
              
           
        

    }
    public function destroy($id)
    {
        $student=User::where('id',$id)->first();
                      $student->delete();
        return redirect('student')->with('success','Record Deleted');
        

    }



    
}
