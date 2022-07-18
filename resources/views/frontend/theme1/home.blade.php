@extends('frontend.theme1.master')
@section('content')

   <!-- Content -->
   <div class="page-content bg-white">
    <!-- Main Slider -->
    <div class="rev-slider">
        <div id="rev_slider_1164_1_wrapper" class="rev_slider_wrapper fullscreen-container"
            data-alias="exploration-header" data-source="gallery"
            style="background-color:transparent;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
            <div id="rev_slider_1164_1" class="rev_slider fullscreenbanner" style="display:none;"
                data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-3204" data-transition="slideoververtical" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                        data-easeout="default" data-masterspeed="default"
                        data-thumb="/uploads/frontend/{{ $school->username }}/{{ $frontend->slider1 }}"
                        data-rotate="0" data-fstransition="fade" data-fsmasterspeed="2000" data-fsslotamount="7"
                        data-saveperformance="off" data-title=""
                        data-param1="What our team has found in the wild" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                        data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="/uploads/frontend/{{ $school->username }}/{{ $frontend->slider1 }}" alt=""
                            data-lazyload="/uploads/frontend/{{ $school->username }}/{{ $frontend->slider1 }}"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="6" class="rev-slidebg" data-no-retina>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper" id="slide-101-layer-14"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                            data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                            data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                            data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1500,"frame":"999","to":"opacity:0;","ease":"Power4.easeIn"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5;font-family:Open Sans; background-color:rgba(0,0,0,0.15); background-size:100%; background-repeat:no-repeat; background-position:bottom;">
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption" id="slide-3204-layer-2"
                            data-x="['center','center','center','center']"
                            data-hoffset="['-210','-180','0','0']"
                            data-y="['middle','middle','middle','middle']"
                            data-voffset="['-80','-5','-180','-150']" data-width="['700','600','600','260']"
                            data-fontsize="['60','45','30','24']" data-lineheight="['70','45','36','30']"
                            data-height="none" data-whitespace="normal" data-type="text" data-basealign="slide"
                            data-responsive_offset="off" data-responsive="off"
                            data-textAlign="['left','left','center','center']"
                            data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 7; white-space: normal; color:#fff; font-family: 'Poppins', serif; border-width:0px; font-weight:600; font-family:'Merriweather', serif;">
                            {!! $frontend->banner_heading !!}
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="slide-100-layer-5"
                            data-x="['right','right','middle','middle']" data-hoffset="['-330','-400','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']"
                            data-voffset="['-40','-40','-20','-100']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                            data-frames='[{"delay":250,"speed":5000,"frame":"0","from":"y:50px;rZ:5deg;opacity:0;fb:50px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;">
                            <div class="rs-looped rs-wave" data-speed="5" data-angle="0" data-radius="3px"
                                data-origin="50% 50%">
                                <img src="/uploads/frontend/{{ $school->username }}/{{ $frontend->slider2 }}"
                                    alt="" data-ww="['965px','965px','500px','300px']"
                                    data-hh="['894px','894px','463px','278px']" width="407" height="200"
                                    data-no-retina>
                            </div>
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption  " id="slide-3204-layer-3"
                            data-x="['center','center','center','center']"
                            data-hoffset="['-255','-230','0','0']"
                            data-y="['middle','middle','middle','middle']"
                            data-voffset="['50','40','-100','-60']" data-width="['600','500','500','350']"
                            data-fontsize="['18','16','14','14']" data-lineheight="['30','26','24','24']"
                            data-height="none" data-whitespace="normal" data-type="text" data-basealign="slide"
                            data-responsive_offset="off" data-responsive="off"
                            data-frames='[{"from":"y:50px;opacity:0;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','center','center']" data-paddingtop="[0,100,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            style="z-index: 7; white-space: normal; color:#fff; font-family:'Montserrat', sans-serif; border-width:0px; font-weight:400;">
                            {{ @$frontend->banner_text }} </div>
                        <!-- LAYER NR. 5 -->
                        <a class="tp-caption rev-btn bg-primary btnhover13 tp-resizeme" href="about-1.html"
                            target="_blank" id="slide-411-layer-13"
                            data-x="['center','center','center','center']"
                            data-hoffset="['-470','-400','-90','-70']"
                            data-y="['center','center','middle','middle']"
                            data-voffset="['150','180','-20','40']" data-width="none" data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','nowrap']" data-type="button"
                            data-actions='' data-basealign="slide" data-responsive_offset="off"
                            data-responsive="off"
                            data-frames='[{"delay":"+690","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255, 255, 255, 1.00);bg:var(--color-hover);"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                            data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[35,35,35,20]"
                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[35,35,35,20]"
                            style="z-index: 13; white-space: normal; font-size: 17px; line-height: 50px; font-weight: 500; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:Poppins;border-color:rgba(255, 255, 255, 1.00);border-style:solid;border-width:0;border-radius:4px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Read
                            More
                        </a>
                        <a class="tp-caption rev-btn tp-resizeme btnhover13" href="about-1.html" target="_blank"
                            id="slide-411-layer-12" data-x="['center','center','center','center']"
                            data-hoffset="['-290','-230','90','70']"
                            data-y="['center','center','middle','middle']"
                            data-voffset="['150','180','-20','40']" data-width="none" data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','nowrap']" data-type="button"
                            data-actions='' data-basealign="slide" data-responsive_offset="off"
                            data-responsive="off"
                            data-frames='[{"delay":"+690","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                            data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[34,34,34,19]"
                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[34,34,34,19]"
                            style="z-index: 13; white-space: normal; font-size: 17px; line-height: 50px; font-weight: 500; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:Poppins;background-color:rgba(255, 255, 255, 0);border-color:rgba(255, 255, 255, 1.00);border-style:solid;border-width:1px 1px 1px 1px;border-radius:4px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">About
                            Us
                        </a>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div><!-- END REVOLUTION SLIDER -->
    </div>
    <!-- Main Slider -->
    <!-- contact area -->

</div>
<div class="content-block">
    <!-- Our Services -->
    <div class="section-full bg-white content-inner">
        <div class="container">
            <div class="row service-area-one">
                <div class="col-lg-4 m-b30 hidden-sm">
                    <div class="rdx-thu"><img
                            src="/uploads/frontend/{{ @$school->username }}/{{ @$frontend->picture }}"
                            alt="" style="height: 400px;"></div>
                </div>
                <div class="col-lg-8">
                    <div class="section-head">
                        <h2 class="title">{{ @$frontend->welcome_heading }}</h2>
                        <p>{{ @$frontend->welcome_text }}</p>
                    </div>
                    <div class="row">

                        <div class="col-md-6 col-sm-6 m-b30">
                            <div class="icon-bx-wraper left">
                                <div class="icon-bx-xs bg-primary radius"> <a href="#" class="icon-cell"><i
                                            class="fa {{ @$frontend->bullet1_icon }}"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="rdx-tilte">{{ @$frontend->bullet1_heading }}</h5>
                                    <p>{{ @$frontend->bullet1_text }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 m-b30">
                            <div class="icon-bx-wraper left">
                                <div class="icon-bx-xs bg-primary radius"> <a href="#" class="icon-cell"><i
                                            class="fa {{ @$frontend->bullet2_icon }}"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="rdx-tilte">{{ @$frontend->bullet2_heading }} </h5>
                                    <p>{{ @$frontend->bullet2_text }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 m-b30">
                            <div class="icon-bx-wraper left">
                                <div class="icon-bx-xs bg-secondry radius"> <a href="#" class="icon-cell"><i
                                            class="fa {{ @$frontend->bullet3_icon }}"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="rdx-tilte">{{ @$frontend->bullet3_heading }}</h5>
                                    <p>{{ @$frontend->bullet3_text }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 m-b30">
                            <div class="icon-bx-wraper left serb">
                                <div class="icon-bx-xs bg-secondry radius"> <a href="#" class="icon-cell"><i
                                            class="fa {{ @$frontend->bullet4_icon }}"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="rdx-tilte">{{ @$frontend->bullet4_heading }}</h5>
                                    <p>{{ @$frontend->bullet4_text }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services End -->
    <!-- Company staus -->
    <div class="section-full text-white bg-img-fix content-inner overlay-black-dark counter-staus-box"
        style="background-image:url(frontend/theme1/images/background/bg12.jpg);">
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
    <!-- Team member -->
    <div class="section-full bg-gray content-inner">
        <div class="container">
            <div class="section-head text-center ">
                <h2 class="title"> Meet The Teacher</h2>
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
    <!-- Team member End -->
    <!-- Testimonials blog -->
    {{-- <div class="section-full overlay-black-middle bg-secondry content-inner-2 wow fadeIn"
        data-wow-duration="2s" data-wow-delay="0.2s"
        style="background-image:url(/frontend/theme1/images/background/map-bg.png);">
        <div class="container">
            <div class="section-head text-white text-center">
                <h2 class="title">What People Are Saying</h2>
                <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the
                    industry's standard dummy text ever since the been when an unknown printer.</p>
            </div>
            <div class="section-content">
                <div
                    class="testimonial-two-dots owl-carousel owl-none owl-theme owl-dots-primary-full owl-loaded owl-drag">
                    <div class="item">
                        <div class="testimonial-15 quote-right">
                            <div class="testimonial-text ">
                                <p>There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly believable. If you are
                                    going to use a passage of Lorem Ipsum</p>
                            </div>
                            <div class="testimonial-detail clearfix">
                                <div class="testimonial-pic radius"><img
                                        src="/frontend/theme1/images/testimonials/pic3.jpg" width="100"
                                        height="100" alt=""></div>
                                <strong class="testimonial-name">David Matin</strong> <span
                                    class="testimonial-position">Student</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-15 quote-right">
                            <div class="testimonial-text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly believable. If you are
                                    going to use a passage of Lorem Ipsum</p>
                            </div>
                            <div class="testimonial-detail clearfix">
                                <div class="testimonial-pic radius"><img
                                        src="/frontend/theme1/images/testimonials/pic2.jpg" width="100"
                                        height="100" alt=""></div>
                                <strong class="testimonial-name">David Matin</strong> <span
                                    class="testimonial-position">Student</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-15 quote-right">
                            <div class="testimonial-text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly believable. If you are
                                    going to use a passage of Lorem Ipsum</p>
                            </div>
                            <div class="testimonial-detail clearfix">
                                <div class="testimonial-pic radius"><img
                                        src="/frontend/theme1/images/testimonials/pic1.jpg" width="100"
                                        height="100" alt=""></div>
                                <strong class="testimonial-name">David Matin</strong> <span
                                    class="testimonial-position">Student</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-15 quote-right">
                            <div class="testimonial-text ">
                                <p>There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly believable. If you are
                                    going to use a passage of Lorem Ipsum</p>
                            </div>
                            <div class="testimonial-detail clearfix">
                                <div class="testimonial-pic radius"><img
                                        src="/frontend/theme1/images/testimonials/pic3.jpg" width="100"
                                        height="100" alt=""></div>
                                <strong class="testimonial-name">David Matin</strong> <span
                                    class="testimonial-position">Student</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-15 quote-right">
                            <div class="testimonial-text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly believable. If you are
                                    going to use a passage of Lorem Ipsum</p>
                            </div>
                            <div class="testimonial-detail clearfix">
                                <div class="testimonial-pic radius"><img
                                        src="/frontend/theme1/images/testimonials/pic2.jpg" width="100"
                                        height="100" alt=""></div>
                                <strong class="testimonial-name">David Matin</strong> <span
                                    class="testimonial-position">Student</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-15 quote-right">
                            <div class="testimonial-text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly believable. If you are
                                    going to use a passage of Lorem Ipsum</p>
                            </div>
                            <div class="testimonial-detail clearfix">
                                <div class="testimonial-pic radius"><img
                                        src="/frontend/theme1/images/testimonials/pic1.jpg" width="100"
                                        height="100" alt=""></div>
                                <strong class="testimonial-name">David Matin</strong> <span
                                    class="testimonial-position">Student</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonials blog End -->
    <!-- Latest blog -->
    <div class="section-full content-inner bg-gray wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">Latest blog post</h2>
                <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the
                    industry's standard dummy text ever since the been when an unknown printer.</p>
            </div>
            <div class="blog-carousel owl-none owl-carousel">

                @foreach ($blogs as $blog)


                <div class="item">
                    <div class="blog-post blog-grid blog-rounded blog-effect1 post-style-1">
                        <div class="dlab-post-media dlab-img-effect">
                            <a href="{{route('post',['username' => $school->username, 'slug' => $blog->slug])}}"><img src="/uploads/frontend/{{$school->username }}/{{$blog->image}}"
                                    alt="" style="width: 600px; height: 400px;"></a>
                        </div>
                        <div class="dlab-info p-a20">
                            <div class="dlab-post-meta">
                                <ul>
                                    <li class="post-author"> <i class="la la-user-circle"></i> By <a
                                            href="javascript:void(0);">{{$blog['user']['first_name']}} {{$blog['user']['last_name']}}</a> </li>
                                    <li class="post-tag"> <a href="javascript:void(0);">News</a> </li>
                                </ul>
                            </div>
                            <div class="dlab-post-title">
                                <h4 class="post-title"><a href="{{route('post',['username' => $school->username, 'slug' => $blog->slug])}}">{{$blog->title}}</a></h4>
                            </div>
                            <div class="dlab-post-text">
                                <p>{!! Str::limit($blog->body, 100, '...') !!}</p>
                            </div>
                            <div class="post-footer">
                                <div class="dlab-post-meta">
                                    <ul>
                                        <li class="post-date"> <i class="la la-clock"></i> <strong>{{$blog->created_at->format('d F Y')}}</strong> </li>
                                    </ul>
                                </div>
                                <ul class="dlab-social-icon dez-border">
                                    <li><a class="site-button facebook circle-sm fa fa-facebook"
                                            href="javascript:void(0);"></a></li>
                                    <li><a class="site-button twitter circle-sm fa fa-twitter "
                                            href="javascript:void(0);"></a></li>
                                    <li><a class="site-button linkedin circle-sm fa fa-linkedin "
                                            href="javascript:void(0);"></a></li>
                                    <li><a class="site-button instagram circle-sm fa fa-instagram  "
                                            href="javascript:void(0);"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach




            </div>
        </div>
    </div>
    <!-- Latest blog END -->

</div>
@endsection
