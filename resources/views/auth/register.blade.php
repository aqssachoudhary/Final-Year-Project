<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<!-- Mirrored from smarthr.dreamstechnologies.com/html/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 09:24:19 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Smarthr - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
<meta name="author" content="Dreamstechnologies - Bootstrap Admin Template">
<title>Register - HRMS admin template</title>

<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body class="account-page">

<div class="main-wrapper">
<div class="account-content">
<div class="container">

<div class="account-logo">
<a href="admin-dashboard.html"><img src="{{asset('assets/img/logo2.png')}}" alt="Dreamguy's Technologies"></a>
</div>

<div class="account-box">
<div class="account-wrapper">
<h3 class="account-title">Register</h3>
<p class="account-subtitle">Access to our dashboard</p>
<form method="get" action="{{url('home')}}">
    @csrf
<div class="input-block mb-4">
<label class="col-form-label">Email<span class="mandatory">*</span></label>
<input class="form-control" type="text">
</div>
<div class="input-block mb-4">
<label class="col-form-label">Password<span class="mandatory">*</span></label>
<input class="form-control" type="password">
</div>
<div class="input-block mb-4">
<label class="col-form-label">Repeat Password<span class="mandatory">*</span></label>
<input class="form-control" type="password">
</div>
<div class="input-block mb-4 text-center">
<button class="btn btn-primary account-btn" type="submit">Register</button>
</div>
<div class="account-footer">
<p>Already have an account? <a href="{{route('login')}}">LogIn</a></p>
</div>
</form>

</div>
</div>
</div>
</div>
</div>


<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}" type="ac6af36c299c8c5739481d2a-text/javascript"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" type="ac6af36c299c8c5739481d2a-text/javascript"></script>

<script src="{{asset('assets/js/app.js')}}" type="ac6af36c299c8c5739481d2a-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="ac6af36c299c8c5739481d2a-|49" defer></script></body>

<!-- Mirrored from smarthr.dreamstechnologies.com/html/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 09:24:19 GMT -->
</html>