@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid pb-0">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Teachers</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Teachers</li>
                    </ul>
                </div>
                
            </div>
        </div>
         
         <div class="row justify-content-center">
             <div class="col-md-8">
                 <div class="card p-3">
                        <form method="post" action="{{url('teacher')}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="fname">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Last Name</label>
                                    <input class="form-control" type="text" name="lname">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="username">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Password</label>
                                    <input class="form-control" type="password" name="password">
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
                                    <input type="text" class="form-control">
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
                                    <select class="select form-control" name="department">
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