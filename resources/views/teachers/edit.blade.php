@extends('layouts.app')
@section('content')

 <div class="page-wrapper">
  <div class="content container-fluid pb-0">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
        <div class="page-header">
<h3 class="modal-title text-center">Edit Teacher</h3></div>
    <div class="modal-content">
      <div class="modal-body card p-4">
                        <form method="post" action="{{url('teacher/'.$teacher->id)}}" >
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="first_name" value="{{$teacher->first_name}}" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Last Name</label>
                                    <input class="form-control" type="text" name="last_name" value="{{$teacher->last_name}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="username" value="{{$teacher->username}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="email" name="email" value="{{$teacher->email}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Password</label>
                                    <input class="form-control" type="password" name="password" value="{{$teacher->password}}">
                                </div>
                            </div>
                          
                         
                            
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Mobile No </label>
                                    <input class="form-control" type="text" name="mobile" value="{{$teacher->mobile}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Department <span class="text-danger">*</span></label>
                                   <select class="form-select select" name="department_id" aria-label="Default select example" required>
                                       <option selected disabled value="">Department</option>
                                        @foreach ( $departments as $department)
                                        <option  value="{{$department->id}}" @if($department->id==$teacher->department_id) selected @endif>{{$department->name}}</option>
                                      @endforeach
                                   </select>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn" name="submit">Submit</button>
                            </div>
                        </form>
                 </div>
             </div>
         </div>
            
            </div>
        </div>
    </div>
            @endsection