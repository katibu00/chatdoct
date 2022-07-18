@extends('layout.master')
@section('PageTitle', 'Change Password')
@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-lg-6 mx-auto">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Change your Password</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">

                            <form action="{{route('change.password')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="pass1">New Password:</label>
                                    <input type="password" class="form-control" name="password" id="pass1">
                                    @error('password')
                                    <div class="text-danger mt-2 text-sm">{{$message}}</div>
                                  @enderror
                                </div>
                                <div class="form-group">
                                    <label for="pass2">Confirm New Password:</label>
                                    <input type="password" class="form-control" name="confirm_password" id="pass2">
                                    @error('confirm_password')
                                    <div class="text-danger mt-2 text-sm">{{$message}}</div>
                                  @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn iq-bg-danger">cancle</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
