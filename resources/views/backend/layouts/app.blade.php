<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>@yield('title',env('APP_NAME'))</title>

    <!-- Bootstrap -->
    <link href="{{asset('public/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('public/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('public/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{asset('public/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('public/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('public/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
     <!-- Toast CSS -->
     <link href="{{asset('public/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom Theme Style -->
    <link href="{{asset('public/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <a href="" class="site_title"> <img src="{{ asset('public/images/logo.png') }}" alt="logo"><span>Job Finder</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('public/uploads/users/'.request()->session()->get('image'))}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><strong>{{encryptor('decrypt', request()->session()->get('userName'))}}</strong></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Home </a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul> -->
                  </li>
                  <li><a ><i class="fa fa-edit"></i>   Admin Users <span class="fa fa-chevron-down"> </span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('user.index')}}">Users</a></li>
                      <li><a href="{{route('role.index')}}">Role</a></li>
                      <!-- <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li> -->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Job Section <span class="fa fa-chevron-down"> </span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('job-natures.index')}}">Job Nature</a></li>
                      <li><a href="{{route('job-category.index')}}">Job Category</a></li>
                      <li><a href="{{route('job-level.index')}}">Job Level</a></li>
                      <li><a href="{{route('org-type.index')}}">Organization Type</a></li>
                      <li><a href="{{route('gender.index')}}">Gender</a></li>
                      <li><a href="{{route('location.index')}}">Location</a></li>
                       <li><a href="{{route('education.index')}}">Education</a></li>
                      <li><a href="{{route('subscription.index')}}">Subscription</a></li>
                      <li><a href="{{ route('religion.index') }}">Religion</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('jobseeker_user.index')}}">Job Seeker</a></li>
                      <li><a href="{{route('employer_user.index')}}">Employer</a></li>
                    </ul>
                  </li>
                  <li><a href="{{route('job.index')}}"><i class="fa fa-bar-chart-o"></i> Jobs </a></li>
                  <li><a href="{{ route('blog.index') }}"><i class="fa fa-bar-chart-o"></i> Blogs </a></li>
                  <li><a href="{{ route('appliedjob') }}"><i class="fa fa-bar-chart-o"></i> Applied Jobs </a></li>
                </ul>
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
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('public/uploads/users/'.request()->session()->get('image'))}}" alt="">John Doe
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="{{route('logOut')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>@yield('title')</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            @yield('content')
          </div>
        </div>
        <!-- /page content -->
        {{-- !-- footer content  --> --}}
         <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
         {{-- !--footer content--! --}}
      </div>
    </div>
    <!-- jQuery -->
    <script src="{{asset('public/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('public/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('public/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('public/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('public/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('public/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('public/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('public/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('public/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('public/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('public/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('public/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('public/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('public/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('public/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('public/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('public/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('public/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('public/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('public/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('public/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset('public/build/js/custom.min.js')}}"></script>
	
  </body>
</html>
