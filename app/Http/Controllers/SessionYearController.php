<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subjects;
use App\Models\Classes;
use App\Models\Sections;
use App\Models\SessionYear;
use App\Models\SessionYearStudent;
use App\Models\SessionYearSubject;

class SessionYearController extends Controller
{
    public function index()
    {
        return view('session.index');
    }

    public function create(){

         $students=User::role('student')->get();
         $subjects=Subjects::get();
         $sections=Sections::with('classDetail')->get();
        return view('session.create',compact('students','subjects','sections'));
    }

    public function store(Request $request){
         
                     $validator = \Validator::make(
                $request->all(), [
                    'start_date' => 'required',
                    'end_date' => 'required',
                    'sections_id' => 'required',
                ]
            );
            if($validator->fails())
            {
                $messages = $validator->getMessageBag();

                return redirect()->back()->with('error', $messages->first());
            }
        
        return back()->with('success','Session year has been created successfully');
    }
}
