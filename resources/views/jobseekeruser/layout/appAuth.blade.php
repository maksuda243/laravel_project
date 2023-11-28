<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{env('APP_NAME')}} | @yield('title','Page Name')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('public/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('public/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('public/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('public/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('public/images/favicon.png')}}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>


<!-- Bootstrap -->
<link href="{{asset('public/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{asset('public/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<!-- NProgress -->
<link href="{{asset('public/vendors/nprogress/nprogress.css" rel="stylesheet')}}">

<!-- Custom Theme Style -->
<link href="{{asset('public/build/css/custom.min.css" rel="stylesheet')}}">


</head>
  <body>


    
    @yield('content')


     <!-- plugins:js -->
  <script src="{{asset('public/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('public/js/off-canvas.js')}}"></script>
  <script src="{{asset('public/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('public/js/template.js')}}"></script>
  <script src="{{asset('public/js/settings.js')}}"></script>
  <script src="{{asset('public/js/todolist.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>


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



  <!-- endinject -->
    <script>  
		@if(Session::has('success'))  
				toastr.success("{{ Session::get('success') }}");  
		@endif  
		@if(Session::has('info'))  
				toastr.info("{{ Session::get('info') }}");  
		@endif  
		@if(Session::has('warning'))  
				toastr.warning("{{ Session::get('warning') }}");  
		@endif  
		@if(Session::has('error'))  
				toastr.error("{{ Session::get('error') }}");  
		@endif  
		</script>
      {!! Toastr::message() !!}
  </body>