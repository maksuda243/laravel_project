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
                                            <li><a href="{{ route('employeruser.login') }}">Employer</a><li>
                                            <li><a href="{{url('/blog')}}">Blog</a></li>
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
  <footer>
    <!-- Footer Start-->
    <div class="footer-area footer-bg footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                   <div class="single-footer-caption mb-50">
                     <div class="single-footer-caption mb-30">
                         <div class="footer-tittle">
                             <h4>About Us</h4>
                             <div class="footer-pera">
                                 <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so behold.</p>
                            </div>
                         </div>
                     </div>

                   </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Contact Info</h4>
                            <ul>
                                <li>
                                <p>Address :Your address goes
                                    here, your demo address.</p>
                                </li>
                                <li><a href="#">Phone : +8880 44338899</a></li>
                                <li><a href="#">Email : info@colorlib.com</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Important Link</h4>
                            <ul>
                                <li><a href="#"> View Project</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Testimonial</a></li>
                                <li><a href="#">Proparties</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Newsletter</h4>
                            <div class="footer-pera footer-pera2">
                             <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                         </div>
                         <!-- Form -->
                         <div class="footer-form" >
                             <div id="mc_embed_signup">
                                 <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                 method="get" class="subscribe_form relative mail_part">
                                     <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                     class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                     onblur="this.placeholder = ' Email Address '">
                                     <div class="form-icon">
                                         <button type="submit" name="submit" id="newsletter-submit"
                                         class="email_icon newsletter-submit button-contactForm"><img src="assets/img/icon/form.png" alt=""></button>
                                     </div>
                                     <div class="mt-10 info"></div>
                                 </form>
                             </div>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
           <!--  -->
           <div class="row footer-wejed justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <!-- logo -->
                    <div class="footer-logo mb-20">
                    <a href="index.html"><img src="public/frontend/assets/img/logo/logo2_footer.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                <div class="footer-tittle-bottom">
                    <span>5000+</span>
                    <p>Talented Hunter</p>
                </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="footer-tittle-bottom">
                        <span>451</span>
                        <p>Talented Hunter</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <!-- Footer Bottom Tittle -->
                    <div class="footer-tittle-bottom">
                        <span>568</span>
                        <p>Talented Hunter</p>
                    </div>
                </div>
           </div>
        </div>
    </div>
    <!-- footer-bottom area -->
    <div class="footer-bottom-area footer-bg">
        <div class="container">
            <div class="footer-border">
                 <div class="row d-flex justify-content-between align-items-center">
                     <div class="col-xl-10 col-lg-10 ">
                         <div class="footer-copy-right">
                             <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                         </div>
                     </div>
                     <div class="col-xl-2 col-lg-2">
                         <div class="footer-social f-right">
                             <a href="#"><i class="fab fa-facebook-f"></i></a>
                             <a href="#"><i class="fab fa-twitter"></i></a>
                             <a href="#"><i class="fas fa-globe"></i></a>
                             <a href="#"><i class="fab fa-behance"></i></a>
                         </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>



@endsection