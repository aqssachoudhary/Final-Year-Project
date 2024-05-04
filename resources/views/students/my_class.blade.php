@extends('layouts.app') @section('content') <div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="page-title">Attendance</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="admin-dashboard.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Attendance Subjects</li>
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
                <th>Total Count</th>
                <th>Presents</th>
              <th>Percentage</th>
                <th>Action</th>
              </tr>
            </thead>
       
  <tbody>
    @foreach ($subjects as $subject)
            <tr>
                <td>{{ $subject->id }}</td> 
               
            <td>{{ $subject->subjectDetail->name }}</td>
              @php
            $total=App\Models\Attendance::where('session_year_subject_id',$subject->id)->where('student_id',Auth::id())->count();
             $present=App\Models\Attendance::where('session_year_subject_id',$subject->id)->where('student_id',Auth::id())->where('student_id',Auth::id())->where('status',1)->count();
            @endphp
            <td>
            {{  $total }}
            </td>
            <td>
            {{  $present }}
            </td>
              <td>
             {{ ($total>0)?$present/$total*100:0 }}%
            </td>
            <td><a href="{{ url('att-detail',$subject->id) }}" class="btn btn-info btn-sm">View detail</a></td>
            


        </tr>
    @endforeach

                   
    
</tbody>




          </table>
        

        </div>
      </div>
    </div>
  </div>
   @endsection