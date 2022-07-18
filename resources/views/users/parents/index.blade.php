@extends('layout.master')
@section('PageTitle', 'Parents')
@section('content')

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Parents List</h4>
                            </div>
                            <a class="btn btn-primary pull-right  btn-sm" href="{{ route('register.parents') }}"><i
                                    class="fa fa-user"></i> Register New Parents</a>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <hr>
                                <table id="example1" class="table table-striped table-bordered mt-4">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allData as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->first_name }} {{ $value->last_name }}</td>

                                                <td>{{ $value->email }}</td>
                                                <td>{{ $value->phone }}</td>
                                                <td>
                                                    <div class="flex align-items-center list-user-action">
                                                        <a class="iq-bg-primary" data-toggle="modal"
                                                            data-target="#edit{{ $value->id }}"><i
                                                                class="ri-pencil-line"></i></a>
                                                        <a class="iq-bg-primary"
                                                            href="{{ route('print.parent', $value->id) }}"
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
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Parent
                                                                Details</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form class="form-horizontal" id="quickForm" method="POST"
                                                                action="{{ route('update.parent', $value->id) }}">
                                                                @csrf


                                                                <hr>
                                                                <div class="form-row">
                                                                    <div class="col-md-4">
                                                                        <label>First Name</label>
                                                                        <input type="text" name="first_name"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $value->first_name }}">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label>Middle Name</label>
                                                                        <input type="text" name="middle_name"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $value->middle_name }}">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label>Last Name</label>
                                                                        <input type="text" name="last_name"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $value->last_name }}">
                                                                    </div>


                                                                </div>


                                                                <hr>
                                                                <div class="form-row">
                                                                    <div class="col-md-3">
                                                                        <label>Phone</label>
                                                                        <input type="text" name="phone"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $value->phone }}">
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <label>Email</label>
                                                                        <input type="email" name="email"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $value->email }}">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Contact Address</label>
                                                                        <input type="text" name="address"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $value->address }}">
                                                                    </div>
                                                                </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success">Save
                                                                changes</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <!--- Adminimize End modal --->


                                            {{-- Change Password --}}

                                            <div class="modal fade bd-example-modal-sm" id="password{{ $value->id }}"
                                                tabindex="-1" role="dialog" aria-labelledby="password{{ $value->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title" id="exampleModalLabel">Change
                                                                {{ $value->first_name }}'s Password</h6>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
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
                                                            <button type="submit" class="btn btn-danger">Change
                                                                Password</button>
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
                                            <h6 class="modal-title" id="exampleModalLabel">Delete
                                                {{ $value->first_name }}
                                                {{ $value->middle_name }} {{ $value->last_name }}</h6>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
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
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
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
@endsection
