@extends('layouts.app') @section('content')

 <div class="page-wrapper">
  <div class="content container-fluid pb-0">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
        <div class="page-header">
<h3 class="modal-title text-center">Add Students</h3></div>
    <div class="modal-content">
      <div class="modal-body card p-4">
        <form method="post" action="{{url('student')}}" > @csrf <div class="row">
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label for="validationCustom01" class="col-form-label">First Name <span class="text-danger">*</span>
                </label>
                <input class="form-control" type="text" name="first_name"  required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Last Name</label>
                <input class="form-control" type="text" name="last_name" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Username <span class="text-danger">*</span>
                </label>
                <input class="form-control" type="text" name="username">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Email <span class="text-danger">*</span>
                </label>
                <input class="form-control floating" type="email" name="email" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Password</label>
                <input class="form-control" type="password" name="password" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Confirm Password</label>
                <input class="form-control" type="password" name="cnfrm_password">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Address <span class="text-danger">*</span>
                </label>
                <input class="form-control" type="text" name="address">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Mobile No </label>
                <input class="form-control" type="number" name="mobile">
              </div>
            </div>

            <div class="col-md-6">
              <div class="input-block mb-3">
                  <label class="col-form-label">Department <span class="text-danger">*</span></label>
                 <select class="form-select select" name="department_id" aria-label="Default select example" required>
                      <option selected disabled value="">Select Department</option>
                      @foreach ( $departments as $department)
                      <option value={{$department->id}}>{{$department->name}}</option>
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
<div id="edit_client" class="modal custom-modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
</div>
</div>
 @endsection