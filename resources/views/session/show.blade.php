@extends('layouts.app') @section('content') <div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="page-title">Session Year</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="admin-dashboard.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Session Year Subjects</li>
          </ul>
        </div>
       
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-striped custom-table mb-0 datatable">
            <thead>
              <tr>
               <th> Id</th>
                <th>Subject</th>
                <th>Teacher</th>
               
             
              </tr>
            </thead>
       
  <tbody>
    @foreach ($subjects as $subject)
            <tr>
                <td>{{ $subject->id }}</td> 
               
            <td>{{ $subject->subjectDetail->name }}</td>
            <td>
              <select class="form-control" style="width: 200px;" onchange="if (this.value) window.location.href='{{url('assign_teacher/'.$subject->id.'/'.$subject->session_years_id.'')}}'+'/'+this.value" style="width: auto;">
                <option value="">select below</option>
                @foreach($teachers as $teacher)
                 <option value="{{ $teacher->id }}" @if($teacher->id==$subject->teacher_id){{ 'selected' }} @endif>{{ $teacher->first_name }} {{ $teacher->last_name }}</option>
                @endforeach
              </select>
            </td>
            


        </tr>
    @endforeach

                   
    
</tbody>




          </table>
        

        </div>
      </div>
    </div>
  </div>
   @endsection