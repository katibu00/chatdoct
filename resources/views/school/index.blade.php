@extends('layout.master')
@section('PageTitle', 'Schools')
@section('content')

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">School List</h4>
                            </div>
                            <a class="btn btn-info pull-right  btn-sm" href="{{ route('school.register') }}"><i
                                    class="fa fa-user"></i> Register New School</a>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <hr>
                                <table id="example1" class="table table-striped table-bordered mt-4" role="grid"
                                    aria-describedby="user-list-page-info">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Logo</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Session</th>
                                            <th>Fee</th>
                                            <th>Service</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allData as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td class="text-center"><img class=" img-fluid avatar-40" @if($value->logo == 'default.png') src="/uploads/default.png" @else src="/uploads/{{$value->username}}/{{$value->logo }}" @endif alt="logo"></td>
                                                <td>{{ $value->name }}</td>

                                                <td>{{ $value->phone_first }}</td>
                                                <td>{{ $value['session']['name'] }} {{ $value->term }}</td>
                                                @php
                                                    $students = App\Models\User::where('school_id',$value->id)->where('usertype','student')->get()->count();
                                                @endphp
                                                <td>N{{ number_format($students*$value->service_fee,2) }}</td>
                                                <td></td>
                                                <td>
                                                    <div class="flex align-items-center list-user-action">

                                                        <a class="iq-bg-primary" data-toggle="modal"
                                                        data-target="#payment{{ $value->id }}"><i class="las la-file-invoice-dollar"></i></a>

                                                        <a class="iq-bg-primary" data-toggle="modal"
                                                            data-target="#edit{{ $value->id }}"><i
                                                                class="ri-pencil-line"></i></a>


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
                                                            <h5 class="modal-title" id="exampleModalLabel">{{$value->name}}</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form class="form-horizontal" id="quickForm" method="POST"
                                                                action="{{ route('school.update', $value->id) }}"
                                                                enctype="multipart/form-data">
                                                                @csrf

                                                                <div class="form-row">

                                                                    <div class="form-group col-md-3">
                                                                        {{-- <label>Logo</label> --}}
                                                                        <img id="showImage{{$key}}"
                                                                        src="/uploads/{{$value->username}}/{{$value->logo }}"
                                                                            style="width: 100px; height: 100px; margin-bottom: 5px;">
                                                                        <input name="logo" id="image{{$key}}" type="file" accept="image/*" />
                                                                    </div>

                                                                </div>

                                                                <hr>
                                                                <div class="form-row">
                                                                    <div class="col-md-8">
                                                                        <label>Name</label>
                                                                        <input type="text" name="name"
                                                                            class="form-control" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem"
                                                                            value="{{ $value->name }}" required>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <label>Username</label>
                                                                        <input type="text" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" name="username"
                                                                            class="form-control"
                                                                            value="{{ $value->username }}">
                                                                    </div>
                                                                </div>


                                                                <hr>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-3">
                                                                        <label>Heading</label>
                                                                        <select name="heading"
                                                                            class="form-control form-control-sm" required>
                                                                            <option value="">Select Heading</option>
                                                                            <option value="h1" @if($value->heading == 'h1')selected @endif>H1</option>
                                                                            <option value="h2" @if($value->heading == 'h2')selected @endif>H2</option>
                                                                            <option value="h3" @if($value->heading == 'h3')selected @endif>H3</option>
                                                                            <option value="h4" @if($value->heading == 'h4')selected @endif>H4</option>

                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label>Service Fee/Head/Term</label>
                                                                        <input type="text" name="service_fee"
                                                                            class="form-control" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem"
                                                                            value="{{ $value->service_fee }}">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Web Address</label>
                                                                        <input type="text" name="website"
                                                                            class="form-control" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem"
                                                                            value="{{ $value->website }}">
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

                                {{-- Payment --}}

                          <div class="modal fade bd-example-modal-md" id="payment{{ $value->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="payment{{ $value->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="exampleModalLabel">Services - {{$value->name}}</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form class="form-horizontal" id="quickForm" method="POST"
                                                action="{{ route('service.record', $value->id) }}">
                                                @csrf


                                                <div class="form-row">

                                                    @php
                                                        $sessions = App\Models\Session::where('school_id',$value->id)->get();
                                                    @endphp

                                                    <div class="col-md-4">
                                                        <label>Session</label>
                                                        <select name="status" class="form-control form-control-sm" required>
                                                            <option value=""></option>
                                                            @foreach ($sessions as $session)
                                                            <option value="{{$session->id}}">{{$session->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                               
                                                    <div class="col-md-4">
                                                        <label>Duration</label>
                                                        <select name="status" class="form-control form-control-sm" required>
                                                            <option value=""></option>
                                                            <option value="trial">Trial</option>
                                                            <option value="first">First Term</option>
                                                            <option value="second">Second Term</option>
                                                            <option value="third">Third Term</option>
                                                            <option value="session">Session</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Amount</label>
                                                        <input type="text" name="amount"
                                                        class="form-control" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem">
                                                    </div>
                                                    
                                                </div>




                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Record</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                                {{-- Payment --}}

                        {{-- Delete --}}

                        {{-- <div class="modal fade bd-example-modal-sm" id="delete{{ $value->id }}" tabindex="-1"
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
                    </div> --}}

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
