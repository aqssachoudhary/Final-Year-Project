@extends('layouts.app')
@section('content')

 <div class="page-wrapper">
  <div class="content container-fluid pb-0">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
        <div class="page-header">
<h3 class="modal-title text-center">Add Teacher</h3></div>
    <div class="modal-content">
      <div class="modal-body card p-4">
                        <form method="post" action="{{url('teacher')}}" >
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="fname" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Last Name</label>
                                    <input class="form-control" type="text" name="lname" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="username" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Password</label>
                                    <input class="form-control" type="password" name="password" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Confirm Password</label>
                                    <input class="form-control" type="password" name="cnfrm_password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Phone </label>
                                    <input class="form-control" type="text" name="mobile">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Department <span class="text-danger">*</span></label>
                                    <select class="select form-control" name="department" required>
                                        <option>Select Department</option>
                                        <option>Web Development</option>
                                        <option>IT Management</option>
                                        <option>Marketing</option>
                                        
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