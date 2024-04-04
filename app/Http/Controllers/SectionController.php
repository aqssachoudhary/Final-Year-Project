<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sections;
use App\Models\Classes;

class SectionController extends Controller
{ 
    public function index()
    {
        $sections=Sections::get();
        return view('section.index',compact('sections'));
    }
    public function create()
    {
        $classes=Classes::get();
        return view('section.create',compact('classes'));
    }
public function edit($id)
    {
        $section=Sections::where('id',$id)->first();
        return view('section.edit',compact('section'));
    }
     public function update(Request $request,$id)
    {
        $section=Sections::where('id',$id)->first();
          $section->name=$request->name;
           $section->classes_id=$request->class_id;
          
              $section->status=$request->status;
              $section->save();
        return redirect('subject')->with('success','Record Updated');
        

    }
public function destroy($id)
    {
        $section=Sections::where('id',$id)->first();
                      $subject->delete();
        return redirect('section')->with('success','Record Deleted');
        

    }







    public function store(Request $request)
    {
        
        $section= new Sections;
        

            $section->name=$request->name;
             $section->classes_id=$request->class_id;
              $section->status=$request->status;
              $section->save();
              return redirect('section')->with('success','Record Added');
    }
}
