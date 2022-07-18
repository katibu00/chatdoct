@extends('layout.master')
@section('PageTitle', 'Edit Institution Information')
@section('content')

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="iq-card">
                        <div class="iq-card-body p-0">
                            <div class="iq-edit-list">
                                <ul class="iq-edit-profile d-flex nav nav-pills">
                                    <li class="col-md-3 p-0">
                                        <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                            Home
                                        </a>
                                    </li>
                                    <li class="col-md-2 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                            About
                                        </a>
                                    </li>
                                    <li class="col-md-2 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#emailandsms">
                                            Email and SMS
                                        </a>
                                    </li>
                                    <li class="col-md-2 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#other">
                                            Other Settings
                                        </a>
                                    </li>
                                    <li class="col-md-3 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#manage-contact">
                                            Payment Gateway
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="iq-edit-list-data">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Banner Section</h4>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="iq-card-body">
                                        <form action="{{ route('home.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row align-items-center">

                                                <div class="form-group col-md-3">
                                                    <label>Slider 1</label>
                                                    <img id="showImage1"
                                                        src="/uploads/frontend/{{ $institution->username }}/{{ @$frontend->slider1 }}"
                                                        style="width: 200px; height: 100px; margin-bottom: 5px;">
                                                    <input name="slider1" id="image1" type="file" accept="image/*" />
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <label>Slider 3</label>
                                                    <img id="showImage2"
                                                        src="/uploads/frontend/{{ $institution->username }}/{{ @$frontend->slider2 }}"
                                                        style="width: 200px; height: 100px;margin-bottom: 5px;">
                                                    <input name="slider2" id="image2" type="file" accept="image/*" />
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <label>Slider 3</label>
                                                    <img id="showImage3"
                                                        src="/uploads/frontend/{{ $institution->username }}/{{ @$frontend->slider3 }}"
                                                        style="width: 200px; height: 100px;margin-bottom: 5px;">
                                                    <input name="slider3" id="image3" type="file" accept="image/*" />
                                                </div>

                                            </div>

                                            <div class="form-group row align-items-center">

                                                <div class="form-group col-sm-4">
                                                    <label for="fname">Banner Heading:</label>
                                                    <input type="text" class="form-control form-control-sm" name="banner_heading" id="fname"
                                                        value="{{ @$frontend->banner_heading }}">
                                                </div>
                                                <div class="form-group col-sm-8">
                                                    <label for="fname">Banner Text:</label>
                                                    <input type="text" class="form-control form-control-sm" name="banner_text" id="fname"
                                                        value="{{ @$frontend->banner_text }}">
                                                </div>

                                            </div>

                                            <div class="iq-header-title">
                                                <h4 class="card-title">Welcome Section</h4>
                                            </div>
                                            <hr>
                                            <div class=" row align-items-center">

                                                <div class="form-group col-md-3">
                                                    <img id="showImage4"
                                                        src="/uploads/frontend/{{ $institution->username }}/{{ @$frontend->picture }}"
                                                        style="width: 100px; height: 150px;margin-bottom: 5px;">
                                                    <input name="picture" id="image4" type="file" accept="image/*" />
                                                </div>

                                                <div class="form-group col-sm-4">
                                                    <label for="fname">Welcome Heading:</label>
                                                    <input type="text" class="form-control form-control-sm" name="welcome_heading" id="fname"
                                                        value="{{ @$frontend->welcome_heading }}">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label for="fname">Welcome Text:</label>
                                                    <textarea class="form-control form-control-sm" name="welcome_text" cols="1"
                                                        rows="2">{{ @$frontend->welcome_text }}</textarea>
                                                </div>

                                            </div>

                                            <div class="form-group row align-items-center">
                                                <div class="form-group col-sm-3">
                                                    <label>Bullet 1 Heading:</label>
                                                    <input type="text" class="form-control form-control-sm form-control-sm" name="bullet1_heading"
                                                        id="fname" value="{{ @$frontend->bullet1_heading }}">
                                                </div>
                                                <div class="form-group col-sm-7">
                                                    <label for="fname">Bullet 1 Text:</label>
                                                    <input type="text" class="form-control form-control-sm" name="bullet1_text" id="fname"
                                                        value="{{ @$frontend->bullet1_text }}">
                                                </div>

                                            <div class="form-group col-sm-2">
                                                <label>Icon:</label>
                                                <input type="text" class="form-control form-control-sm" name="bullet1_icon" id="fname"
                                                    value="{{ @$frontend->bullet1_icon }}">
                                            </div>
                                    </div>

                                    <div class="form-group row align-items-center">
                                        <div class="form-group col-sm-3">
                                            <label>Bullet 2 Heading:</label>
                                            <input type="text" class="form-control form-control-sm" name="bullet2_heading" id="fname"
                                                value="{{ @$frontend->bullet2_heading }}">
                                        </div>
                                        <div class="form-group col-sm-7">
                                            <label for="fname">Bullet 2 Text:</label>
                                            <input type="text" class="form-control form-control-sm" name="bullet2_text" id="fname"
                                                value="{{ @$frontend->bullet2_text }}">
                                        </div>

                                    <div class="form-group col-sm-2">
                                        <label>Icon:</label>
                                        <input type="text" class="form-control form-control-sm" name="bullet2_icon" id="fname"
                                            value="{{ @$frontend->bullet2_icon }}">
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <div class="form-group col-sm-3">
                                        <label>Bullet 3 Heading:</label>
                                        <input type="text" class="form-control form-control-sm" name="bullet3_heading" id="fname"
                                            value="{{ @$frontend->bullet3_heading }}">
                                    </div>
                                    <div class="form-group col-sm-7">
                                        <label for="fname">Bullet 3 Text:</label>
                                        <input type="text" class="form-control form-control-sm" name="bullet3_text" id="fname"
                                            value="{{ @$frontend->bullet3_text }}">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label>Icon:</label>
                                        <input type="text" class="form-control form-control-sm" name="bullet3_icon" id="fname"
                                            value="{{ @$frontend->bullet3_icon }}">
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <div class="form-group col-sm-3">
                                        <label>Bullet 4 Heading:</label>
                                        <input type="text" class="form-control form-control-sm" name="bullet4_heading" id="fname"
                                            value="{{ @$frontend->bullet4_heading }}">
                                    </div>
                                    <div class="form-group col-sm-7">
                                        <label for="fname">Bullet 4 Text:</label>
                                        <input type="text" class="form-control form-control-sm" name="bullet4_text" id="fname"
                                            value="{{ @$frontend->bullet4_text }}">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label>Icon:</label>
                                        <input type="text" class="form-control form-control-sm" name="bullet4_icon" id="fname"
                                            value="{{ @$frontend->bullet4_icon }}">
                                    </div>

                                </div>



                                <div class="iq-header-title">
                                    <h4 class="card-title">Counter Section</h4>
                                </div>
                                <hr>

                                <div class="form-group row align-items-center">
                                    <div class="form-group col-sm-3">
                                        <label>Counter 1 Title:</label>
                                        <input type="text" class="form-control form-control-sm" name="counter1_text" id="fname"
                                            value="{{ @$frontend->counter1_text }}">
                                    </div>
                                    <div class="form-group col-sm-7">
                                        <label for="fname">Number:</label>
                                        <input type="number" class="form-control form-control-sm" name="counter1" id="fname"
                                            value="{{ @$frontend->counter1 }}">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <div class="form-group col-sm-3">
                                        <label>Counter 2 Title:</label>
                                        <input type="text" class="form-control form-control-sm" name="counter2_text" id="fname"
                                            value="{{ @$frontend->counter2_text }}">
                                    </div>
                                    <div class="form-group col-sm-7">
                                        <label for="fname">Number:</label>
                                        <input type="number" class="form-control form-control-sm" name="counter2" id="fname"
                                            value="{{ @$frontend->counter2 }}">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <div class="form-group col-sm-3">
                                        <label>Counter 3 Title:</label>
                                        <input type="text" class="form-control form-control-sm" name="counter3_text" id="fname"
                                            value="{{ @$frontend->counter3_text }}">
                                    </div>
                                    <div class="form-group col-sm-7">
                                        <label for="fname">Number:</label>
                                        <input type="number" class="form-control form-control-sm" name="counter3" id="fname"
                                            value="{{ @$frontend->counter3 }}">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <div class="form-group col-sm-3">
                                        <label>Counter 4 Title:</label>
                                        <input type="text" class="form-control form-control-sm" name="counter4_text" id="fname"
                                            value="{{ @$frontend->counter4_text }}">
                                    </div>
                                    <div class="form-group col-sm-7">
                                        <label for="fname">Number:</label>
                                        <input type="number" class="form-control form-control-sm" name="counter4" id="fname"
                                            value="{{ @$frontend->counter4 }}">
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary mr-2">Save</button>
                                <button type="reset" class="btn iq-bg-danger">Cancle</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">About Us Page</h4>
                                </div><hr>
                            </div>
                            <div class="iq-card-body">
                                <form action="{{ route('about.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class=" row align-items-center">

                                        <div class="form-group col-md-3">
                                            <img id="showImage5"
                                                src="/uploads/frontend/{{ $institution->username }}/{{ @$frontend->about_image }}"
                                                style="width: 100px; height: 150px;margin-bottom: 5px;">
                                            <input name="about_image" id="image5" type="file" accept="image/*" />
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="fname">About Heading:</label>
                                            <input type="text" class="form-control form-control-sm" name="about_heading" id="fname"
                                                value="{{ @$frontend->about_heading }}">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="fname">About Text:</label>
                                            <textarea class="form-control form-control-sm" name="about_text" cols="1"
                                                rows="2">{{ @$frontend->about_text }}</textarea>
                                        </div>
                                    </div>

                                    <div class=" row align-items-center">



                                        <div class="form-group col-sm-6">
                                            <label for="fname">About Subtitle:</label>
                                            <input type="text" class="form-control form-control-sm" name="about_subtitle" id="fname"
                                                value="{{ @$frontend->about_subtitle }}">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="fname">Footer About:</label>
                                            <textarea class="form-control form-control-sm" name="footer_about" cols="1"
                                                rows="2">{{ @$frontend->footer_about }}</textarea>
                                        </div>

                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                                    <button type="reset" class="btn iq-bg-danger">Cancle</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Email and SMS</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <form>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-3" for="emailnotification">Email Notification:</label>
                                        <div class="col-md-9 custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="emailnotification"
                                                checked="">
                                            <label class="custom-control-label" for="emailnotification"></label>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-3" for="smsnotification">SMS Notification:</label>
                                        <div class="col-md-9 custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="smsnotification"
                                                checked="">
                                            <label class="custom-control-label" for="smsnotification"></label>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-3" for="npass">When To Email</label>
                                        <div class="col-md-9">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email01">
                                                <label class="custom-control-label" for="email01">You have new
                                                    notifications.</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email02">
                                                <label class="custom-control-label" for="email02">You're sent a
                                                    direct message</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email03" checked="">
                                                <label class="custom-control-label" for="email03">Someone adds you
                                                    as a connection</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-3" for="npass">When To Escalate Emails</label>
                                        <div class="col-md-9">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email04">
                                                <label class="custom-control-label" for="email04"> Upon new
                                                    order.</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email05">
                                                <label class="custom-control-label" for="email05"> New membership
                                                    approval</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email06" checked="">
                                                <label class="custom-control-label" for="email06"> Member
                                                    registration</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button type="reset" class="btn iq-bg-danger">Cancle</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="other" role="tabpanel">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Other Settings</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <form method="post" action="{{ route('institution.update.other', $institution->id) }}">
                                    @csrf
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-3" for="position">Show Position:</label>
                                        <div class="col-md-9 custom-control custom-switch">
                                            <input type="checkbox" name="show_position" class="custom-control-input"
                                                id="position" {{ $institution->show_position == 'on' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="position"></label>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-3" for="show_attendance">Show Attendance:</label>
                                        <div class="col-md-9 custom-control custom-switch">
                                            <input type="checkbox" name="show_attendance" class="custom-control-input"
                                                id="show_attendance"
                                                {{ $institution->show_attendance == 'on' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="show_attendance"></label>
                                        </div>
                                    </div>







                                    <button type="submit" class="btn btn-primary mr-2">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Manage Contact</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="cno">Contact Number:</label>
                                        <input type="text" class="form-control" id="cno" value="001 2536 123 458">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="text" class="form-control" id="email" value="nikjone@demo.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="url">Url:</label>
                                        <input type="text" class="form-control" id="url" value="https://getbootstrap.com">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button type="reset" class="btn iq-bg-danger">Cancle</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {

            $('#image1').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage1').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('#image2').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage2').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    </script>


    <script type="text/javascript">
        $(document).ready(function() {

            $('#image3').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage3').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    </script>


    <script type="text/javascript">
        $(document).ready(function() {

            $('#image4').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage4').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    </script>


<script type="text/javascript">
    $(document).ready(function() {

        $('#image5').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage5').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>


@endsection
