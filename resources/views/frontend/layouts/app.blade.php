<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet" href="{{ asset('frontendFiles/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontendFiles/css/style.css') }}" />
    <style>
        .owl-carousel .owl-stage {
            display: flex;
            align-items: center;
        }
    </style>
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <!-- Preloader -->
    <div id="preloader"></div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <div id="app">
        @yield('content')
    </div>

    <!-- jQuery -->
    <script src="{{ asset('frontendFiles/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('frontendFiles/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('frontendFiles/js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('frontendFiles/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontendFiles/js/jquery.isotope.v3.0.2.js') }}"></script>
    <script src="{{ asset('frontendFiles/js/pace.js') }}"></script>
    <script src="{{ asset('frontendFiles/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontendFiles/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontendFiles/js/scrollIt.min.js') }}"></script>
    <script src="{{ asset('frontendFiles/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontendFiles/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontendFiles/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('frontendFiles/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('frontendFiles/js/YouTubePopUp.js') }}"></script>
    <script src="{{ asset('frontendFiles/js/custom.js') }}"></script>
</body>
</html>
