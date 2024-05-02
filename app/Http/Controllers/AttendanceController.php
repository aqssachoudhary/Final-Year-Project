<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SessionYear;
use App\Models\SessionYearStudent;
use App\Models\SessionYearSubject;
use Auth;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    
    public function addAttendance($id){
         
        $subject=SessionYearSubject::where('id',$id)->first();
        $students=SessionYearStudent::with('user')->where('session_years_id',$subject->session_years_id)->get();
        return view('attendance.add',compact('students','subject'));
    }

    public function store(Request $request){

       $subject=SessionYearSubject::where('id',$request->session_year_subject_id)->first();
        $students=SessionYearStudent::with('user')->where('session_years_id',$subject->session_years_id)->get();
 $isAdded=Attendance::where('date',date('Y-m-d',strtotime($request->date)))->where('session_year_subject_id',$subject->id)->get();
 if (count($isAdded)) {
     return back()->with('warning','Attendance has already been added');
 }
        foreach($students as $student){
            $attendance=new Attendance();
            $attendance->date=date('Y-m-d',strtotime($request->date));
            $attendance->student_id=$student->student_id;
            $attendance->teacher_id=Auth::id();
            $attendance->session_year_subject_id=$subject->id;
            $attendance->status=(int)$request->get('status'.$student->student_id);
            $attendance->save();
        }

        return redirect('my-classes')->with('success','Attendance has been added.');
    }

    public function viewAttendance($id){
        $dates=Attendance::select('date')->distinct()->where('session_year_subject_id',$id)->get();
        return view('attendance.view',compact('dates','id'));
    }
}
