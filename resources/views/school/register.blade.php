@extends('layout.master')
@section('PageTitle', 'Register New School')
@section('content')


<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-3">
                <div class="iq-card">
                   <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                         <h4 class="card-title">School Admin</h4>
                      </div>
                   </div>
                   <div class="iq-card-body">

                      <form action="{{route('school.register')}}" method="post" enctype="multipart/form-data">
                        @csrf
                         <div class="form-group">
                            <div class="profile-img-edit">
                                <img class="profile-pic" src="/uploads/users/default.png" alt="profile-pic">
                                <div class="p-image">
                                    <i class="ri-pencil-line upload-button"></i>
                                    <input class="file-upload" name="logo" type="file"  accept="image/*" />
                                </div>
                            </div>

                         </div>
                         <div class="form-group">
                            <label for="fname">First Name:</label>
                            <input type="text" class="form-control" id="fname" name="first_name" placeholder="First Name" required>
                            @error('first_name')
                            <div style="color: red;">{{$message}}</div>
                           @enderror
                         </div>
                         <div class="form-group">
                            <label for="furl">Last Name:</label>
                            <input type="text" class="form-control" id="furl" name="last_name" placeholder="Last Name" required>
                            @error('last_name')
                              <div style="color: red;">{{$message}}</div>
                            @enderror
                         </div>
                         <div class="form-group">
                            <label for="turl">Email:</label>
                            <input type="email" class="form-control" id="turl" name="email" placeholder="Email" required>
                            @error('email')
                             <div style="color: red;">{{$message}}</div>
                           @enderror
                         </div>
                         <div class="form-group">
                            <label for="instaurl">Password:</label>
                            <input type="text" class="form-control" id="instaurl" name="password" placeholder="Password" required>
                         </div>


                   </div>
                </div>
          </div>
          <div class="col-lg-9">
                <div class="iq-card">
                   <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                         <h4 class="card-title">New School Information</h4>
                      </div>
                   </div>
                   <div class="iq-card-body">
                      <div class="new-user-info">

                            <div class="row">
                               <div class="form-group col-md-12">
                                  <label for="fname">School Name:</label>
                                  <input type="text" class="form-control" id="fname" name="name" placeholder="School Name" required>
                                  @error('name')
                                  <div style="color: red;">{{$message}}</div>
                               @enderror
                               </div>
                               <div class="form-group col-md-12">
                                  <label for="lname">Address:</label>
                                  <input type="text" class="form-control" id="lname" name="address" placeholder="Address" required>
                               </div>
                               <div class="form-group col-md-6">
                                  <label for="add1">Phone Number:</label>
                                  <input type="text" class="form-control" id="add1" name="phone_number" placeholder="Phone Number" required>
                                  @error('phone_number')
                                  <div style="color: red;">{{$message}}</div>
                                 @enderror
                               </div>
                               <div class="form-group col-md-6">
                                  <label for="add2">Alternate Phone Number:</label>
                                  <input type="text" class="form-control" id="add2" name="alternate_phone" placeholder="Alternate Phone Number">
                               </div>
                               <div class="form-group col-md-6">
                                <label for="altconno">Email Address:</label>
                                <input type="text" class="form-control" id="altconno" name="email2" placeholder="Email Address" required>
                                @error('email2')
                                  <div style="color: red;">{{$message}}</div>
                                @enderror
                             </div>
                             <div class="form-group col-md-6">
                                <label for="mobno">Website:</label>
                                <input type="text" class="form-control" id="mobno" name="website" placeholder="Website" required>
                                @error('website')
                                <div style="color: red;">{{$message}}</div>
                              @enderror
                             </div>
                             <div class="form-group col-md-6">
                                <label for="cname">Username:</label>
                                <input type="text" class="form-control" id="cname" name="username" placeholder="Username" required>
                                @error('username')
                                <div style="color: red;">{{$message}}</div>
                                @enderror
                             </div>
                               <div class="form-group col-md-6">
                                  <label for="cname">Service Fee/Student:</label>
                                  <input type="text" class="form-control" id="cname" name="service_fee" placeholder="Service Fee/Student">
                                  @error('service_fee')
                                  <div style="color: red;">{{$message}}</div>
                                 @enderror
                               </div>

                            <button type="submit" class="btn btn-primary">Add New School</button>
                         </form>
                      </div>
                   </div>
                </div>
          </div>
       </div>
    </div>
 </div>
@endsection
