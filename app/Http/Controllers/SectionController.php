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
    public function store(Request $request)
    {
        
        $section= new Sections;
        

            $section->name=$request->name;
             $section->classes_id=$request->id;
              $section->status=$request->status;
              $section->save();
              return redirect('section')->with('success','Record Added');
    }
}