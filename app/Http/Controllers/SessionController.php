<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;
use App\Models\User;
use App\Models\Department;

class SessionController extends Controller
{
    public function index()

    {
        $sessions=Session::get();
        return view('session.index',compact('sessions'));
    }

      public function create()
    {
         $teachers=User::role('Teacher')->get();
          $departments=Department::get('department');

        return view('session.create',compact('teachers','departments'));
    }

    public function store(Request $request)
    {
         $session= new Session;
        $session->teacher_id=$request->name;
          $session->department=$request->department;
          $session->start_year=$request->start;

            $session->end_year=$request->end;
              $session->status=$request->status;
              $session->save();
              return redirect('session')->with('success','Record Added');
    }
}
