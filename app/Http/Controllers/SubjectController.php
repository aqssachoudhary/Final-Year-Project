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
  public function edit($id)
    {
        $subject=Subject::where('id',$id)->first();
        return view('subject.edit',compact('subject'));
    }
     public function update(Request $request,$id)
    {
        $subject=Subject::where('id',$id)->first();
          $subject->name=$request->name;
          
              $subject->status=$request->status;
              $subject->save();
        return redirect('subject')->with('success','Record Updated');
        

    }
public function destroy($id)
    {
        $subject=Subject::where('id',$id)->first();
                      $subject->delete();
        return redirect('subject')->with('success','Record Deleted');
        

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
