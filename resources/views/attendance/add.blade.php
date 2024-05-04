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
            <li class="breadcrumb-item active">Add Attendance</li>
          </ul>
        </div>
       
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
               <th> Id</th>
                <th>Student</th>
                <th>Status</th>
               
             
              </tr>
            </thead>
       
  <form action="{{ url('attendance') }}" method="POST">
    @csrf
    <input type="hidden" name="session_year_subject_id" value="{{ $subject->id }}">
    <tbody>
    @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td> 
               
            <td>{{ $student->user->first_name }}</td>
            <td>
             <label>Present <input type="radio" required name="status{{ $student->student_id}}" value="1"></label>
              <label>Absent <input type="radio" required name="status{{ $student->student_id}}" value="0"></label>
            </td>
            


        </tr>
    @endforeach

          
               <tr>
                  <td colspan="2" style="text-align: right;"><input type="date" name="date"></td>
                 <td colspan="1" style="text-align: right;"><button type="submit" class="btn btn-info">Submit</button></td>
               </tr>    
    
</tbody>
  </form>




          </table>
        

        </div>
      </div>
    </div>
  </div>
   @endsection