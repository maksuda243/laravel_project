<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title',env('APP_NAME'))</title>

    <!-- Bootstrap -->
    <link href="{{asset('public/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('public/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('public/build/css/custom.min.css')}}" rel="stylesheet">
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

 <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="{{asset('public/frontend/assets/img/logo/logo.png')}}" alt=""></a>
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
                                  <a href="{{ route('jobseekeruserdashboard') }}" class="btn head-btn2">Dashboard</a>
                                  <a href="{{ route('jobseekeruser.LogOut') }}" class="btn head-btn2">Logout</a>
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
       <br>
       <br>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              {{-- <a href="{{route('home')}}" class="site_title"> <img src="{{ asset('public/images/logo.png') }}" alt="logo"><span>Job Finder</span></a> --}}
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix pl-5">
              <div class="profile_info">
                <span>Welcome,</span>
                <strong><h2>{{encryptor('decrypt', request()->session()->get('userName'))}}</h2></strong>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> MANAGE PROFILE <span class="fa fa-chevron-down"><span><a>
                    <ul class="nav child_menu">
                        <li><a href="{{route('jobseekerprofile')}}"> Profile</a></li>
                        <li><a href="{{route('jobseekerprofile.change')}}">Update Profile</a></li>
                        <li><a href="index3.html">Upload Resume</a></li>
                        <li><a href="index3.html">Emailed CV</a></li>
                    </ul>
                   </li>
                   <li><a><i class="fa fa-edit"></i>MY ACTIVITIES <span class="fa fa-chevron-down"></span><a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('appliedJobs')}}">Applied Jobs</a></li>
                      <li><a href="form_advanced.html">Emailed Resume</a></li>
                      <li><a href="form_validation.html">Shortlisted Jobs</a></li>
                      <li><a href="form_wizards.html">Following Employer</a></li>
                    </ul>
                   </li>

                   <li><a><i class="fa fa-table"></i>EMPLOYER ACTIVITIES <span class="fa   fa-chevron-down"><span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Employer Viewed CV</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-table"></i>PERSONALIZATION <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Favourite Search</a></li>
                      <li><a href="tables_dynamic.html">My Trainings</a></li>
                      <li><a href="tables_dynamic.html">Transaction Overview</a></li>
                    </ul>
                  </li>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile">
                     <strong>{{encryptor('decrypt', request()->session()->get('userName'))}}</strong> 
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          @yield('content')
        </div>
        <!-- /page content -->
      </div>
    </div>

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

<!-- jQuery -->
<script src="{{asset('public/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('public/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('public/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('public/vendors/nprogress/nprogress.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('public/build/js/custom.min.js')}}"></script>

</body>
</html>
