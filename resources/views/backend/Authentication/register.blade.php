@extends('backend.layouts.appAuth')
@section('title','Sign Up')
@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="public/images/logo.png" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form action="{{route('register.store')}}" method="POST" class="pt-3">
              @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="FullName" value="{{old('FullName')}}" required="" id="FullName" placeholder="Your Full Name">
                  @if($errors->has('FullName'))
														<small class="d-block text-danger">
															{{$errors->first('FullName')}}
														</small>
													@endif
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" required="" id="EmailAddress" name="EmailAddress" value="{{old('EmailAddress')}}" placeholder="Enter email">
                  @if($errors->has('EmailAddress'))
														<small class="d-block text-danger">
															{{$errors->first('EmailAddress')}}
														</small>
													@endif
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" required="" id="contact_no_en" name="contact_no_en" value="{{old('contact_no_en')}}" placeholder="Phone Number">
                  @if($errors->has('contact_no_en'))
														<small class="d-block text-danger">
															{{$errors->first('contact_no_en')}}
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
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" required="" id="password_confirmation" name="password_confirmation" placeholder="Enter pwd">
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
                  Already have an account? <a href="{{route('login')}}" class="text-primary">LogIn</a>
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


