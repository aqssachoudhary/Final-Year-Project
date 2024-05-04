@extends('layouts.app')
@section('content')
<div class="page-wrapper">
	<div class="content container-fluid pb-0">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">Welcome {{ Auth::user()->first_name }}!</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item active">Dashboard</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row" >
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
				<div class="card dash-widget">
					<div class="card-body">
						<span class="dash-widget-icon"><i class="fa-solid fa-cubes" ></i></span>
						<div class="dash-widget-info">
							<h3 >{{ $departmentCount }}</h3>
							<span ><b>Departments</b></span>
						</div>
					</div>
				</div>
			</div>
			 <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                    <div class="card-body">
                        <span class="dash-widget-icon"><i class="fa-solid fa-cubes"></i></span>
                        <div class="dash-widget-info ">
                            <h3>{{ $classCount }}</h3>
                            <span><b>Classes</b></span>
                        </div>
                    </div>
                </div>
            </div>
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
				<div class="card dash-widget">
					<div class="card-body">
						<span class="dash-widget-icon"><i class="fa-solid fa-user"></i></span>
						<div class="dash-widget-info">
							<h3>{{ $teacherCount }}</h3>
							<span><b>Teachers</b></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
				<div class="card dash-widget">
					<div class="card-body">
						<span class="dash-widget-icon"><i class="fa-solid fa-user" href="students"></i></span>
						<div class="dash-widget-info" >
							<h3>{{ $studentCount }}</h3>
							<span><b>Students</b></span>
						</div>
					</div>
				</div>
			</div>

			
			<!-- <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
				<div class="card dash-widget">
					<div class="card-body">
						<span class="dash-widget-icon"><i class="fa-solid fa-user"></i></span>
						<div class="dash-widget-info">
							<h3>218</h3>
							<span>Employees</span>
						</div>
					</div>
				</div>
			</div> -->
		</div>
		<div class="col-md-12 mb-4">
			<div class=" mx-auto">
   				<div class="p-6 m-20 bg-white rounded shadow">
                        {!! $studentsChart->container() !!}
                </div>
            </div>
		</div>
	
	
	<div class="row mt-4">
    	<div class="row">
			<div class="col-md-6 d-flex">
				<div class="card card-table flex-fill">
					<div class="card-header">
						<h3 class="card-title mb-0">Sessions</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped custom-table mb-0 datatable">
					             <thead class="table-dark">
					              <tr>
					               <th> Id</th>
					                <th>Start Year</th>
					                <th>End Year</th>
					             
					             
					              </tr>
					            </thead>
					       
					  <tbody>
						    @foreach ($sessions as $session)
						            <tr>
						                <td>{{ $session->id }}</td> 
						            <td>{{ $session->start_date }}</td>
						            <td>{{ $session->end_date }}</td>


						 
						        </tr>
						    @endforeach
						</tbody>
         	 </table>

						</div>
					</div>
					<div class="card-footer">
						<a href="{{url('session-year')}}">View all details</a>
					</div>
				</div>
			</div>
			
			<div class="col-md-6 d-flex">
				<div class="card card-table flex-fill">
					<div class="card-header">
						<h3 class="card-title mb-0"> Department</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							 <table class="table  custom-table datatable leave-employee-table" id="myTable">
                                    <thead class="table-dark">
                                          <tr>
                                                <th>Id</th>
                                                
                                                <th> Department Name</th>
                                                <th>status</th>
                                                
                                                
                                          </tr>
                                    </thead>
                                    <tbody>
                                          @foreach($departments as $department)
                                          <tr>
                                                <td>{{$department->id}}</td>
                                              
                                                <td>{{$department->name}}</td>
                                                <td>
                                                      <h2 class="table-avatar">
                                                     
                                                      <a href="#">{{$department->status}}</a>
                                                      </h2>
                                                </td>
                                                
                                              
                                                    
                                          </tr>
                                          @endforeach
                                    </tbody>
                              </table>
						</div>
					</div>
					<div class="card-footer">
						<a href="{{url('department')}}">View all details</a>
					</div>
				</div>
			</div>
		</div>
    
</div>

	</div>
</div>
</div>

@endsection
 @section('js')
  <script src="{{ $studentsChart->cdn() }}"></script>
{{ $studentsChart->script() }}

@endsection