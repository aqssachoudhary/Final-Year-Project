<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendance;

class AttendanceController extends Controller
{
	public function index()
{
	$attendencs=Attendance::get();
   return view('attendance.index',compact('attendencs'));
}
public function create()
{
	 $teachers=User::role('Teacher')->get();
	 $students=User::role('student')->get();
   return view('attendance.create',compact('teachers','students'));
}
public function store(Request $request)
{
        
        $attendance= new Attendance;
        
        $attendance->teacher_id=$request->teacher;
        $attendance->student_id=$request->student;
         $attendance->status=$request->status;
         $attendance->punch_in=$request->in;
         $attendance->punch_out=$request->out;
         $attendance->date=$request->date;
        
        
         
         $attendance->save();
         return redirect('attendance')->with('success','Record Added');
    
    }

   
}
