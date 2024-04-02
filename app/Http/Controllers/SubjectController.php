<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects=Subject::get();
        return view('subject.index',compact('subjects'));
    }
      public function create()
    {
       
        return view('subject.create');
    }
      public function store(Request $request)
    {
        $subject= new Subject;
        $subject->name=$request->name;
          
              $subject->status=$request->status;
              $subject->save();
              return redirect('subject')->with('success','Record Added');

        
    }
}
