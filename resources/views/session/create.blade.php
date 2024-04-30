@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid pb-0">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Session</h5>
                </div>
                <div class="modal-body card p-4">
                    <form method="post" action="{{ url('session-year') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Start Date <span class="text-danger">*</span></label>
                                    <input class="form-control" type="date" name="start_date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">End Date</label>
                                    <input class="form-control" type="date" name="end_date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Subjects <span class="text-danger">*</span></label>
                                    <select class="select-multiple form-control" name="subject_ids[]" multiple>
                                        @foreach($subjects as $subject)
                                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                           
   <div class="col-md-6">
    <div class="input-block mb-3">
        <label class="col-form-label">Students <span class="text-danger">*</span></label>
        <select class="select-multiple form-control" name="student_ids[]" multiple>
            @foreach($students as $student)
                <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>
            @endforeach
        </select>
        @error('student_ids')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        @foreach($students as $student)
            <input type="hidden" name="selected_student_ids[]" value="{{ $student->id }}">
        @endforeach
    </div>
</div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Section</label>
                                    <select class="form-control" name="sections_id">
                                        @foreach($sections as $section)
                                        <option value="{{ $section->id }}">{{ $section->classDetail->name }} ({{ $section->name }})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
