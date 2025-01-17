<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BITS - IT Solution & Service </title>
    <meta name="author" content="vecuro">
    <meta name="description" content="TechBiz - IT Solution & Service HTML Template">
    <meta name="keywords" content="TechBiz - IT Solution & Service HTML Template" />
    <meta name="robots" content="INDEX,FOLLOW">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="57x57" href="{{systemSetting()?->logo2}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{systemSetting()?->logo2}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{systemSetting()?->logo2}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{systemSetting()?->logo2}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{systemSetting()?->logo2}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{systemSetting()?->logo2}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{systemSetting()?->logo2}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{systemSetting()?->logo2}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{systemSetting()?->logo2}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{systemSetting()?->logo2}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{systemSetting()?->logo2}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{systemSetting()?->logo2}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{systemSetting()?->logo2}}">
    <link rel="manifest" href="{{asset('assets/frontend/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{systemSetting()?->logo2}}">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&amp;family=Fira+Sans:wght@400;500&amp;display=swap"
        rel="stylesheet">

    
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/fontawesome.min.css')}}">
    <!-- Layerslider -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/layerslider.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.min.css')}}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slick.min.css')}}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">

</head>

<body>


   
    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader  ">
        <button class="vs-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>
   @include('frontend.layouts.menu')
  @include('frontend.layouts.header')
   @yield('content')
  @include('frontend.layouts.footer')


    <!--********************************
			Code End  Here 
	******************************** -->


    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{asset('assets/frontend/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <!-- Slick Slider -->
    <!-- <script src="{{asset('assets/frontend/js/app.min.js')}}"></script> -->
    <script src="{{asset('assets/frontend/js/slick.min.js')}}"></script>
    <!-- Layerslider -->
    <script src="{{asset('assets/frontend/js/layerslider.utils.js')}}"></script>
    <script src="{{asset('assets/frontend/js/layerslider.transitions.js')}}"></script>
    <script src="{{asset('assets/frontend/js/layerslider.kreaturamedia.jquery.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <!-- WOW.js Animation -->
    <script src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Isotope Filter -->
    <script src="{{asset('assets/frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/isotope.pkgd.min.js')}}"></script>
    <!-- Main Js File -->
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>



</body>


<!-- Mirrored from html.vecurosoft.com/techbiz/demo/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Dec 2024 07:00:05 GMT -->
</html>