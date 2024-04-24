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

<a href="{{url('section/create')}}" class="btn add-btn m-r-5"  data-bs-target="#add_schedule"><i class="fa-solid fa-plus"></i> Add Sections</a>
</div>
</div>
</div>

<div class="row ">
<div class="col-md-12">
<div class="table-responsive">
<table class="table table-striped custom-table datatable leave-employee-table">
<thead class="table-dark">
<tr>
<th>#</th>
<th>classes ID</th>
<th>sections</th>

<th>Status</th>
<th>Edit</th>
<th>Update</th>

</tr>
</thead>
<tbody>
	  @foreach($sections as $section)






<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" ></a>
<a href="profile.html">{{$section->id}}</a>
</h2>
</td>
<td>
<h2 class="table-avatar">
<a href="profile.html" ></a>
<a href="profile.html">{{$section->name}}</a>
</h2>
</td>
<td>
<div class="user-add-shedule-list">
<h2>
<a href="#" data-bs-toggle="modal" data-bs-target="#edit_schedule" >
<span class="username-info m-b-10">{{$section->name}}</span>

</a>
</h2>
</div>
</td>

<td>
<div class="user-add-shedule-list">
<a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
<span>{{$section->status}}</span>
</a>
</div>
</td>
<td>
                           <a href="{{url('section/'.$section->id.'/edit')}}" class="btn btn-info btn-xs" data-toggle="modal" data-target="#ordine"><i class="fa fa-pencil"></i>
                           </a>
                        </td>
            <td>
                <td>
                          
                                                   <form action="{{ url('section', $section->id) }}" method="POST" id="customer">
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

</div>


@endsection