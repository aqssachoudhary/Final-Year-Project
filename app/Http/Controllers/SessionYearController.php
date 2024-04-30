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
    $students = User::all();
    return view('session.index', compact('sessions', 'subjects', 'students'));
}


    public function create()
    {
        $students = User::role('student')->get();
        $subjects = Subject::get();
        $sections = Sections::get();
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

    $subjects = $request->input('subject_ids', []);
    foreach ($subjects as $subject) {
        $sessionYearSubject = new SessionYearSubject;
        $sessionYearSubject->session_years_id = $sessionYear->id;
        $sessionYearSubject->subject_id = $subject;
        $sessionYearSubject->save();

    }

    $students = $request->input('student_ids', []);
    foreach ($students as $student) {
        $sessionYearStudent = new SessionYearStudent;
        $sessionYearStudent->session_years_id = $sessionYear->id;
        $sessionYearStudent->student_id = $student;
        $sessionYearStudent->save();
    }

    return redirect('session-year')->with('success', 'Session year has been created successfully');
}

public function edit($id)
{
    $sessionYear = SessionYear::findOrFail($id); 
    $students = User::role('student')->get();
    $sections = Sections::get();
    $subjects = Subject::get();

    // Fetching selected student IDs associated with the session year
    $selected_student_ids = $sessionYear->students->pluck('student_id')->toArray();
    
    // Fetching selected subject IDs associated with the session year
    $selected_subject_ids = $sessionYear->subjects->pluck('subject_id')->toArray();

    return view('session.edit', compact('sessionYear', 'subjects', 'students', 'sections', 'selected_student_ids', 'selected_subject_ids'));
}




 public function update(Request $request, $id)
{
    $validator = $this->validateSessionYear($request->all());

    if ($validator->fails()) {
        return redirect()->back()->with('error', $validator->errors()->first());
    }

    $sessionYear = SessionYear::findOrFail($id);

    $sessionYear->start_date = $request->start_date;
    $sessionYear->end_date = $request->end_date;
    $sessionYear->sections_id = $request->sections_id;
    $sessionYear->save();

 
    $subjects = $request->input('subject_ids', []);
    $sessionYear->subjects()->sync($subjects);

    $students = $request->input('student_ids', []);
    $sessionYear->students()->sync($students);

    return redirect('session-year')->with('success', 'Session year has been updated successfully');
}



public function destroy($id)
{
   
    $sessionYear = SessionYear::findOrFail($id);

 
    $sessionYear->delete();

   
    return redirect('session-year')->with('success', 'Session year has been deleted successfully');
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
