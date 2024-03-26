@extends('layouts.app')

@section('content')
<div class="page-wrapper">

<div class="content container-fluid pb-0">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Employee</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
<li class="breadcrumb-item active">Employee</li>
</ul>
</div>
<div class="col-auto float-end ms-auto">
<a href="{{url('teacher/create')}}" class="btn add-btn" ><i class="fa-solid fa-plus"></i> Add teacher</a>



</div>
<div class="col-sm-6 col-md-3">
<div class="d-grid">
<a href="#" class="btn btn-success w-100"> Search </a>
</div>
</div>
</div>
@foreach ($teachers as $teacher)

<div class="row staff-grid-row">
<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
<div class="profile-widget">
<div class="profile-img">
<a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
</div>
<div class="dropdown profile-action">
<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
</div>
</div>
<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile.html">{{$teacher->first_name}}</a></h4>
<div class="small text-muted">{{$teacher->department}}</div>
</div>
</div></div>
 @endforeach

<div id="add_employee" class="modal custom-modal fade" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Employee</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form method="post" >
	@csrf
<div class="row">
<div class="col-sm-6">
<div class="input-block mb-3">
<label class="col-form-label">First Name <span class="text-danger">*</span></label>
<input class="form-control" type="text" >
</div>
</div>
<div class="col-sm-6">
<div class="input-block mb-3">
<label class="col-form-label">Last Name</label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="input-block mb-3">
<label class="col-form-label">Username <span class="text-danger">*</span></label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="input-block mb-3">
<label class="col-form-label">Email <span class="text-danger">*</span></label>
<input class="form-control" type="email">
</div>
</div>
<div class="col-sm-6">
<div class="input-block mb-3">
<label class="col-form-label">Password</label>
<input class="form-control" type="password">
</div>
</div>
<div class="col-sm-6">
<div class="input-block mb-3">
<label class="col-form-label">Confirm Password</label>
<input class="form-control" type="password">
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
<label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
</div>
</div>
<div class="col-sm-6">
<div class="input-block mb-3">
<label class="col-form-label">Phone </label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="input-block mb-3">
<label class="col-form-label">Company</label>
<select class="select">
<option value>Global Technologies</option>
<option value="1">Delta Infotech</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="input-block mb-3">
<label class="col-form-label">Department <span class="text-danger">*</span></label>
<select class="select">
<option>Select Department</option>
<option>Web Development</option>
<option>IT Management</option>
<option>Marketing</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="input-block mb-3">
<label class="col-form-label">Designation <span class="text-danger">*</span></label>
<select class="select">
<option>Select Designation</option>
<option>Web Designer</option>
<option>Web Developer</option>
<option>Android Developer</option>
</select>
</div>
</div>
</div>
<div class="table-responsive m-t-15">
<table class="table table-striped custom-table">
<thead>
<tr>
<th>Module Permission</th>
<th class="text-center">Read</th>
<th class="text-center">Write</th>
<th class="text-center">Create</th>
<th class="text-center">Delete</th>
<th class="text-center">Import</th>
<th class="text-center">Export</th>
</tr>
</thead>
<tbody>
<tr>
<td>Holidays</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
</tr>
<tr>
<td>Leaves</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
</tr>
<tr>
<td>Clients</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
</tr>
<tr>
<td>Projects</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
</tr>
<tr>
<td>Tasks</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
</tr>
<tr>
<td>Chats</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
</tr>
<tr>
<td>Assets</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
</tr>
<tr>
<td>Timing Sheets</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
</tr>
</tbody>
</table>
</div>
<div class="submit-section">
<button class="btn btn-primary submit-btn">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>


<div id="edit_employee" class="modal custom-modal fade" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Edit Employee</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form>
<div class="row">
<div class="col-sm-6">
<div class="input-block mb-3">
<label class="col-form-label">First Name <span class="text-danger">*</span></label>
<input class="form-control" value="John" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="input-block mb-3">
<label class="col-form-label">Last Name</label>
<input class="form-control" value="Doe" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="input-block mb-3">
<label class="col-form-label">Username <span class="text-danger">*</span></label>
<input class="form-control" value="johndoe" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="input-block mb-3">
<label class="col-form-label">Email <span class="text-danger">*</span></label>
<input class="form-control" value="johndoe@example.com" type="email">
</div>
</div>
<div class="col-sm-6">
<div class="input-block mb-3">
<label class="col-form-label">Password</label>
<input class="form-control" value="johndoe" type="password">
</div>
</div>
<div class="col-sm-6">
<div class="input-block mb-3">
<label class="col-form-label">Confirm Password</label>
<input class="form-control" value="johndoe" type="password">
</div>
</div>
<div class="col-sm-6">
<div class="input-block mb-3">
<label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
<input type="text" value="FT-0001" readonly class="form-control floating">
</div>
</div>
<div class="col-sm-6">
<div class="input-block mb-3">
<label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
</div>
</div>
<div class="col-sm-6">
<div class="input-block mb-3">
<label class="col-form-label">Phone </label>
<input class="form-control" value="9876543210" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="input-block mb-3">
<label class="col-form-label">Company</label>
<select class="select">
<option>Global Technologies</option>
<option>Delta Infotech</option>
<option selected>International Software Inc</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="input-block mb-3">
<label class="col-form-label">Department <span class="text-danger">*</span></label>
<select class="select">
<option>Select Department</option>
<option>Web Development</option>
<option>IT Management</option>
<option>Marketing</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="input-block mb-3">
<label class="col-form-label">Designation <span class="text-danger">*</span></label>
<select class="select">
<option>Select Designation</option>
<option>Web Designer</option>
<option>Web Developer</option>
<option>Android Developer</option>
</select>
</div>
</div>
</div>
<div class="table-responsive m-t-15">
<table class="table table-striped custom-table">
<thead>
<tr>
<th>Module Permission</th>
<th class="text-center">Read</th>
<th class="text-center">Write</th>
<th class="text-center">Create</th>
<th class="text-center">Delete</th>
<th class="text-center">Import</th>
<th class="text-center">Export</th>
</tr>
</thead>
<tbody>
<tr>
<td>Holidays</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
</tr>
<tr>
<td>Leaves</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
</tr>
<tr>
<td>Clients</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
</tr>
<tr>
<td>Projects</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
</tr>
<tr>
<td>Tasks</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
</tr>
<tr>
<td>Chats</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
</tr>
<tr>
<td>Assets</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
</tr>
<tr>
<td>Timing Sheets</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
<td class="text-center">
<label class="custom_check">
<input type="checkbox" name="rememberme" class="rememberme">
<span class="checkmark"></span>
</label>
</td>
</tr>
</tbody>
</table>
</div>
<div class="submit-section">
<button class="btn btn-primary submit-btn">Save</button>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="modal custom-modal fade" id="delete_employee" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-body">
<div class="form-header">
<h3>Delete Employee</h3>
<p>Are you sure want to delete?</p>
</div>
<div class="modal-btn delete-action">
<div class="row">
<div class="col-6">
<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
</div>
<div class="col-6">
<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

</div>

<div class="settings-icon">
<span data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas"><i class="las la-cog"></i></span>
</div>
<div class="offcanvas offcanvas-end border-0 " tabindex="-1" id="theme-settings-offcanvas">
<div class="sidebar-headerset">
<div class="sidebar-headersets">
<h2>Customizer</h2>
<h3>Customize your overview Page layout</h3>
</div>
<div class="sidebar-headerclose">
<a data-bs-dismiss="offcanvas" aria-label="Close"><img src="assets/img/close.png" alt="Close Icon"></a>
</div>
</div>
<div class="offcanvas-body p-0">
<div data-simplebar class="h-100">
<div class="settings-mains">
<div class="layout-head">
<h5>Layout</h5>
<h6>Choose your layout</h6>
</div>
<div class="row">
<div class="col-4">
<div class="form-check card-radio p-0">
<input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
<label class="form-check-label avatar-md w-100" for="customizer-layout01">
<img src="assets/img/vertical.png" alt="Layout Image">
</label>
</div>
<h5 class="fs-13 text-center mt-2">Vertical</h5>
</div>
<div class="col-4">
<div class="form-check card-radio p-0">
<input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
<label class="form-check-label  avatar-md w-100" for="customizer-layout02">
<img src="assets/img/horizontal.png" alt="Layout Image">
</label>
</div>
<h5 class="fs-13 text-center mt-2">Horizontal</h5>
</div>
<div class="col-4">
<div class="form-check card-radio p-0">
<input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input">
<label class="form-check-label  avatar-md w-100" for="customizer-layout03">
<img src="assets/img/two-col.png" alt="Layout Image">
</label>
</div>
<h5 class="fs-13 text-center mt-2">Two Column</h5>
</div>
</div>
<div class="layout-head pt-3">
<h5>Color Scheme</h5>
<h6>Choose Light or Dark Scheme.</h6>
</div>
<div class="colorscheme-cardradio">
<div class="row">
<div class="col-4">
<div class="form-check card-radio p-0">
<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-orange" value="orange">
<label class="form-check-label  avatar-md w-100 " for="layout-mode-orange">
<img src="assets/img/vertical.png" alt="Layout Image">
</label>
</div>
<h5 class="fs-13 text-center mt-2">Orange</h5>
</div>
<div class="col-4">
<div class="form-check card-radio p-0">
<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-light" value="light">
<label class="form-check-label  avatar-md w-100" for="layout-mode-light">
<img src="assets/img/vertical.png" alt="Layout Image">
</label>
</div>
<h5 class="fs-13 text-center mt-2">Light</h5>
</div>
<div class="col-4">
<div class="form-check card-radio dark  p-0 ">
<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-dark" value="dark">
<label class="form-check-label avatar-md w-100 " for="layout-mode-dark">
<img src="assets/img/vertical.png" alt="Layout Image">
</label>
</div>
<h5 class="fs-13 text-center mt-2">Dark</h5>
</div>
<div class="col-4">
<div class="form-check card-radio blue  p-0 ">
<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-blue" value="blue">
<label class="form-check-label  avatar-md w-100" for="layout-mode-blue">
<img src="assets/img/vertical.png" alt="Layout Image">
</label>
</div>
<h5 class="fs-13 text-center mt-2">Blue</h5>
</div>
<div class="col-4">
<div class="form-check card-radio maroon p-0">
<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-maroon" value="maroon">
<label class="form-check-label  avatar-md w-100 " for="layout-mode-maroon">
<img src="assets/img/vertical.png" alt="Layout Image">
</label>
</div>
<h5 class="fs-13 text-center mt-2">Maroon</h5>
</div>
<div class="col-4">
<div class="form-check card-radio purple p-0">
<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-purple" value="purple">
<label class="form-check-label  avatar-md w-100 " for="layout-mode-purple">
<img src="assets/img/vertical.png" alt="Layout Image">
</label>
</div>
<h5 class="fs-13 text-center mt-2">Purple</h5>
</div>
</div>
</div>
<div id="layout-width">
<div class="layout-head pt-3">
<h5>Layout Width</h5>
<h6>Choose Fluid or Boxed layout.</h6>
</div>
<div class="row">
<div class="col-4">
<div class="form-check card-radio p-0">
<input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
<label class="form-check-label avatar-md w-100" for="layout-width-fluid">
<img src="assets/img/vertical.png" alt="Layout Image">
</label>
</div>
<h5 class="fs-13 text-center mt-2">Fluid</h5>
</div>
<div class="col-4">
<div class="form-check card-radio p-0 ">
<input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
<label class="form-check-label avatar-md w-100 px-2" for="layout-width-boxed">
<img src="assets/img/boxed.png" alt="Layout Image">
</label>
</div>
<h5 class="fs-13 text-center mt-2">Boxed</h5>
</div>
</div>
</div>
<div id="layout-position">
<div class="layout-head pt-3">
<h5>Layout Position</h5>
<h6>Choose Fixed or Scrollable Layout Position.</h6>
</div>
<div class="btn-group bor-rad-50 overflow-hidden radio" role="group">
<input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
<label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>
<input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
<label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
</div>
</div>
<div class="layout-head pt-3">
<h5>Topbar Color</h5>
<h6>Choose Light or Dark Topbar Color.</h6>
</div>
<div class="row">
<div class="col-4">
<div class="form-check card-radio  p-0">
<input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">
<label class="form-check-label avatar-md w-100" for="topbar-color-light">
<img src="assets/img/vertical.png" alt="Layout Image">
</label>
</div>
<h5 class="fs-13 text-center mt-2">Light</h5>
</div>
<div class="col-4">
<div class="form-check card-radio p-0">
<input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">
<label class="form-check-label  avatar-md w-100" for="topbar-color-dark">
<img src="assets/img/dark.png" alt="Layout Image">
</label>
</div>
<h5 class="fs-13 text-center mt-2">Dark</h5>
</div>
</div>
<div id="sidebar-size">
<div class="layout-head pt-3">
<h5>Sidebar Size</h5>
<h6>Choose a size of Sidebar.</h6>
</div>
<div class="row">
<div class="col-4">
<div class="form-check sidebar-setting card-radio  p-0 ">
<input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
<label class="form-check-label avatar-md w-100" for="sidebar-size-default">
<img src="assets/img/vertical.png" alt="Layout Image">
</label>
</div>
<h5 class="fs-13 text-center mt-2">Default</h5>
</div>
<div class="col-4">
<div class="form-check sidebar-setting card-radio p-0">
<input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
<label class="form-check-label  avatar-md w-100" for="sidebar-size-compact">
<img src="assets/img/compact.png" alt="Layout Image">
</label>
</div>
<h5 class="fs-13 text-center mt-2">Compact</h5>
</div>
<div class="col-4">
<div class="form-check sidebar-setting card-radio p-0 ">
<input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">
<label class="form-check-label avatar-md w-100" for="sidebar-size-small-hover">
<img src="assets/img/small-hover.png" alt="Layout Image">
</label>
</div>
<h5 class="fs-13 text-center mt-2">Small Hover View</h5>
</div>
</div>
</div>
<div id="sidebar-view">
<div class="layout-head pt-3">
<h5>Sidebar View</h5>
<h6>Choose Default or Detached Sidebar view.</h6>
</div>
<div class="row">
<div class="col-4">
<div class="form-check sidebar-setting card-radio  p-0">
<input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">
<label class="form-check-label avatar-md w-100" for="sidebar-view-default">
<img src="assets/img/compact.png" alt="Layout Image">
</label>
</div>
<h5 class="fs-13 text-center mt-2">Default</h5>
</div>
<div class="col-4">
<div class="form-check sidebar-setting card-radio p-0">
<input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">
<label class="form-check-label  avatar-md w-100" for="sidebar-view-detached">
<img src="assets/img/detached.png" alt="Layout Image">
</label>
</div>
<h5 class="fs-13 text-center mt-2">Detached</h5>
</div>
</div>
</div>
<div id="sidebar-color">
<div class="layout-head pt-3">
<h5>Sidebar Color</h5>
<h6>Choose a color of Sidebar.</h6>
</div>
<div class="row">
<div class="col-4">
<div class="form-check sidebar-setting card-radio p-0" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">
<label class="form-check-label  avatar-md w-100" for="sidebar-color-light">
<span class="bg-light bg-sidebarcolor"></span>
</label>
</div>
<h5 class="fs-13 text-center mt-2">Light</h5>
</div>
<div class="col-4">
<div class="form-check sidebar-setting card-radio p-0" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">
<label class="form-check-label  avatar-md w-100" for="sidebar-color-dark">
<span class="bg-darks bg-sidebarcolor"></span>
</label>
</div>
<h5 class="fs-13 text-center mt-2">Dark</h5>
</div>
<div class="col-4">
<div class="form-check sidebar-setting card-radio p-0">
<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient">
<label class="form-check-label avatar-md w-100" for="sidebar-color-gradient">
<span class="bg-gradients bg-sidebarcolor"></span>
</label>
</div>
<h5 class="fs-13 text-center mt-2">Gradient</h5>
</div>
<div class="col-4 d-none">
<button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient">
<span class="d-flex gap-1 h-100">
<span class="flex-shrink-0">
<span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
<span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
</span>
</span>
<span class="flex-grow-1">
<span class="d-flex h-100 flex-column">
<span class="bg-light d-block p-1"></span>
<span class="bg-light d-block p-1 mt-auto"></span>
</span>
</span>
</span>
</button>
<h5 class="fs-13 text-center mt-2">Gradient</h5>
</div>
</div>
<div class="collapse d-none" id="collapseBgGradient">
<div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">
<div class="form-check sidebar-setting card-radio">
<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-1" value="gradient">
<label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient">
<span class="avatar-title rounded-circle bg-vertical-gradient"></span>
</label>
</div>
<div class="form-check sidebar-setting card-radio">
<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2">
<label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2">
<span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
</label>
</div>
<div class="form-check sidebar-setting card-radio">
<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3">
<label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3">
<span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
</label>
</div>
<div class="form-check sidebar-setting card-radio">
<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4">
<label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4">
<span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
</label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="offcanvas-footer border-top p-3 text-center">
<div class="row">
<div class="col-6">
<button type="button" class="btn btn-light w-100 bor-rad-50" id="reset-layout">Reset</button>
</div>
<div class="col-6">
<a href="https://themeforest.net/item/smarthr-bootstrap-admin-panel-template/21153150" target="_blank" class="btn btn-primary w-100 bor-rad-50">Buy Now</a>
</div>
</div>
</div>
</div>
@endsection