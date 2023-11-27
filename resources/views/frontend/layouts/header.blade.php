<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Job Portal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="public/frontend/assets/img/favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{asset('public/frontend/assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/assets/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/assets/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/assets/css/price_rangs.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/assets/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/assets/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/assets/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/assets/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/assets/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/assets/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/assets/css/dropdown.css')}}">
          
            <link rel="stylesheet" href="{{asset('public/frontend/assets/css/style.css')}}">
   </head>

   <body>
    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="public/frontend/assets/img/logo/logo.png" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li><a href="{{url('/joblisting')}}">Find a Jobs </a></li>
                                            <li><a href="{{ route('employeruser.login') }}">Employer</a></li>
                                            <li><a href="#">Page</a>
                                                <ul class="submenu">
                                                    <li><a href="{{url('/blog')}}">Blog</a></li>
                                                    <li><a href="{{url('/blogdetails')}}">Blog Details</a></li>
                                                    <li><a href="{{url('/elements')}}">Elements</a></li>
                                                    <li><a href="{{url('/jobdetails')}}">job Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{url('/contact')}}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <div class="dropdown">
                                        <button onclick="toggleDropdown()" class="btn head-btn1 dropbtn">Register</button>
                                        <div id="registerDropdown" class="dropdown-content">
                                            <a href="{{ route('jobseekeruser.register') }}">
                                                <div class="dropdown-card jobseeker">
                                                    <i class="fas fa-laptop"></i>
                                                    <p> As a Jobseeker</p>
                                                </div>
                                            </a>
                                            <a href="{{ route('employeruser.register') }}">
                                                <div class="dropdown-card employer">
                                                    <i class="fas fa-user-tie"></i>
                                                    <p>As a Employer</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="{{ route('jobseekeruser.login') }}" class="btn head-btn2">Login</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>