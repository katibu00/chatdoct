
@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="EduZone - Education Collage & School HTML5 Template" />
    <meta property="og:title" content="EduZone - Education Collage & School HTML5 Template" />
    <meta property="og:description" content="EduZone - Education Collage & School HTML5 Template" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="/uploads/logos/{{ $school->logo }}" type="image/x-icon" />
    <link rel="shortcut icon" type="/frontend/theme1/image/x-icon" href="/uploads/logos/{{ $school->logo }}" />

    <!-- PAGE TITLE HERE -->
    <title>{{ucfirst($route)}} - {{$school->name}}</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
 <script src="js/html5shiv.min.js"></script>
 <script src="js/respond.min.js"></script>
 <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="/frontend/theme1/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="/frontend/theme1/css/style.css">
    <link class="skin" rel="stylesheet" type="text/css" href="/frontend/theme1/css/skin/skin-1.css">
    <link rel="stylesheet" type="text/css" href="/frontend/theme1/css/templete.css">
    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    </style>

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="/frontend/theme1/plugins/revolution/revolution/css/revolution.min.css">

</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area"></div>
        <!-- header -->
        <header class="site-header mo-left header">
            <div class="top-bar">
                <div class="container">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="dlab-topbar-left">
                            <ul>
                                <li><i class="la la-phone-volume"></i> {{ $school->phone_first }}</li>
                                <li><i class="las la-map-marker"></i>{{ $school->address }}</li>
                            </ul>
                        </div>
                        <div class="dlab-topbar-right">
                            <ul>
                                <li><i class="la la-clock"></i> Mon - Fri 8.00 - 2.00</li>
                                <li><i class="las la-envelope-open"></i>{{ $school->email }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main header -->
            <header class="site-header mo-left header ext-header">
                {{-- <div class="top-bar">
              <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                  <div class="dlab-topbar-left">
                    <ul>
                      <li><a href="javascript:void(0);">About Us</a></li>
                      <li><a href="javascript:void(0);">Refund Policy</a></li>
                      <li><a href="javascript:void(0);">Help Desk</a></li>
                    </ul>
                  </div>
                  <div class="dlab-topbar-right">
                    <a href="javascript:void(0);" class="site-button radius-no">GET A QUOTE</a>
                  </div>
                </div>
              </div>
            </div> --}}
                <div class="middle-bar bg-white">
                    <div class="container">
                        <!-- website logo  -->
                        <div class="middle-area">
                            <div class="logo-header">
                                <a href="index.html"><img src="/uploads/logos/{{ $school->logo }}" alt="School Logo"
                                        style="width: 70px;"></a>
                            </div>
                            <div class="service-list">
                                <ul>
                                    <li>
                                        <i class="la la-envelope-open"></i>
                                        <h4 class="title">{{ $school->phone_first }}</h4>
                                        <span>Hotline</span>
                                    </li>
                                    <li>
                                        <i class="la la-clock-o"></i>
                                        <h4 class="title">08:00 AM - 02:00 PM</h4>
                                        <span>Monday - Friday</span>
                                    </li>
                                    <li>
                                        <i class="la la-map"></i>
                                        <h4 class="title">{{ $school->address }}</h4>
                                        <span>CA, Nigeria</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- main header -->
                <div class="sticky-header main-bar-wraper navbar-expand-lg">
                    <div class="main-bar clearfix ">
                        <div class="container clearfix">
                            <!-- website logo -->
                            <div class="logo-header mostion">
                                <a href="index.html"><img src="images/logo.png" alt=""></a>
                            </div>
                            <!-- nav toggle button -->
                            <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                                data-toggle="collapse" data-target="#navbarNavDropdown"
                                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <!-- extra nav -->
                            <div class="extra-nav">
                                <div class="extra-cell">
                                    <button id="quik-search-btn" type="button" class="site-button-link"><i class="la la-search"></i></button>
                                    <a href="javascript:void(0);" class="site-button btnhover13">Login</a>
                                </div>
                            </div>
                            <!-- Quik search -->
                            <div class="dlab-quik-search ">
                                <form action="#">
                                    <input name="search" value="" type="text" class="form-control"
                                        placeholder="Type to search">
                                    <span id="quik-search-remove"><i class="ti-close"></i></span>
                                </form>
                            </div>
                            <!-- main nav -->
                            <div class="header-nav navbar-collapse collapse justify-content-start"
                                id="navbarNavDropdown">
                                <div class="logo-header d-md-block d-lg-none">
                                    <a href="index.html"><img src="images/logo.png" alt=""></a>
                                </div>
                                <ul class="nav navbar-nav">
                                    <li class="{{($route=='home')?'active':''}}">
                                        <a href="{{route('home',$school->username)}}">Home</a>
                                    </li>
                                    <li  class="{{($route=='about')?'active':''}}">
                                        <a href="{{route('about',$school->username)}}">About</a>
                                    </li>

                                    <li  class="{{($route=='blog')?'active':''}}">
                                        <a href="{{route('blog',$school->username)}}">Blog</a>
                                    </li>
                                    <li  class="{{($route=='contact')?'active':''}}">
                                        <a href="{{route('contact',$school->username)}}">Contact</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main header END -->
            </header>

            <!-- main header END -->
        </header>
        <!-- header END -->
        @yield('content')
        <!-- Content END-->
        <!-- Newsletter -->
        <div class="section-full p-tb50 bg-primary text-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 m-md-b30">
                        <h4>Subscribe To Our Newsletter</h4>
                        <p class="m-b0">There are many variations of passages of Lorem Ipsum available, but the majority
                            have suffered alteration in some form, by injected humour, or randomised words</p>
                    </div>
                    <div class="col-md-5">
                        <h4>Your Email Address</h4>
                        <form class="dzSubscribe style1" action="script/mailchamp.php" method="post">
                            <div class="dzSubscribeMsg"></div>
                            <div class="input-group">
                                <input name="dzEmail" required="required" type="email" class="form-control"
                                    placeholder="Your Email Address">
                                <div class="input-group-addon">
                                    <button name="submit" value="Submit" type="submit"
                                        class="site-button-secondry btnhover13">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-top" style="background-image:url(/frontend/theme1/images/pattern/pt15.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-5 col-sm-6 footer-col-4 col-12">
                            <div class="widget widget_about border-0">
                                <h5 class="footer-title">About Us</h5>
                                <p class="mm-t5">{{$frontend->footer_about}}</p>
                                <ul class="contact-info-bx">
                                    <li><i class="las la-map-marker"></i><strong>Address:</strong> {{$school->address}}
                                    </li>
                                    <li><i class="las la-phone-volume"></i><strong>Phone:</strong> {{$school->phone_first}}</li>
                                    <li><i class="las la-envelope-open"></i><strong>Email:</strong> {{$school->email}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-7 col-sm-6 footer-col-4 col-12">
                            <div class="widget border-0 recent-posts-entry">
                                <h5 class="footer-title">Latest Post</h5>
                                <div class="widget-post-bx">
                                    @foreach ($recents as $recent)

                                    <div class="widget-post clearfix">
                                        <div class="dlab-post-media">
                                            <img src="/uploads/frontend/{{$school->username }}/{{$recent->image}}" width="200"
                                                height="143" alt="">
                                        </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-header">
                                                <h6 class="post-title"><a href="{{route('post',['username' => $school->username, 'slug' => $recent->slug])}}">{{$recent->title}} </a></h6>
                                            </div>
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-date"> <i class="la la-clock"></i> <strong>{{$recent->created_at->format('d F Y')}}</strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6 footer-col-4 col-12">
                            <div class="widget widget_services border-0">
                                <h5 class="footer-title">Usefull Link</h5>
                                <ul class="mm-t10">
                                    <li><a href="javascript:void(0);">About Us</a></li>
                                    <li><a href="javascript:void(0);">Blog</a></li>
                                    <li><a href="javascript:void(0);">Services</a></li>
                                    <li><a href="javascript:void(0);">Privacy Policy</a></li>
                                    <li><a href="javascript:void(0);">Projects </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 footer-col-4 col-12">
                            <div class="widget">
                                <h5 class="footer-title">Opening Hours</h5>
                                <ul class="thsn-timelist-list mm-t5">
                                    <li><span class="thsn-timelist-li-title">Mon – Tue</span><span
                                            class="thsn-timelist-li-value">10:00 – 18:00</span></li>
                                    <li><span class="thsn-timelist-li-title">Wed – Thur</span><span
                                            class="thsn-timelist-li-value">10:00 – 17:00</span></li>
                                    <li><span class="thsn-timelist-li-title">Fri – Sat</span><span
                                            class="thsn-timelist-li-value">10:00 – 12:30</span></li>
                                    <li><span class="thsn-timelist-li-title">Saturday</span><span
                                            class="thsn-timelist-li-value">10:00 – 12:30</span></li>
                                    <li><span class="thsn-timelist-li-title">Sunday</span><span
                                            class="thsn-timelist-li-value">Closed</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer bottom part -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 text-left "> <span>Copyright © {{date('Y')}} {{$school->name}}</span> </div>
                        <div class="col-md-6 col-sm-6 text-right ">
                            <div class="widget-link ">
                                <ul>
                                    <li><a href="javascript:void(0);"> About</a></li>
                                    <li><a href="javascript:void(0);"> Help Desk</a></li>
                                    <li><a href="javascript:void(0);"> Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer END-->
        <button class="scroltop icon-up" type="button"><i class="fa fa-arrow-up"></i></button>
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="/frontend/theme1/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
    <script src="/frontend/theme1/plugins/wow/wow.js"></script><!-- WOW JS -->
    <script src="/frontend/theme1/plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="/frontend/theme1/plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="/frontend/theme1/plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
    <script src="/frontend/theme1/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
    <script src="/frontend/theme1/plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
    <script src="/frontend/theme1/plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
    <script src="/frontend/theme1/plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
    <script src="/frontend/theme1/plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
    <script src="/frontend/theme1/plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
    <script src="/frontend/theme1/plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
    <script src="/frontend/theme1/plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
    <script src="/frontend/theme1/plugins/lightgallery/js/lightgallery-all.min.js"></script><!-- Lightgallery -->
    <script src="/frontend/theme1/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
    <script src="/frontend/theme1/js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
    <script src="/frontend/theme1/plugins/countdown/jquery.countdown.js"></script><!-- COUNTDOWN FUCTIONS  -->
    <script src="/frontend/theme1/js/dz.ajax.js"></script><!-- CONTACT JS  -->
    <script src="/frontend/theme1/plugins/rangeslider/rangeslider.js"></script><!-- Rangeslider -->

    <script src="/frontend/theme1/js/jquery.lazy.min.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="/frontend/theme1/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="/frontend/theme1/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="/frontend/theme1/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js">
    </script>
    <script src="/frontend/theme1/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js">
    </script>
    <script src="/frontend/theme1/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js">
    </script>
    <script
        src="/frontend/theme1/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js">
    </script>
    <script src="/frontend/theme1/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js">
    </script>
    <script src="/frontend/theme1/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js">
    </script>
    <script src="/frontend/theme1/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js">
    </script>
    <script src="/frontend/theme1/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js">
    </script>
    <script src="/frontend/theme1/js/rev.slider.js"></script>
    <script>
        jQuery(document).ready(function() {
            'use strict';
            dz_rev_slider_1();
            $('.lazy').Lazy();
        }); /*ready*/

    </script>
</body>

</html>
