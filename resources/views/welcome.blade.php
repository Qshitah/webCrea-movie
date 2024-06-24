<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Striker HTML5 Template">
    <title>@yield('title', 'WebCrea Entertainment Streaming And Blog')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('media/favicon.png') }}">

    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/aksVideoPlayer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    @include('partials.preloader')
    @include('partials.backToTop')
    
    <div id="main-wrapper" class="main-wrapper overflow-hidden">

        @include('partials.largeHeader')
        @include('partials.smallHeader')

        @yield('content')
    </div>

    @include('partials.footer')
    @include('partials.popup')


    <!-- Example in a Blade view file -->
    <!-- Jquery Js -->
    <script src="{{ asset('js/vendor/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-appear.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-validator.js') }}"></script>
    <script src="{{ asset('js/vendor/aksVideoPlayer.js') }}"></script>

    <!-- Site Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


</body>

</html>