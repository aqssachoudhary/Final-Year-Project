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
				<div class="col-auto float-end ms-auto">
					<a href="{{url('teacher/create')}}" class="btn add-btn" ><i class="fa-solid fa-plus"></i> Add teacher</a>
				</div>
			
			</div>
		</div>
		  <div class="col-md-12">
		  	
		  	<div class="row">
		  			@foreach ($teachers as $teacher)
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
				</div>
				@endforeach
		  	</div>
		  </div>
			
			</div>
		</div>
	</div>
			@endsection