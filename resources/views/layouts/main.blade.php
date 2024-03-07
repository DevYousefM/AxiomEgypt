<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> @yield('title', 'Axiom Egypt') </title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- slidr -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>


    @if (LaravelLocalization::getCurrentLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.css') }}">
        <link rel="stylesheet" href="{{ asset('css/rtl.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!--Color Switcher Mockup-->
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color-switcher-design.css') }}">
    <!--Color Themes-->
    <link rel="stylesheet" href="{{ asset('css/color-themes/default-theme.css') }}" id="theme-color-file">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/home/faavicon (1).webp') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/home/faavicon (1).webp') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('images/home/faavicon (1).webp') }}" sizes="16x16">
    @yield('css')
</head>

<body>
    <div class="boxed_wrapper">

        <div class="preloader"></div>
        <!--Header-->
        @include('includes.header')

        <!-- Content -->
        @yield('content')
        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target thm-bg-clr" data-target="html"><span class="fa fa-angle-up"></span>
        </div>
        @include('includes.footer')
    </div>

    <!-- main jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <!-- Wow Script -->
    <script src="{{ asset('js/wow.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- bx slider -->
    <script src="{{ asset('js/appear.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('js/owl.js') }}"></script>
    <!-- thm custom script -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js'></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
