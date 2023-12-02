@extends('employeruser.layout.appAuth')
@section('title','Sign Up')
@section('content')

<header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('public/images/logo.png') }}" alt=""></a>
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
                                <!-- <div class="header-btn d-none f-right d-lg-block">
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
                                </div> -->
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



<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('public/images/logo.png') }}" alt="logo">
              </div>
              <h4><b>Corporate Sign In</b></h4>
              <h6 class="font-weight-light">Find the best Candidates in the fastest way</h6>
              <form class="pt-3" action="{{route('employeruser.login.check')}}" method="POST">
              @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" required="" id="username" name="username" value="{{old('username')}}" placeholder="Phone Number/Email Address">
                  @if($errors->has('username'))
													<small class="d-block text-danger">
														{{$errors->first('username')}}
													</small>
												@endif
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" required="" id="password" name="password" placeholder="Enter password">
                  @if($errors->has('password'))
													<small class="d-block text-danger">
														{{$errors->first('password')}}
													</small>
												@endif
                </div>
                <div class="mt-3">
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Sign In</button>
                  <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN IN</a> -->
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                Register for your employer's account to get started. <a href="{{route('employeruser.register')}}" class="text-primary">Sign Up</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@endsection