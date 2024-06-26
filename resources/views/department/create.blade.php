@extends('layouts.app')

@section('content')

<div class="page-wrapper">
    <div class="content container-fluid pb-0">

        
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
        <div class="page-header ">
<h3 class="modal-title text-center">Add Department</h3></div>

<div class="modal-body card p-4">
<form method="post" action="{{url('department')}}">
  @csrf
            <div class="row">

             <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="form-label" for="basic-addon-name">Department Name</label>
                    <span class="text-danger">*</span>
                    <input type="text" id="basic-addon-name" class="form-control" placeholder="Department Name" aria-label="Category" name="name" value="{{ old('name') }}" aria-describedby="basic-addon-name" required />
                    <div class="valid-feedback">Done!</div>
                  
              </div>
            </div>

            

            <div class="col-md-6">
                <div class="input-block mb-3">
                <label class="col-form-label">Status <span class="text-danger">*</span></label>
                    <select class="select" name="status" required>
                       <option>Active</option>
                       <option>In-Active</option>
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




@endsection