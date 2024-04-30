@extends('layouts.app')

@section('content')

<div class="page-wrapper">
    <div class="content container-fluid pb-0">

        
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
        <div class="page-header">
<h3 class="modal-title text-center">Add Clasess</h3></div>

<div class="modal-body card p-4">
<form method="post" action="{{url('classes')}}" id="myForm" data-validate="true" data-checkrealtime="true" >
    @csrf
<div class="row form-group">
<div class="col-sm-4">
<div class="input-block mb-3">
<label class="col-form-label"> Class Name <span class="text-danger">*</span></label>
<input class="form-control" type="text" name="name" required>
</div>
</div>

<div class="col-sm-4">
<div class="input-block mb-3">
<label class="col-form-label">status <span class="text-danger">*</span></label>
<select class="select" name="status" required>

<option>active</option>
<option>in-active</option>
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