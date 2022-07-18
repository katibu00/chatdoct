<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="chatdoc" />

    <!-- Stylesheets
 ============================================= -->
    <link
        href="/front/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700&display=swap"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/front/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/front/style.css" type="text/css" />
    <link rel="stylesheet" href="/front/css/swiper.css" type="text/css" />

    <!-- Construction Demo Specific Stylesheet -->
    <link rel="stylesheet" href="/front/demos/construction/construction.css" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="/front/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="/front/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="/front/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="/front/css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="/front/demos/construction/css/fonts.css" type="text/css" />

    <link rel="stylesheet" href="/front/css/custom.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="/front/css/colors.php?color=F18052" type="text/css" />

    <!-- Document Title
 ============================================= -->
    <title>@yield('PageTitle') | ChatDoct</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Top Bar
  ============================================= -->
        <div id="top-bar">
            <div class="container clearfix">

                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">

                        <!-- Top Social
      ============================================= -->
                        <ul id="top-social">
                            <li><a href="https://web.facebook.com/ChatDoc-Nigeria-102803225693104" class="si-facebook"><span class="ts-icon"><i
                                            class="icon-facebook"></i></span><span
                                        class="ts-text">Facebook</span></a></li>
                            <li><a href="https://web.facebook.com/ChatDoc-Nigeria-102803225693104" class="si-twitter"><span class="ts-icon"><i
                                            class="icon-twitter"></i></span><span
                                        class="ts-text">Twitter</span></a></li>
                            <li><a href="https://web.facebook.com/ChatDoc-Nigeria-102803225693104" class="si-instagram"><span class="ts-icon"><i
                                            class="icon-instagram2"></i></span><span
                                        class="ts-text">Instagram</span></a></li>
                        </ul><!-- #top-social end -->

                    </div>

                    <div class="col-12 col-md-auto">

                        <!-- Top Links
      ============================================= -->
                        <div class="top-links">
                            <ul class="top-links-container">
                                <li class="top-links-item"><a href="#faqs">FAQs</a></li>
                                <li class="top-links-item"><a href="{{route('register')}}">Register</a></li>
                                <li class="top-links-item"><a href="{{route('login')}}">Login</a></li>
                            </ul>
                        </div><!-- .top-links end -->

                    </div>
                </div>

            </div>
        </div><!-- #top-bar end -->

        <!-- Header
  ============================================= -->
      @include('front.layouts.header')

    

        <!-- Content
  ============================================= -->
     
                @yield('content')

        <!-- Footer
  ============================================= -->
       @include('front.layouts.footer')

    </div><!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
 ============================================= -->
    <script src="/front/js/jquery.js"></script>
    <script src="/front/js/plugins.min.js"></script>

    <!-- Footer Scripts
 ============================================= -->
    <script src="/front/js/functions.js"></script>

</body>

</html>
