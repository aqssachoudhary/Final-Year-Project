@extends('layouts.app')
@section('content')
<div class="page-wrapper">
	<div class="content container-fluid pb-0">
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Students</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
						<li class="breadcrumb-item active">Students</li>
					</ul>
				</div>
				<div class="col-auto float-end ms-auto">
					<a href="{{url('student/create')}}" class="btn add-btn" ><i class="fa-solid fa-plus"></i> Add Students</a>
				</div>
			</div>
		</div>
				<div class="row ">
		@foreach ($students as $student)

			<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3 d-flex">
				<div class="profile-widget w-100">
					<div class="profile-img">
						<a href="client-profile.html" class="avatar"><img src="assets/img/profiles/avatar-13.jpg" alt="User Image"></a>
					</div>
					<div class="dropdown profile-action">
						<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
							<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_client"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
						</div>
					</div>
					<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">{{$student->first_name}}</a></h4>
					<h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">{{$student->last_name}}</a></h5>
					<div class="small text-muted">CEO</div>
					<a href="chat.html" class="btn btn-white btn-sm m-t-10">Message</a>
					<a href="client-profile.html" class="btn btn-white btn-sm m-t-10">View Profile</a>
				</div>
			</div>
		@endforeach
		</div>
	</div>
</div>
@endsection