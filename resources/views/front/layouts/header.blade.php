<header id="header" class="header-size-sm" data-sticky-shrink="false">
    <div class="container">
        <div class="header-row">

            <!-- Logo
============================================= -->
            <div id="logo" class="ms-auto ms-lg-0 me-lg-auto">
                <a href="{{ route('homepage') }}" class="standard-logo"><img
                        src="/uploads/logo.png" alt="Chatdoct Logo"></a>
                <a href="{{ route('homepage') }}" class="retina-logo"><img
                        src="/uploads/logo.png" alt="Chatdoct Logo"></a>
            </div><!-- #logo end -->

            <div class="header-misc d-none d-lg-flex">

                <ul class="header-extras">
                    <li>
                        <i class="i-plain icon-call m-0"></i>
                        <div class="he-text">
                            Call Us
                            <span>(234) 0809 697 8454</span>
                        </div>
                    </li>
                    <li>
                        <i class="i-plain icon-line2-envelope m-0"></i>
                        <div class="he-text">
                            Email Us
                            <span>support@chatdoct.com</span>
                        </div>
                    </li>
                    <li>
                        <i class="i-plain icon-line-clock m-0"></i>
                        <div class="he-text">
                            We'are Open
                            <span>24/7/365</span>
                        </div>
                    </li>
                </ul>

            </div>

        </div>
    </div>

    <div id="header-wrap">
        <div class="container">
            <div
                class="header-row justify-content-between flex-row-reverse flex-lg-row justify-content-lg-center">

                <div class="header-misc">

                    <!-- Top Search
============================================= -->
                    <div id="top-search" class="header-misc-icon">
                        <a href="/front/#" id="top-search-trigger"><i class="icon-line-search"></i><i
                                class="icon-line-cross"></i></a>
                    </div><!-- #top-search end -->

                </div>

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100">
                        <path
                            d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                        </path>
                        <path d="m 30,50 h 40"></path>
                        <path
                            d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                        </path>
                    </svg>
                </div>

                <!-- Primary Navigation
============================================= -->
                <nav class="primary-menu with-arrows">

                    <ul class="menu-container">
                        <li class="menu-item current"><a class="menu-link"
                                href="{{route('homepage')}}">
                                <div>Home</div>
                            </a></li>
                        <li class="menu-item"><a class="menu-link"
                                href="#">
                                <div>Departments</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item"><a class="menu-link" href="/front/#">
                                        <div>General practitioner</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/front/#">
                                        <div>Internal Medicine</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/front/#">
                                        <div></div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/front/#">
                                        <div>Family medicine </div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/front/#">
                                        <div>Paediatrics</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/front/#">
                                        <div>Gynecology</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/front/#">
                                        <div>Obstetrics</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/front/#">
                                        <div>Orthopaedics</div>
                                    </a></li>
                         
                            </ul>
                        </li>
                        <li class="menu-item"><a class="menu-link"
                                href="{{route('about')}}">
                                <div>About Us</div>
                            </a></li>
                        
                        <li class="menu-item"><a class="menu-link"
                                href="{{route('contact')}}">
                                <div>Contact</div>
                            </a></li>
                    </ul>

                </nav><!-- #primary-menu end -->

                <form class="top-search-form" action="search.html" method="get">
                    <input type="text" name="q" class="form-control" value=""
                        placeholder="Type &amp; Hit Enter.." autocomplete="off">
                </form>

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->