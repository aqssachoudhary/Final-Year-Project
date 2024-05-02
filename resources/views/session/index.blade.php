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
            <li class="breadcrumb-item active">Session Year</li>
          </ul>
        </div>
        <div class="col-auto float-end ms-auto">
          <a href="{{url('session-year/create')}}" class="btn add-btn">
            <i class="fa-solid fa-plus"></i> Add Session </a>
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
                <th>Student Id</th>
                <th>Start Year</th>
                <th>End Year</th>
                <th>Action</th>
             
              </tr>
            </thead>
       
  <tbody>
    @foreach ($sessions as $session)
            <tr>
                <td>{{ $session->id }}</td> 
                <td>
               @php
    $studentNames = [];
    foreach ($session->students as $student) {
        // Check if $student->user is not null before accessing its properties
        if ($student->user) {
            $studentNames[] = $student->user->first_name . ' ' . $student->user->last_name;
        }
    }
    echo implode(', ', $studentNames);
@endphp

               
            </td>
            <td>{{ $session->start_date }}</td>
            <td>{{ $session->end_date }}</td>


<td class="d-flex">
                           <a href="{{url('session-year/'.$session->id.'/edit')}}" class="btn btn-info btn-sm " data-toggle="modal" data-target="#ordine">Edit
                           </a>
                       
                          
                                                   <form action="{{ url('session-year', $session->id) }}" method="POST" id="customer">
                        @csrf
                            @method('DELETE')
 <button type="submit" class="actionBtn mr-1 btn btn-danger btn-sm " style="margin-left: 2px;" onclick="return confirm('Are You Sure You Want To Delete?')">Delete</button>     
 <a href="{{url('session-year/'.$session->id.'/show')}}" class="btn btn-success btn-sm text-white " data-toggle="modal" data-target="#ordine">Teachers
                           </a>

   
                        </form>
                           
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