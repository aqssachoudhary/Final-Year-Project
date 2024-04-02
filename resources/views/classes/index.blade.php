@extends('layouts.app')
@section('content')
<div class="page-wrapper">
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Daily Classes</h3>
            </div>
            <div class="col-auto float-end ms-auto">
               <a href="{{url('classes/create')}}" class="btn add-btn m-r-5"  data-bs-target="#add_schedule"> Add Classes</a>
            </div>
         </div>
      </div>
      <div class="row ">
         <div class="col-md-12">
            <div class="table-responsive">
               <table class="table table-striped custom-table datatable leave-employee-table">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Classes</th>
                        <th>Status</th>
                        <th>update</th>
                        <th>edit</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($classes as $class)
                     <tr>
                        <td>
                           <h2 class="table-avatar">
                           <a href="profile.html" ></a>
                           <a href="profile.html">{{$class->id}}</a>
                           </h2>
                        </td>
                        <td>
                           <div class="user-add-shedule-list">
                              <h2>
                              <a href="#" data-bs-toggle="modal" data-bs-target="#edit_schedule" >
                                 <span class="username-info m-b-10">{{$class->name}}</span>
                              </a>
                              </h2>
                           </div>
                        </td>
                        <td>
                           <div class="user-add-shedule-list">
                              <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                 <span>{{$class->status}}</span>
                              </a>
                           </div>
                        </td>
                        <td>
                           <a href="{{url('classes/'.$class->id.'/edit')}}" class="btn btn-info btn-xs" data-toggle="modal" data-target="#ordine"><i class="fa fa-pencil"></i>
                           </a>
                        </td>
                        <td>
                           <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ordine"><i class="fa fa-trash"></i> </button>
                           
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

</div>
@endsection