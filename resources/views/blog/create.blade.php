
@extends('layout.master')
@section('PageTitle','Blog')
@section('content')


<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">

          <div class="col-lg-9">
                <div class="iq-card">
                   <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                         <h4 class="card-title">New Post</h4>
                      </div>
                   </div>
                   <div class="iq-card-body">
                      <div class="new-user-info">
                         <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                               <div class="form-group col-md-12">
                                  <label for="title">Title:</label>
                                  <input type="text" class="form-control form-control-sm" id="title" placeholder="Post Title" name="title" required>
                               </div>
                               <div class="form-group col-md-12">
                                  <label for="slug">Slug:</label>
                                  <input type="text" class="form-control form-control-sm" id="slug" placeholder="Slug" name="slug" required>
                               </div>

                               <div class="form-group col-md-12">
                                <label for="body">Body:</label>
                                <textarea class="form-control form-control-sm" id="body"  rows="5" name="body" required></textarea>
                             </div>
                            </div>
                            <div class="checkbox">
                               <label><input class="mr-2" type="checkbox" name="published" checked>Published</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Post</button>
                      </div>
                   </div>
                </div>
          </div>


          <div class="col-lg-3">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Featured Image</h4>
                  </div>
               </div>
               <div class="iq-card-body">

                     <div class="form-group">
                        <div class="add-img-user profile-img-edit">
                           <img class="profile-pic img-fluid" src="/images/user/11.png" alt="profile-pic">
                           <div class="p-image">
                             <a href="javascript:void();" class="upload-button btn iq-bg-primary">File Upload</a>
                             <input class="file-upload" type="file" accept="image/*" name="image" required>
                          </div>
                        </div>
                       <div class="img-extension mt-3">
                          <div class="d-inline-block align-items-center">
                              <span>Only</span>
                             <a href="javascript:void();">.jpg</a>
                             <a href="javascript:void();">.png</a>
                             <a href="javascript:void();">.jpeg</a>
                             <span>allowed</span>
                          </div>
                       </div>
                     </div>

                  </form>
               </div>
            </div>
      </div>


       </div>
    </div>
 </div>
 </div>
 @endsection
