<!DOCTYPE html>
<html lang="en">

<head>
    <title>Oral Square</title>
    {{-- <title>@yield('title')</title> --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png ') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico ') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css ') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css ') }}">


    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css ') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css ') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css ') }}">
    @yield('css')

</head>

<body>

    <div class="site-wrap">

        {{-- Add Header Section --}}
        @include('layouts.header')
        {{-- Add Header Section --}}

        {{-- Content Section start --}}
        @yield('content')
        {{-- Content Section End --}}

        {{-- Add Footer Section --}}
        @include('layouts.footer')
        {{-- Add Footer Section --}}
    </div>

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js ') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js ') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js ') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js ') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js ') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js ') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js ') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js ') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js ') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js ') }}"></script>
    <script src="{{ asset('assets/js/aos.js ') }}"></script>

    <script src="{{ asset('assets/js/main.js ') }}"></script>
    @yield('js')

</body>

</html>
