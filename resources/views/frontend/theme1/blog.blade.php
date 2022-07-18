@extends('frontend.theme1.master')
@section('content')

<div class="page-content bg-gray">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(/frontend/theme1/images/banner/banner1.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Blog</h1>
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
    <!-- contact area -->
    <div class="content-area bg-gray">
        <div class="container">
            <!-- Blog half image -->

            @foreach ($blogs as $blog)

            <div class="blog-post blog-md clearfix shadow bg-white">
                <div class="dlab-post-media dlab-img-effect zoom-slow">
                    <a href="{{route('post',['username' => $school->username, 'slug' => $blog->slug])}}"><img src="/uploads/frontend/{{$school->username }}/{{$blog->image}}" alt="" style="width:600px;height:200px;"></a>
                </div>
                <div class="dlab-post-info">
                    <div class="dlab-post-meta">
                        <ul>
                            <li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">{{$blog['user']['first_name']}} {{$blog['user']['last_name']}}</a> </li>
                            <li class="post-tag"> <a href="javascript:void(0);">News</a> </li>
                        </ul>
                    </div>
                    <div class="dlab-post-title ">
                        <h4 class="post-title"><a href="{{route('post',['username' => $school->username, 'slug' => $blog->slug])}}">{{$blog->title}}</a></h4>
                    </div>
                    <div class="dlab-post-text">
                        <p>{!! Str::limit($blog->body, 150, '...') !!}</p>
                    </div>
                    <div class="post-footer">
                        <div class="dlab-post-meta">
                            <ul>
                                <li class="post-date"> <i class="la la-clock"></i> <strong>{{$blog->created_at->format('d F Y')}}</strong></li>
                            </ul>
                        </div>
                        <ul class="dlab-social-icon dez-border">
                            <li><a class="site-button facebook circle-sm fa fa-facebook" href="javascript:void(0);"></a></li>
                            <li><a class="site-button twitter circle-sm fa fa-twitter " href="javascript:void(0);"></a></li>
                            <li><a class="site-button linkedin circle-sm fa fa-linkedin " href="javascript:void(0);"></a></li>
                            <li><a class="site-button instagram  circle-sm fa fa-instagram  " href="javascript:void(0);"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Blog half image END -->
            <!-- Pagination  -->
            <div class="pagination-bx rounded-sm primary clearfix text-center">
                <ul class="pagination">
                    <li class="previous"><a href="javascript:void(0);"><i class="ti-arrow-left"></i> Prev</a></li>
                    <li class="active"><a href="javascript:void(0);">1</a></li>
                    <li><a href="javascript:void(0);">2</a></li>
                    <li><a href="javascript:void(0);">3</a></li>
                    <li class="next"><a href="javascript:void(0);">Next <i class="ti-arrow-right"></i></a></li>
                </ul>
            </div>
            <!-- Pagination END -->
        </div>
    </div>
</div>


@endsection
