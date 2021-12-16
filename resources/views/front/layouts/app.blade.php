<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <title>{{ config('app.name', 'Consult Doctor Online with ChatDoc Nigeria') }}</title>

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/website//website/img/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/website/img/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/website/img/favicon-16x16.png') }}">
  <link rel="manifest" href="{{asset('/website/img/site.webmanifest') }}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <link href="{{ asset('/website/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/website/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/website/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('/website/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/website/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/website/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet"> 

  <!-- Template Main CSS File -->
  <link href="{{ asset('/website/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('/website/css/icofont.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Green - v4.3.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

  
<body>
    
    <!-- Page Header and Navigation-->    
    @include('front.layouts.navigation')
 

    <!-- Page Content -->
    <main id="main">
    @yield('content')
    </main>

    <!-- Page Footer -->
    @include('front.layouts.footer')


</body>

</html>