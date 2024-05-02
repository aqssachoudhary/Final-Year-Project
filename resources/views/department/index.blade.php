@extends('layouts.app')
@section('content')
<div class="page-wrapper">
      <div class="content container-fluid">
            <div class="page-header">
                  <div class="row align-items-center">
                        <div class="col">
                              <h3 class="page-title">Departments</h3>
                              <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Departments</li>
                              </ul>
                        </div>
                        <div class="col-auto float-end ms-auto">
                              <a href="{{url('department/create')}}" class="btn add-btn"><i class="fa-solid fa-plus"></i> Add Department</a>
                        </div>
                  </div>
            </div>
          
                  
                 
            </div>
            <div class="row " >
                  <div class="col-md-12">
                        <div class="table-responsive card-body p-5">
                              <table class="table  custom-table datatable leave-employee-table" id="myTable">
                                    <thead class="table-dark">
                                          <tr>
                                                <th>Id</th>
                                                
                                                <th> Department Name</th>
                                                <th>status</th>
                                                <th>Action</th>
                                                
                                          </tr>
                                    </thead>
                                    <tbody>
                                          @foreach($departments as $department)
                                          <tr>
                                                <td>{{$department->id}}</td>
                                              
                                                <td>{{$department->name}}</td>
                                                <td>
                                                      <h2 class="table-avatar">
                                                     
                                                      <a href="#">{{$department->status}}</a>
                                                      </h2>
                                                </td>
                                                
                                                 <td>
                           <a href="{{url('department/'.$department->id.'/edit')}}" class="btn btn-info btn-xs" data-toggle="modal" data-target="#ordine"><i class="fa fa-pencil"></i>
                           </a>
                       
                              <form action="{{ url('department', $department->id) }}" method="POST" id="customer">
                        @csrf
                            @method('DELETE')
 <button type="submit" class="actionBtn mr-1 btn-danger" onclick="return confirm('Are You Sure You Want To Delete?')"><i class="fa fa-trash"></i></button>     


   
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