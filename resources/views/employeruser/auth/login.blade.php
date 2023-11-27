@extends('employeruser.layout.app')
@section('title','Sign Up')
@section('content')


<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="public/images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
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
                  <input type="password" class="form-control form-control-lg" required="" id="password" name="password" placeholder="Enter pwd">
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
                  Don't have an account? <a href="{{route('employeruser.register')}}" class="text-primary">Sign Up</a>
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