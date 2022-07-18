@extends('frontend.theme1.master')
@section('content')

<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(/frontend/theme1/images/banner/bnr1.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">{{$blog->title}}</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{route('home',$school->username)}}">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <div class="content-area">
        <div class="container">
            <div class="row">
                <!-- Left part start -->
                <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                    <!-- blog start -->
                    <div class="blog-post blog-single sidebar">
                        <div class="dlab-info">
                            <div class="dlab-post-meta">
                                <ul>
                                    <li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">{{$blog['user']['first_name']}} {{$blog['user']['middle_name']}} {{$blog['user']['last_name']}}</a> </li>
                                    <li class="post-date"> <i class="la la-clock"></i> <strong>{{$blog->created_at->format('d F Y')}}</strong></li>
                                    <li class="post-tag"> <a href="javascript:void(0);">News</a> </li>
                                </ul>
                            </div>
                            <h2 class="dlab-title">{{$blog->title}}</h2>
                            <div class="dlab-media">
                                <a href="javascript:;"><img src="/uploads/frontend/{{$school->username }}/{{$blog->image}}" alt="Featured Image" style="width: 800px; height: 500px;"></a>
                            </div>
                            <div class="dlab-post-text text">

                                <p>{{$blog->body}} </p>

                            </div>
                            <div class="post-footer">

                                <div class="share-post">
                                    <ul class="list-inline m-b0">
                                        <li><a href="javascript:void(0);" class="site-button sharp radius-xl facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="javascript:void(0);" class="site-button sharp radius-xl instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="javascript:void(0);" class="site-button sharp radius-xl twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0);" class="site-button sharp radius-xl linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form -->

                    <!-- blog END -->
                </div>
                <!-- Left part END -->
                <!-- Side bar start -->
                <div class="col-xl-3 col-lg-4 col-md-12">
                    <aside class="side-bar sticky-top">
                        <div class="widget">
                            <h5 class="widget-title style-1">Search</h5>
                            <div class="search-bx style-1">
                                <form role="search" method="post">
                                    <div class="input-group">
                                        <input name="text" class="form-control" placeholder="Enter your keywords..." type="text">
                                        <span class="input-group-btn">
                                            <button type="submit" class="fa fa-search site-button sharp radius-no"></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget recent-posts-entry">
                            <h5 class="widget-title style-1">Recent Posts</h5>
                            <div class="widget-post-bx">


                                @foreach ($recents as $recent)

                                <div class="widget-post clearfix">
                                    <div class="dlab-post-media">
                                        <img src="/uploads/frontend/{{$school->username }}/{{$recent->image}}" width="200" height="143" alt="">
                                    </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-date"> <i class="la la-clock"></i> <strong>{{$blog->created_at->format('d F Y')}}</strong></li>
                                            </ul>
                                        </div>
                                        <div class="dlab-post-header">
                                            <h6 class="post-title"><a href="{{route('post',['username' => $school->username, 'slug' => $recent->slug])}}"> {{$recent->title}} </a></h6>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>



                    </aside>
                </div>
                <!-- Side bar END -->
            </div>
        </div>
    </div>
</div>


@endsection
