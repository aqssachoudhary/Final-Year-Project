@extends('layouts.app') @section('content') <div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="page-title">Attendance View</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="admin-dashboard.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Attendance View By Date</li>
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
                <th>Date</th>
                 <th>Day</th>
                <th>Total</th>
               <th>Present</th>
             <th>Pres. Percentage</th>
              </tr>
            </thead>
       
  <tbody>
    @foreach ($dates as $date)
            <tr>
                <td>{{ 1 }}</td> 
               
            <td>{{ $date->date }}</td>
             <td>{{ date('D',strtotime($date->date)) }}</td>
            @php
            $total=App\Models\Attendance::where('date',$date->date)->where('session_year_subject_id',$id)->count();
             $present=App\Models\Attendance::where('date',$date->date)->where('session_year_subject_id',$id)->where('status',1)->count();
            @endphp
            <td>
             {{ $total }}
            </td>
             <td>
             {{ $present }}
            </td>
             <td>
              {{ ($total>0)?$present/$total*100:0 }}%
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