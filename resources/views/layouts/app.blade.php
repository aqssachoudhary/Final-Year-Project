<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
  <!-- Mirrored from smarthr.dreamstechnologies.com/html/template/{{url('/')}} by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 09:24:29 GMT -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template">
    <title>Dashboard - HRMS admin template</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/material.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    

    <link rel="stylesheet" href="{{asset('https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css')}}" />
     <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css')}}"
    />
     
  
  </head>
  <body>
    <div class="main-wrapper">
      <div class="header">
        <div class="header-left">
          <a href="{{url('/')}}" class="logo">
            <img src="{{asset('assets/img/logo4.png')}}" class="logo-dashboard" alt="Logo">
          </a>
          <a href="{{url('/')}}" class="logo collapse-logo">
          </a>
          <a href="{{url('/')}}" class="logo2">
            <img src="{{asset('assets/img/logo2.png')}}" width="40" height="40" alt="Logo">
          </a>
        </div>
        <a id="toggle_btn" href="javascript:void(0);">
          <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </a>
        <div class="page-title-box">
          <h3>Attendance Management</h3>
        </div>
        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
          <i class="fa-solid fa-bars"></i>
        </a>
        <ul class="nav user-menu">
          
        
          <li class="nav-item dropdown has-arrow main-drop">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
              <span class="user-img">
                <img src="{{asset('assets/img/avatar/avatar-27.jpg')}}" alt="User Image">
                <span class="status online"></span>
              </span>
              <span> {{ Auth::user()->first_name }}</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="profile.html">My Profile</a>
              <a class="dropdown-item" href="settings.html">Settings</a>
              <a class="dropdown-item" href="index.html">Logout</a>
            </div>
          </li>
        </ul>
        <div class="dropdown mobile-user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-ellipsis-vertical"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="settings.html">Settings</a>
            <a class="dropdown-item" href="index.html">Logout</a>
          </div>
        </div>
      </div>
      <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
          <div id="sidebar-menu" class="sidebar-menu">
         
          <ul class="sidebar-vertical">
            <li class="menu-title">
              <span>Main</span>
            </li>
            <li >
              <a href="{{url('/home')}}">
                <i class="la la-dashcube"></i>
                <span> Dashboard</span>
              </a>
              
            </li>
            
            <li class="menu-title">
              <span>Teachers</span>
            </li>
            <li class="submenu">
              <a href="#">
                <i class="la la-user"></i>
                <span>Teachers</span>
                <span class="menu-arrow"></span>
              </a>
              <ul>
                <li>
                  <a href="{{url('teacher')}}">All Teachers</a>
                </li>
                <li>
                  <a href="{{url('teacher/create')}}">Add Teacher</a>
                </li>
              </ul>
            </li>
            <li>
              <li class="menu-title">
                <span>Students</span>
              </li>
              <li class="submenu">
                <a href="#" >
                  <i class="la la-user"></i>
                  <span>Students</span>
                  <span class="menu-arrow"></span>
                </a>
                
                
                
                <ul>
                  <li>
                    <a href="{{url('student')}}">All Students</a>
                  </li>
                  
                  <li>
                    <a href="{{url('student/create')}}">Add Students</a>
                  </li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#">
                  <i class='fas fa-chalkboard-teacher'></i>
                  <span>Departments</span>
                  <span class="menu-arrow"></span>
                </a>
                <ul>
                  <li>
                    <a href="{{url('department')}}"> All Deprtments</a>
                  </li>
                  <li>
                    <a href="{{url('department/create')}}"> Add Department</a>
                  </li>
                  
                  
                </ul>
              </li>
              <li class="submenu">
                <a href="#">
                  <i class='far fa-calendar'></i>
                  <span>Session Year</span>
                  <span class="menu-arrow"></span>
                </a>
                <ul>
                  <li>
                    <a href="{{url('session-year')}}"> All Sessions</a>
                  </li>
                  <li>
                    <a href="{{url('session-year/create')}}">Add Session</a>
                  </li>
                  
                </ul>
              </li>
              
              <li class="menu-title">
                <span>Management</span>
              </li>
              <li class="submenu">
                <a href="#">
                  <i class="la la-laptop-medical"></i>
                  <span> Classes </span>
                  <span class="menu-arrow"></span>
                </a>
                <ul>
                  <li>
                    <a href="{{url('classes')}}">All Classes </a>
                  </li>
                  <li>
                    <a href="{{url('classes/create')}}">Add Classes </a>
                  </li>
                  
                </ul>
              </li>
              
              
              <li class="submenu">
                <a href="#">
                  <i class="la la-user-tag"></i>
                  <span> Subjects </span>
                  <span class="menu-arrow"></span>
                </a>
                <ul>
                  <li>
                    <a href="{{url('subject')}}">All Subjects</a>
                  </li>
                  <li>
                    <a href="{{url('subject/create')}}"> Add Subject </a>
                  </li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#">
                  <i class="la la-key"></i>
                  <span> Sections </span>
                  <span class="menu-arrow"></span>
                </a>
                <ul>
                  
                  <li>
                    <a href="{{url('section')}}"> All Sections </a>
                  </li>
                  <li>
                    <a href="{{url('section/create')}}">Add Sections </a>
                  </li>
                  
                </ul>
              </li>
              
              <li >
                <a href="{{ url('logout') }}">
                  <i class="la la-columns"></i>
                  <span> Logout </span>
                </a>
               
              </li>
              
            </div>
          </div>
        </div>
    
      </div>
    </div>
  </div>
</div>
@yield('content')
</div>
<script data-cfasync="false" src="{{asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" type="6de4fa2cb1af1d1f9b7737bc-text/javascript"></script>
<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}" type="6de4fa2cb1af1d1f9b7737bc-text/javascript"></script>
<script src="{{asset('assets/plugins/morris/morris.min.js')}}" type="6de4fa2cb1af1d1f9b7737bc-text/javascript"></script>
<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}" type="6de4fa2cb1af1d1f9b7737bc-text/javascript"></script>

<script src="{{asset('assets/js/greedynav.js')}}" type="6de4fa2cb1af1d1f9b7737bc-text/javascript"></script>
<script src="{{asset('assets/js/layout.js')}}" type="6de4fa2cb1af1d1f9b7737bc-text/javascript"></script>
<script src="{{asset('assets/js/theme-settings.js')}}" type="6de4fa2cb1af1d1f9b7737bc-text/javascript"></script>
<script src="{{asset('assets/js/app.js')}}" type="6de4fa2cb1af1d1f9b7737bc-text/javascript"></script>
<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>

<script src="{{asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="6de4fa2cb1af1d1f9b7737bc-|49" ></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@yield('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('.select-multiple').select2();
     $('#myTable').DataTable();
});
</script>


  @if (!empty(session('success')))
        <script type="text/javascript">
            Swal.fire(
                'Success!!',
                '{{ session('success') }}',
                'success'
            )
        </script>
    @endif
    @if (!empty(session('error')))
        <script type="text/javascript">
            Swal.fire(
                'Danger!!',
                '{{ session('error') }}',
                'error'
            )
        </script>
    @endif
    @if (!empty(session('warning')))
        <script type="text/javascript">
            Swal.fire(
                'Warning!!',
                '{{ session('warning') }}',
                'warning'
            )
        </script>
    @endif


</body>
<!-- Mirrored from smarthr.dreamstechnologies.com/html/template/{{url('/')}} by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 09:24:30 GMT -->
</html>
