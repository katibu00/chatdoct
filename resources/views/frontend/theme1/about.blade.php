@extends('frontend.theme1.master')
@section('content')

<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle text-center bg-pt" style="background-image:url(/frontend/theme1/images/banner/banner1.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry align-m text-center">
                <h1 class="text-white">About Us</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{route('home',$school->username)}}">Home</a></li>
                        <li>About</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- About Services info -->
        <div class="section-full content-inner bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
            <div class="container">
                <div class="row about-one align-items-center">
                    <div class="col-lg-6 m-b30">
                        <div class="about-img">
                            <img src="/uploads/frontend/{{ $school->username }}/{{ @$frontend->about_image }}" alt="">
                            {{-- <div class="video-bx">
                                <a href="https://www.youtube.com/watch?v=_FRZVScwggM" class="popup-youtube bg-primary"><i class="fa fa-play"></i></a>
                            </div> --}}
                            <div class="info-bx">
                                <p>{{$school->username}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 m-b30">
                        <div class="content-bx">
                            <h2 class="m-b15 title">{!! $frontend->about_heading !!}</h2>
                            <p class="m-b20">{{$frontend->about_text}}</p>
                            <h6 class="m-b20">{{$frontend->about_subtitle}}</h6>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="site-button m-r30 radius-no">Read More</a>
                                <div class="phone">
                                    <i class="fa fa-volume-control-phone"></i>
                                    <span>{{$school->phone_first}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Services info END -->
           <!-- Company staus -->
            <div class="section-full text-white bg-img-fix content-inner overlay-black-dark counter-staus-box"
            style="background-image:url(/frontend/theme1/images/background/bg12.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-6 col-6 m-b30 wow fadeInUp counter-style-5"
                        data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="icon-bx-wraper center">
                            <div class="icon-content">
                                <h2 class="dlab-tilte counter">{{ @$frontend->counter1 }}</h2>
                                <p>{{ @$frontend->counter1_text }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-6 m-b30 wow fadeInUp counter-style-5"
                        data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="icon-bx-wraper center">
                            <div class="icon-content">
                                <h2 class="dlab-tilte counter">{{ @$frontend->counter2 }}</h2>
                                <p>{{ @$frontend->counter2_text }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-6 m-b30 wow fadeInUp counter-style-5"
                        data-wow-duration="2s" data-wow-delay="0.6s">
                        <div class="icon-bx-wraper center">
                            <div class="icon-content">
                                <h2 class="dlab-tilte counter">{{ @$frontend->counter3 }}</h2>
                                <p>{{ @$frontend->counter3_text }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-6 m-b30 wow fadeInUp counter-style-5"
                        data-wow-duration="2s" data-wow-delay="0.6s">
                        <div class="icon-bx-wraper center">
                            <div class="icon-content">
                                <h2 class="dlab-tilte counter">{{ @$frontend->counter4 }}</h2>
                                <p>{{ @$frontend->counter4_text }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Company staus End -->
        <!-- Team Section -->
        <div class="section-full text-center bg-white content-inner">
            <div class="container">
                <div class="section-head text-black text-center">
                    <h2 class="title">Our Teacher</h2>
                    <p>Meet our Gallant Teachers who are fully qualified and tirelessly dedicated to developing the best in your child.</p>
                </div>
                <div class="row">


                    @foreach ($teachers as $teacher)
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s"
                        data-wow-delay="0.2s">
                        <div class="dlab-box m-b30 dlab-team1">
                            <div class="dlab-media">
                                <a href="teachers-profile.html">
                                    <img width="358" height="660" alt=""
                                        src="/uploads/users/{{$teacher->image}}" class="lazy"
                                        data-src="/uploads/users/{{$teacher->image}}">
                                </a>
                            </div>
                            <div class="dlab-info">
                                <h4 class="dlab-title"><a href="#">{{$teacher->first_name}} {{$teacher->middle_name}} {{$teacher->last_name}}</a></h4>
                                <span class="dlab-position">{{$teacher->usertype}}</span>
                                <ul class="dlab-social-icon dez-border">
                                    <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                    <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                    <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                    <li><a class="fa fa-pinterest" href="javascript:void(0);"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

                </div>
            </div>
        </div>
        <!-- Team Section END -->
        <!-- Latest blog -->

        <!-- Latest blog END -->
    </div>
    <!-- contact area END -->
</div>
@endsection
