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
                <th>Action</th>
               
             
              </tr>
            </thead>
       
  <tbody>
    @foreach ($classes as $subject)
            <tr>
                <td>{{ $subject->id }}</td> 
               
            <td>{{ $subject->subjectDetail->name }}</td>
            <td class="d-flex">
             <a href="{{ url('view-attendance',$subject->id ) }}" class="btn btn-info btn-sm">View Attendance</a>
              <a href="{{ url('add-attendance',$subject->id ) }}" style="margin-left: 5px;" class="btn btn-success btn-sm text-white">Add Attendance</a>
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