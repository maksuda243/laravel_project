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



  <link rel="shortcut icon" type="image/x-icon" href="public/frontend/assets/img/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

		
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