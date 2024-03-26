<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<!-- Mirrored from smarthr.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 09:21:53 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Smarthr - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
<meta name="author" content="Dreamstechnologies - Bootstrap Admin Template">
<title>Login - HRMS admin template</title>

<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/material.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body class="account-page">

<div class="main-wrapper">
<div class="account-content">
<a href="job-list.html" class="btn btn-primary apply-btn">Apply Job</a>
<div class="container">

<div class="account-logo">
<a href="admin-dashboard.html"><img src="{{asset('assets/img/logo2.png')}}" alt="Dreamguy's Technologies"></a>
</div>

<div class="account-box">
<div class="account-wrapper">
<h3 class="account-title">Login</h3>
<p class="account-subtitle">Access to our dashboard</p>

<form action="{{url('login')}}" method="POST">
    @csrf
<div class="input-block mb-4">
<label class="col-form-label">Email Address</label>
<input class="form-control" type="text" name="email" value="admin@dreamstechnologies.com">
@error('email')
 <span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
 @enderror
</div>
<div class="input-block mb-4">
<div class="row align-items-center">
<div class="col">
<label class="col-form-label">Password</label>
</div>
<div class="col-auto">
<a class="text-muted" href="forgot-password.html">
Forgot password?
</a>
</div>
</div>
<div class="position-relative">
<input class="form-control" type="password" name="password" id="password">
<span class="fa-solid fa-eye-slash" id="toggle-password"></span>
</div>
</div>
<div class="input-block mb-4 text-center">
<button class="btn btn-primary account-btn" type="submit" name="">Login</button>
</div>
<div class="account-footer">
<p>Don't have an account yet? <a href="{{route('register')}}">Register</a></p>
</div>
</form>

</div>
</div>
</div>
</div>
</div>


<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}" type="7afad0dda06c6cf56708a98b-text/javascript"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" type="7afad0dda06c6cf56708a98b-text/javascript"></script>

<script src="{{asset('assets/js/app.js')}}" type="7afad0dda06c6cf56708a98b-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="7afad0dda06c6cf56708a98b-|49" defer></script></body>

<!-- Mirrored from smarthr.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 09:21:56 GMT -->
</html>