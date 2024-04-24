<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subject;
use App\Models\Classes;
use App\Models\Sections;
use App\Models\SessionYear;
use App\Models\SessionYearStudent;
use App\Models\SessionYearSubject;

class SessionYearController extends Controller
{
  public function index()
{
    $sessions = SessionYear::get();
    $subjects = Subject::get();
    $students = User::get();
    return view('session.index', compact('sessions', 'subjects', 'students'));
}


    public function create()
    {
        $students = User::role('student')->get();
        $subjects = Subject::get();
        $sections = Sections::with('classDetail')->get();
        return view('session.create', compact('students', 'subjects', 'sections'));
    }

public function store(Request $request)
{
    $validator = $this->validateSessionYear($request->all());

    if ($validator->fails()) {
        return redirect()->back()->with('error', $validator->errors()->first());
    }

    $sessionYear = new SessionYear;
    $sessionYear->start_date = $request->start_date;
    $sessionYear->end_date = $request->end_date;
    $sessionYear->sections_id = $request->sections_id;
    $sessionYear->save();

    $subjectIds = $request->input('subject_ids', []);
    foreach ($subjectIds as $subjectId) {
        $sessionYearSubject = new SessionYearSubject;
        $sessionYearSubject->session_years_id = $sessionYear->id;
        $sessionYearSubject->subject_id = $subjectId;
        $sessionYearSubject->save();
    }

    $studentIds = $request->input('student_ids', []);
    foreach ($studentIds as $studentId) {
        $sessionYearStudent = new SessionYearStudent;
        $sessionYearStudent->session_years_id = $sessionYear->id;
        $sessionYearStudent->student_id = $studentId;
        $sessionYearStudent->save();
    }

    return redirect('session-year')->with('success', 'Session year has been created successfully');
}




   

    private function validateSessionYear($data)
    {
        return \Validator::make($data, [
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'sections_id' => 'required',
        ]);
    }

    private function validateSessionYearStudent($data)
    {
        return \Validator::make($data, [
            'session_years_id' => 'required',
            'student_id' => 'required',
        ]);
    }

    private function validateSessionYearSubject($data)
    {
        return \Validator::make($data, [
            'session_years_id' => 'required',
            'subjects_id' => 'required',
            'teacher_id' => 'required',
        ]);
    }
}
