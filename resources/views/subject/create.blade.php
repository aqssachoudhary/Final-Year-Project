@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid pb-0">
        
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="page-header">
                <h3 class="modal-title text-center">Add Subject</h3></div>
                <div class="modal-body card p-4">
                    <form method="post" action="{{url('subject')}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label"> Subject Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" required name="name">
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