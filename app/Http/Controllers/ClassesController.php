<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;

class ClassesController extends Controller
{
    public function index()
    {
        $classes=Classes::get();
        return view('classes.index',compact('classes'));
    }
     public function create()
    {
        return view('classes.create');
    }

     public function edit($id)
    {
        $class=Classes::where('id',$id)->first();
        return view('classes.edit',compact('class'));
    }

     public function update(Request $request,$id)
    {
        $class=Classes::where('id',$id)->first();
          $class->name=$request->name;
          
              $class->status=$request->status;
              $class->save();
        return redirect('classes')->with('success','Record Updated');
        

    }
    
    public function store(Request $request)
    {
        $classes= new Classes;
        $classes->name=$request->name;
          
              $classes->status=$request->status;
              $classes->save();
              return redirect('classes')->with('success','Record Added');

        
    }
}
