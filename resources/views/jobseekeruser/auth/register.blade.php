@extends('jobseekeruser.layout.appAuth')
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
              <h4>New here?</h4>
              <h6 class="font-weight-light">Create your account. It only takes a few steps</h6>
              <form action="{{route('jobseekeruser.register.store')}}" method="POST" class="pt-3">
              @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="name" value="{{old('name')}}" required="" id="name" placeholder="Your Full Name">
                  @if($errors->has('name'))
						<small class="d-block text-danger">
							{{$errors->first('name')}}
						</small>
					@endif
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" required="" id="email" name="email" value="{{old('email')}}" placeholder="Enter email">
                  @if($errors->has('email'))
					 <small class="d-block text-danger">
					  {{$errors->first('email')}}
					 </small>
				  @endif
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" required="" id="contact_no" name="contact_no" value="{{old('contact_no')}}" placeholder="Phone Number">
                  @if($errors->has('contact_no'))
					    <small class="d-block text-danger">
						 {{$errors->first('contact_no')}}
						</small>
					@endif
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" required="" id="password" name="password" placeholder="Enter Password">
                  @if($errors->has('password'))
					 <small class="d-block text-danger">
					   {{$errors->first('password')}}
					 </small>
				 @endif
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" required="" id="password_confirmation" name="password_confirmation" placeholder="Re-enter Password">
                </div>

                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Sign Up</button>
                  <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN UP</a> -->
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="{{route('jobseekeruser.login')}}" class="text-primary">LogIn</a>
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
  </body>

@endsection