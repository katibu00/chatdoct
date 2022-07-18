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
                                    <li class="col-md-4 p-0">
                                        <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                            Basic Information
                                        </a>
                                    </li>
                                    <li class="col-md-4 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                            Bank Transfer
                                        </a>
                                    </li>
                                    {{-- <li class="col-md-2 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#emailandsms">
                                            Email and SMS
                                        </a>
                                    </li> --}}
                                    <li class="col-md-4 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#other">
                                            Result Settings
                                        </a>
                                    </li>
                                    {{-- <li class="col-md-3 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#manage-contact">
                                            Payment Gateway
                                        </a>
                                    </li> --}}
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
                                            <h4 class="card-title">Basic Settings</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <form action="{{ route('institution.update.basic', $institution->id) }}" method="POST"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row align-items-center">
                                                <div class="col-md-12">
                                                    <div class="profile-img-edit">
                                                        <img class="profile-pic"
                                                           @if($institution->logo == 'default.png') src="/uploads/default.png" @else src="/uploads/{{$institution->username}}/{{ $institution->logo }}" @endif
                                                            alt="school logo">
                                                        <div class="p-image">
                                                            <i class="ri-pencil-line upload-button"></i>
                                                            <input class="file-upload" name="logo" type="file"
                                                                accept="image/*" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" row align-items-center">
                                                <div class="form-group col-sm-4">
                                                    <label for="fname">Institution Name:</label>
                                                    <input type="text" class="form-control" name="name" id=""
                                                        value="{{ @$institution->name }}">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label for="lname">Phone Number:</label>
                                                    <input type="text" class="form-control" name="phone_first" id=""
                                                        value="{{ @$institution->phone_first }}">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label for="uname">Alternate Phone Number:</label>
                                                    <input type="text" class="form-control" name="phone_second" id=""
                                                        value="{{ @$institution->phone_second }}">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="cname">Address:</label>
                                                    <input type="text" class="form-control" name="address" id=""
                                                        value="{{ @$institution->address }}">
                                                </div>

                                                <div class="form-group col-sm-3">
                                                    <label for="cname">Username:</label>
                                                    <input type="text" class="form-control" name="website" id=""
                                                        value="{{ @$institution->username }}" readonly>
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label for="cname">Website:</label>
                                                    <input type="text" class="form-control" name="website" id=""
                                                        value="{{ @$institution->website }}">
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label for="cname">Session:</label><a href="{{route('sessions.index')}}" class="badge">Create New Session</a>
                                                    <select class="form-control" id="" name="session">
                                                        <option value="">Select Session</option>
                                                        @foreach ($sessions as $session)
                                                            <option value="{{ $session->id }}"
                                                                {{ $session->id == $institution->session_id ? 'Selected' : '' }}>
                                                                {{ $session->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>Term:</label>
                                                    <select class="form-control" id="" name="term">
                                                        <option value="">Select Term</option>
                                                        <option value="First"
                                                            {{ $institution->term == 'First' ? 'Selected' : '' }}>
                                                            First
                                                        </option>
                                                        <option value="Second"
                                                            {{ $institution->term == 'Second' ? 'Selected' : '' }}>
                                                            Second
                                                        </option>
                                                        <option value="Third"
                                                        {{ $institution->term == 'Third' ? 'Selected' : '' }}>
                                                        Third
                                                    </option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-sm-3">
                                                    <label>Service Fee/Student:</label>
                                                    <input type="text" value="{{ @$institution->service_fee }}" name="service_fee" class="form-control" readonly>
                                                </div>

                                                <div class="form-group col-sm-3">
                                                    <label>Default Password:</label>
                                                    <input type="text"  value="{{ @$institution->students_pwd }}" name="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="iq-header-title">
                                                <h4 class="card-title">Application Portal Settings</h4>
                                            </div>
                                            <div class=" row align-items-center">
                                                <div class="form-group col-sm-4">
                                                    <label for="cname">Application ID Prefix:</label>
                                                    <input type="text" class="form-control" name="prefix" id="cname"
                                                        value="{{ @$institution->prefix }}">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label for="cname">Form Price:</label>
                                                    <input type="text" class="form-control" name="form_price" id="cname"
                                                        value="{{ @$institution->form_price }}">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label for="cname">Closing Date:</label>
                                                    <input type="text" class="form-control" name="closing_date" id="cname"
                                                        value="{{ @$institution->closing_date }}">
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
                                            <h4 class="card-title">Bank Transfer Settings</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <form action="{{ route('institution.update.bank', $institution->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class=" row align-items-center">
                                                <div class="form-group col-sm-4">
                                                    <label for="fname">Account Name:</label>
                                                    <input type="text" class="form-control" name="first_acct_name"
                                                        id="fname" value="{{ @$institution->first_acct_name }}">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label for="lname">Account Number:</label>
                                                    <input type="number" class="form-control" name="first_acct_no"
                                                        id="lname" value="{{ @$institution->first_acct_no }}">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label for="uname">Bank Name:</label>
                                                    <input type="text" class="form-control" name="first_bank_name"
                                                        id="uname" value="{{ @$institution->first_bank_name }}">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label for="cname">Account Name:</label>
                                                    <input type="text" class="form-control" name="second_acct_name"
                                                        id="cname" value="{{ @$institution->second_acct_name }}">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label for="cname">Account Number:</label>
                                                    <input type="number" class="form-control" name="second_acct_no"
                                                        id="cname" value="{{ @$institution->second_acct_number }}">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label for="cname">Bank Name:</label>
                                                    <input type="text" class="form-control" name="second_bank_name"
                                                        id="cname" value="{{ @$institution->second_bank_name }}">
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
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="emailnotification" checked="">
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
                                                        <input type="checkbox" class="custom-control-input" id="email03"
                                                            checked="">
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
                                                        <input type="checkbox" class="custom-control-input" id="email06"
                                                            checked="">
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
                                            <h4 class="card-title">Result Settings</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <form method="post" action="{{ route('institution.update.other', $institution->id ) }}">
                                            @csrf

                                            <div class="form-group row">
                                                <label class="control-label col-sm-3 align-self-center mb-0" for="email">Show Position:</label>
                                                <div class="col-sm-9">
                                                    <div class="col-md-9  custom-control custom-switch">
                                                        <input type="checkbox" name="show_position" class="custom-control-input" id="position"
                                                            {{ $institution->show_position == 'on' ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="position"></label>
                                                    </div>                                               </div>
                                             </div>
                                            <div class="form-group row">
                                                <label class="control-label col-sm-3 align-self-center mb-0" for="email">Show Attendance:</label>
                                                <div class="col-sm-9">
                                                    <div class="col-md-9 custom-control custom-switch">
                                                        <input type="checkbox" name="show_attendance" class="custom-control-input"
                                                            id="show_attendance"
                                                            {{ $institution->show_attendance == 'on' ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_attendance"></label>
                                                    </div>
                                                </div>
                                             </div>
                                            <div class="form-group row">
                                                <label class="control-label col-sm-3 align-self-center mb-0">Show Student's Passport:</label>
                                                <div class="col-sm-9">
                                                    <div class="col-md-9 custom-control custom-switch">
                                                        <input type="checkbox" name="show_passport" class="custom-control-input"
                                                            id="show_passport"
                                                            {{ $institution->show_passport == 'on' ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_passport"></label>
                                                    </div>
                                                </div>
                                             </div>
                                            <div class="form-group row">
                                                <label class="control-label col-sm-3 align-self-center mb-0">Grading Scheme:</label>
                                                <div class="col-sm-2">
                                                    <select class="form-control form-control-sm"  name="grading">
                                                        <option value="waec"  {{ $institution->grading == 'waec' ? 'selected' : '' }}>WAEC STYLE</option>
                                                        <option value="standard"  {{ $institution->grading == 'standard' ? 'selected' : '' }}>STANDARD</option>
                                                       
                                                    </select>
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
                                                <input type="text" class="form-control" id="url"
                                                    value="https://getbootstrap.com">
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
