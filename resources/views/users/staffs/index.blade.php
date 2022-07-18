@extends('layout.master')
@section('PageTitle', 'Staffs')
@section('content')

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Staffs List</h4>
                            </div>
                            <a class="btn btn-info pull-right  btn-sm" href="{{ route('register.staffs') }}"><i
                                    class="fa fa-user"></i> Register New Staff(s)</a>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <hr>
                                <table id="example1" class="table table-striped table-bordered mt-4" role="grid"
                                    aria-describedby="user-list-page-info">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Passport</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allData as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td class="text-center"><img class="rounded-circle img-fluid avatar-40"
                                                    @if($value->image == 'default.png') src="/uploads/default.png" @else src="/uploads/{{$school->username}}/{{ $value->image }}" @endif alt="profile"></td>
                                                <td>{{ $value->first_name }} {{ $value->last_name }}</td>

                                                <td>{{ $value->phone }}</td>
                                                <td>{{ $value->usertype }}</td>
                                                <td>
                                                    <div class="flex align-items-center list-user-action">
                                                        <a class="iq-bg-primary" data-toggle="modal"
                                                            data-target="#edit{{ $value->id }}"><i
                                                                class="ri-pencil-line"></i></a>
                                                        <a class="iq-bg-primary"
                                                            href="{{ route('print.staff', $value->id) }}"
                                                            target="__blank"><i class="ri-printer-line"></i></a>
                                                        <a class="iq-bg-primary" data-toggle="modal"
                                                            data-target="#password{{ $value->id }}"><i
                                                                class="ri-lock-line"></i></a>

                                                        <a class="iq-bg-primary" data-toggle="modal"
                                                            data-target="#delete{{ $value->id }}"><i
                                                                class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>





                                            <!--- Edit modal --->
                                            <div class="modal fade bd-example-modal-lg" id="edit{{ $value->id }}"
                                                tabindex="-1" role="dialog" aria-labelledby="edit{{ $value->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit {{$value->first_name}} {{$value->last_name}}'s
                                                                Profile</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form class="form-horizontal" id="quickForm" method="POST"
                                                                action="{{ route('update.staff', $value->id) }}"
                                                                enctype="multipart/form-data">
                                                                @csrf

                                                                <div class="form-row">

                                                                    <div class="form-group col-md-3">
                                                                        <label>Profile Image</label>
                                                                        <img id="showImage{{$key}}"
                                                                        @if($value->image == 'default.png') src="/uploads/default.png" @else src="/uploads/{{$school->username}}/{{ $value->image }}" @endif
                                                                            style="width: 100px; height: 100px; margin-bottom: 5px;">
                                                                        <input name="image" id="image{{$key}}" type="file" accept="image/*" />
                                                                    </div>

                                                                </div>

                                                                <hr>
                                                                <div class="form-row">
                                                                    <div class="col-md-3">
                                                                        <label>First Name</label>
                                                                        <input type="text" name="first_name"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $value->first_name }}" required>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label>Middle Name</label>
                                                                        <input type="text" name="middle_name"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $value->middle_name }}">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label>Last Name</label>
                                                                        <input type="text" name="last_name"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $value->last_name }}">
                                                                    </div>

                                                                    <div class="form-group col-md-3">
                                                                        <label>Role</label>
                                                                        <select name="designation"
                                                                            class="form-control form-control-sm" required>
                                                                            <option value="">Select Role</option>
                                                                            <option value="Admin"
                                                                            {{ @$value->usertype == 'Admin' ? 'selected' : '' }}>
                                                                            ICT Administrator</option>
                                                                            <option value="Teacher"
                                                                                {{ @$value->usertype == 'Teacher' ? 'selected' : '' }}>
                                                                                Teacher</option>
                                                                                <option value="Proprietor"
                                                                                {{ @$value->usertype == 'Proprietor' ? 'selected' : '' }}>
                                                                                Proprietor</option>
                                                                            <option value="Principal"
                                                                                {{ @$value->usertype == 'Principal' ? 'selected' : '' }}>
                                                                                Principal</option>
                                                                            <option value="VP Admin"
                                                                                {{ @$value->usertype == 'VP Admin' ? 'selected' : '' }}>
                                                                                Vice Principal Admin</option>
                                                                            <option value="VP Academics"
                                                                                {{ @$value->usertype == 'VP Academics' ? 'selected' : '' }}>
                                                                                Vice Principal Academics</option>
                                                                            <option value="Exam Officer"
                                                                                {{ @$value->usertype == 'Exam Officer' ? 'selected' : '' }}>
                                                                                Exam Officer</option>
                                                                            <option value="Accountant"
                                                                                {{ @$value->usertype == 'Accountant' ? 'selected' : '' }}>
                                                                                Accountant</option>
                                                                           <option value="Admission Officer"
                                                                                {{ @$value->usertype == 'Admission Officer' ? 'selected' : '' }}>
                                                                                Admission Officer</option>
                                                                                <option value="Duty Master"
                                                                                {{ @$value->usertype == 'Duty Master' ? 'selected' : '' }}>
                                                                                Duty Master</option>
                                                                            <option value="Secretry"
                                                                                {{ @$value->usertype == 'Secretery' ? 'selected' : '' }}>
                                                                                Secretery</option>
                                                                            <option value="Librarian"
                                                                                {{ @$value->usertype == 'Librarian' ? 'selected' : '' }}>
                                                                                Librarian</option>
                                                                            <option value="Driver"
                                                                                {{ @$value->usertype == 'Driver' ? 'selected' : '' }}>
                                                                                Driver</option>
                                                                            <option value="Securiy Guard"
                                                                                {{ @$value->usertype == 'Security Guard' ? 'selected' : '' }}>
                                                                                Securiy Guard</option>

                                                                        </select>
                                                                    </div>
                                                                </div>


                                                                <hr>
                                                                <div class="form-row">
                                                                    <div class="col-md-2">
                                                                        <label>Phone</label>
                                                                        <input type="text" name="phone"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $value->phone }}">
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <label>Date of Birth</label>
                                                                        <input type="date" name="dob"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $value->dob }}">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label>Contact Address</label>
                                                                        <input type="text" name="address"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $value->address }}">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label>Email Address</label>
                                                                        <input type="text" name="email"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $value->email }}">
                                                                    </div>
                                                                </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                            </div>


                            <!--- Adminimize End modal --->


                            {{-- Change Password --}}

                            <div class="modal fade bd-example-modal-sm" id="password{{ $value->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="password{{ $value->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="exampleModalLabel">Change
                                                {{ $value->first_name }}'s Password</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form class="form-horizontal" id="quickForm" method="POST"
                                                action="{{ route('user.password', $value->id) }}">
                                                @csrf


                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <label>New Password</label>
                                                        <input type="password" name="password"
                                                            class="form-control form-control-sm">
                                                    </div>

                                                </div>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Change Password</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Change Password --}}


                        {{-- Delete --}}

                        <div class="modal fade bd-example-modal-sm" id="delete{{ $value->id }}" tabindex="-1"
                            role="dialog" aria-labelledby="delete{{ $value->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">Delete {{ $value->first_name }}
                                            {{ $value->middle_name }} {{ $value->last_name }}</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>Are you Sure?</h5>
                                        <form class="form-horizontal" id="quickForm" method="POST"
                                            action="{{ route('user.delete', $value->id) }}">
                                            @csrf

                                            <input type="hidden" value="{{ $value->id }}">




                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Delete --}}
                    </tbody>
                    @endforeach
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


@section('js')
@foreach ($allData as $key => $value)
<script type="text/javascript">
    $(document).ready(function() {

        $('#image{{$key}}').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage{{$key}}').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>
@endforeach

@endsection
