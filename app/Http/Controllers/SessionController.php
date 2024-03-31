<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;

class SessionController extends Controller
{
    public function index()

    {
        $sessions=Session::get();
        return view('session.index',compact('sessions'));
    }

      public function create()
    {
        return view('session.create');
    }

    public function store(Request $request)
    {
         $session= new Session;
        $session->student_name=$request->name;
          $session->department=$request->department;
          $session->start_yaer=$request->start;

            $session->end_year=$request->end;
              $session->status=$request->status;
              $session->save();
              return redirect('session')->with('success','Record Added');
    }
}
