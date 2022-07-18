@extends('layout.master')
@section('PageTitle','Blog')
@section('content')

<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card">
                   <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                         <h4 class="card-title">Blog Posts</h4>
                      </div>
                      <a class="btn btn-primary pull-right  btn-sm" href="{{ route('blog.create') }}"><i class="fa fa-user"></i> Add New Post</a>
                   </div>
                   <div class="iq-card-body">
                      <div class="table-responsive">
                        <hr>
                         <table id="example1" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                           <thead>
                               <tr>
                                  <th>S/N</th>
                                  <th>Featured Image</th>
                                  <th>Title</th>
                                  <th>Author</th>
                                  <th>Date</th>
                                  <th>Status</th>
                                  <th>Action</th>
                               </tr>
                           </thead>

                           <tbody>
                               @foreach ($blogs as $key => $blog )
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td><img src="/uploads/frontend/{{$school->username }}/{{$blog->image}}" alt="" style="width:50px;height:50px;"></td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog['user']['first_name']}} {{$blog['user']['middle_name']}} {{$blog['user']['last_name']}}</td>
                                        <td>{{$blog->created_at->format('F d, Y')}}</td>
                                        <td>@if ($blog->status = 1)
                                                Published @else Not Published
                                        @endif</td>

                                        <td></td>
                                    </tr>


                               @endforeach
                           </tbody>

                         </table>
                      </div>
                   </div>
                </div>
          </div>
       </div>
    </div>
 </div>
 </div>
 @endsection
