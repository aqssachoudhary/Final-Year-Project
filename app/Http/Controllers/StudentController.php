<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Spatie\Permission\Models\Role;

class StudentController extends Controller
{
    public function index()
    {
        $students=User::role('student')->get();
        return view ('students.index', compact('students'));
    }
    public function create()
    {
        return view('students.create');
    }
     public function store(Request $request)
    {
        
        $student= new User;
        
        $student->first_name=$request->fname;
        $student->last_name=$request->lname;
         $student->email=$request->email;
          $student->password=Hash::make($request->password);
            
        $student->phone=$request->mobile;
        
         
         $student->save();
          $customerRole = Role::where('name', 'student')->first();
        $student->assignRole($customerRole);
         return redirect('student')->with('success','Record Added');
    
    }
    
}
