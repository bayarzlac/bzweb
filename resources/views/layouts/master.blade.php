<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Finpack</title>
    <!-- Favicon -->
    <link href="{{ asset('assets/images/favicon.png') }}" rel="shortcut icon">
    <!-- CSS -->
    <link href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/magnific-popup/magnific-popup.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/owl-carousel/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/justified-gallery/justified-gallery.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/sal/sal.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <!-- Fonts/Icons -->
    <link href="{{ asset('assets/plugins/font-awesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/themify/themify-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
</head>

<body data-preloader="4">
    <div class="wrapper">

        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')
        
    </div><!-- end wrapper -->
    
    <!-- ***** JAVASCRIPTS ***** -->
    <script src="{{ asset('assets/plugins/jquery.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>
    <script src="{{ asset('assets/plugins/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
</body>
</html>
