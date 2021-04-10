<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- <title>HostelPaddy - Home</title> --}}
  <title>@yield('title', 'Hostel Paddy')</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no,
            width=device-width, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="title" content="HostelPaddy - Home">
  <meta name="author" content="@Eunit">
  <meta name="description" content=" ">
  <meta name="keywords" content=" ">
  <meta http-equiv="Content-Type" content="text/html">
  <meta name="theme-color" content="#0f4392">
  <link rel="manifest" href="{{ asset('main/manifest.json') }}">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="#0f4392">
  <link rel="apple-touch-icon" href="{{ asset('main/img/logo.png') }}">
  <meta name="msapplication-TileColor" content="#0f4392">
  <meta name="msapplication-TileImage" content="{{ asset('main/img/logo.png') }}">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@hostelpaddy">
  <meta name="twitter:creator" content="@eunit99">
  <meta name="twitter:title" content=" ">
  <meta name="twitter:description" content=" ">
  <meta name="twitter:image" content="{{ asset('main/img/logo.png') }}">
  <meta name="apple-mobile-web-app-title" content="Add to Home">

  <!-- Open Graph data -->
  <meta property="og:title" content="HostelPaddy - Home">
  <meta property="og:url" content="https://hostelpaddy.com">
  <meta property="og:description" content=" ">
  <meta property="og:site_name" content=" ">
  <meta property="og:image" content="{{ asset('main/img/logo.png') }}">
  <meta name="og:locale" content="en_UK">
  <meta name="fb:admins" content="">
  <meta name="og:type" content="website">
  <meta property="article:publisher" content="https://facebook.com/hostelpaddy1">
  <meta property="og:image:secure_url" content="{{ asset('main/img/logo.png') }}">
  <meta property="og:image:width" content="512">
  <meta property="og:image:height" content="512">

  <!-- Favicons -->
  <link rel="apple-touch-icon-precomposed" href="{{ asset('main/img/logo.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('main/img/logo.png') }}">
  <link rel="mask-icon" href="{{ asset('main/img/logo.png') }}" color="#0f4392">
  <link rel="shortcut icon" href="{{ asset('main/img/logo.png') }}" type="image/x-icon">

  <!-- Site Verifications -->
  <meta name="google-site-verification" content="" />
  <meta name="google-analytics" content="UA-XXXXXX-X">



  <!-- Vendor stylesheets -->
  <link type="text/css" rel="stylesheet" href="{{ asset('main/vendor/animate/css/animate.min.css') }}">
  <link type="text/css" rel="stylesheet" href="{{ asset('main/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link type="text/css" rel="stylesheet" href="{{ asset('main/vendor/reset/css/reset.min.css') }}">
  <link type="text/css" rel="stylesheet" href="{{ asset('main/vendor/normalize/css/normalize.min.css') }}">
  <link type="text/css" rel="stylesheet" href="{{ asset('main/vendor/linearicons/css/linearicons.min.css') }}" />
  <link type="text/css" rel="stylesheet" href="{{ asset('main/vendor/fontawesome/css/fontawesome.min.css') }}" />


  <!-- Vendor scripts -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  {{-- <link rel="stylesheet" href="{{ asset('comingsoon/vendor/bootstrap/css/bootstrap.css') }}"> --}}

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- Default Stylesheet -->
  <link type="text/css" href="{{ asset('main/css/home.css') }}" rel="stylesheet" />
  <link type="text/css" href="{{ asset('main/css/styles.css') }}" rel="stylesheet" />
</head>


<body>
  <!-- container -->
  <div class="container-fluid mx-0">
    <div class="row">

      <!-- image visible only in large screens -->
      <div class="col-lg-4 side-image">
        <div class="heading-title">
          <h1>Your No. 1 solution for hostel accommodation</h1>
        </div>
        <div class="desc-text mt-3">
          <p>An innovating way to relieve you of the hassle of hostel-hunting</p>
        </div>
      </div>
      <!-- /image visible only in large screens -->

      <div class="col-12 col-md-12 col-lg-8">

        @yield('content')


      </div>
    </div>
  </div>
  <!-- /container -->

  <!-- Vendor scripts -->
  <script src="{{ asset('main/vendor/jquery/jquery-3.1.1.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="{{ asset('main/js/script.js') }}"></script>
</body>

</html>
