<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
use Hash;
use Spatie\Permission\Models\Role;
use App\Models\SessionYear;
use App\Models\SessionYearStudent;
use App\Models\SessionYearSubject;
use Auth;

class TeacherController extends Controller
{
    public function index()

    { $teachers=User::role('Teacher')->get();
        return view('teachers.index',compact('teachers'));
    }
    public function create()
    {
        $departments=Department::orderBy('id', 'DESC')->get();
        return view('teachers.create',compact('departments'));
    }
public function edit($id)
    {
        $teacher=User::where('id',$id)->first();
        $departments=Department::orderBy('id', 'DESC')->get();
        return view('teachers.edit',compact('teacher','departments'));
    }
 public function update(Request $request,$id)
    {
        $teacher=User::where('id',$id)->first();
          $teacher->first_name=$request->first_name;
              $teacher->last_name=$request->last_name;
          $teacher->username=$request->username;
              $teacher->email=$request->email;
          $teacher->password=Hash::make($request->password);
        $teacher->mobile=$request->mobile;
        $teacher->address=$request->address;
         $teacher->department_id=$request->department_id;
            $teacher->save();
        return redirect('teacher')->with('success','Record Updated');
        

    }
public function destroy($id)
    {
        $teacher=User::where('id',$id)->first();
                      $teacher->delete();
        return redirect('teacher')->with('success','Record Deleted');
        

    }

    public function store(Request $request)
    {
        
        $teacher= new User;
        
        $teacher->first_name=$request->first_name;
        $teacher->last_name=$request->last_name;
        $teacher->username=$request->username;
         $teacher->email=$request->email;
          $teacher->password=Hash::make($request->password);
        $teacher->mobile=$request->mobile;
         $teacher->address=$request->address;
         $teacher->department_id=$request->department_id;
         
         $teacher->save();

          $customerRole = Role::where('name', 'Teacher')->first();
        $teacher->assignRole($customerRole);
         return redirect('teacher')->with('success','Record Added');
    
    }

    public function myClasses(){
         $classes=SessionYearSubject::where('teacher_id',Auth::id())->get();
         return view('teachers.my_classes',compact('classes'));
    }
   
}
