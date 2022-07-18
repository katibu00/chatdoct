@extends('layout.master')
@section('PageTitle', 'Edit Institution Information')
@section('content')

<style type="text/css">
    .switch-toggle {
        width: auto;
    }

    .switch-toggle label:not(.disabled) {
        cursor: pointer;
    }

    .switch-candy a {
        border: 1px solid #333;
        border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2), inset 0 1px 1px rgba(255, 255, 255, 0.45);
        background-color: white;
        background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 02), transparent);
        background-image: linear-gradient(to bottom, rgba(255, 255, 255, 02), transparent);
    }

    .switch-toggle.switch-candy,
    .switch-light.switch-candy>span {
        background-color: #b6b8ba;
        border-radius: 3px;
        box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.2);

    }

    .w-5 {
        display: none;
    }

</style>


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
                                           Parents
                                        </a>
                                    </li>
                                    <li class="col-md-4 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                           Staffs
                                        </a>
                                    </li>
                                    <li class="col-md-4 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#emailandsms">
                                            Students
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
                                    {{-- <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Parents</h4>
                                        </div>
                                    </div> --}}
                                    <div class="iq-card-body">
                                        {{-- Basic Starts --}}


                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="iq-card">
                                                    <div class="iq-card-body">




                                                        <form method="POST" action="{{ route('communication.send') }}">
                                                            @csrf
                                                            <table class="table-sm table-bordered table-striped dt-responsive" style="width: 100%;    ">
                                                                <thead>
                                                                    <tr>
                                                                        <th rowspan="2" class="text-center" style="vertical-align:middle;">S/N</th>
                                                                        <th rowspan="2" class="text-center" style="vertical-align:middle;">Name</th>
                                                                        <th colspan="3" class="text-center" style="vertical-align:middle; width: 40%;">
                                                                            Send
                                                                    <tr>
                                                                        <th class="text-center btn present_all"
                                                                            style="display: table-cell; background-color: #114190;color: white;">Yes
                                                                        </th>
                                                                        <th class="text-center btn leave_all"
                                                                            style="display: table-cell; background-color: #114190; color: white;">No
                                                                        </th>
                                                                        {{-- <th class="text-center btn absent_all" style="display: table-cell; background-color: #114190;color: white;">Absent</th> --}}
                                                                    </tr>
                                                                    </th>
                                                                    </tr>

                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($students as $key => $student)
                                                                        <tr id="div{{ $student->id }}" class="text-center">
                                                                            <input type="hidden" name="student_id[]" value="{{ $student->id }}"
                                                                                class="student_id">
                                                                            <td>{{ $key + 1 }}</td>
                                                                            <td class="text-left">{{ $student->first_name }} {{ $student->middle_name }}
                                                                                {{ $student->last_name }} </td>
                                                                            <td colspan="3">
                                                                                <div class="switch-toggle switch-light switch-candy">
                                                                                    <input class="present" id="present{{ $key }}"
                                                                                        name="attend_status{{ $key }}" value="present"
                                                                                        type="radio" checked="checked" />
                                                                                    <label for="present{{ $key }}">Yes</label>

                                                                                    <input class="leave" id="leave{{ $key }}"
                                                                                        name="attend_status{{ $key }}" value="leave"
                                                                                        type="radio" />
                                                                                    <label for="leave{{ $key }}">No</label>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                <tbody><br>

                                                            </table>

                                                    </div>
                                                    {{-- {{$students->links()}} --}}
                                                </div>

                                            </div>
                                            <div class="col-lg-7 mail-box-detail">
                                                <div class="iq-card">
                                                    <div class="iq-card-body p-0">
                                                        <div class="">
                                                            <div class="iq-email-tolist p-3">
                                                                <div class="justify-content-between">


                                                                    <div class="form-group col-md-12">
                                                                        <label for="email">Subject:</label>
                                                                        <input type="email" class="form-control" id="email1">
                                                                    </div>

                                                                    <div class="form-group col-md-12">
                                                                        <label for="email">Message:</label>
                                                                        <textarea class="textarea form-control" rows="5" name="body"></textarea>
                                                                    </div>

                                                                    <div class="form-group col-md-12">
                                                                        <button type="submit" class="btn btn-warning px-5">Send</button>
                                                                    </div>



                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            </form>

                                        </div>

                                        {{-- Parents Ends --}}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                                <div class="iq-card">
                                    {{-- <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Staffs</h4>
                                        </div>
                                    </div> --}}
                                    <div class="iq-card-body">
                                                {{-- Staffs --}}


                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <div class="iq-card">
                                                            <div class="iq-card-body">




                                                                <form method="POST" action="{{ route('communication.send') }}">
                                                                    @csrf
                                                                    <table class="table-sm table-bordered table-striped dt-responsive" style="width: 100%;    ">
                                                                        <thead>
                                                                            <tr>
                                                                                <th rowspan="2" class="text-center" style="vertical-align:middle;">S/N</th>
                                                                                <th rowspan="2" class="text-center" style="vertical-align:middle;">Name</th>
                                                                                <th colspan="3" class="text-center" style="vertical-align:middle; width: 40%;">
                                                                                    Send
                                                                            <tr>
                                                                                <th class="text-center btn present_all"
                                                                                    style="display: table-cell; background-color: #114190;color: white;">Yes
                                                                                </th>
                                                                                <th class="text-center btn leave_all"
                                                                                    style="display: table-cell; background-color: #114190; color: white;">No
                                                                                </th>
                                                                                {{-- <th class="text-center btn absent_all" style="display: table-cell; background-color: #114190;color: white;">Absent</th> --}}
                                                                            </tr>
                                                                            </th>
                                                                            </tr>

                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($students as $key => $student)
                                                                                <tr id="div{{ $student->id }}" class="text-center">
                                                                                    <input type="hidden" name="student_id[]" value="{{ $student->id }}"
                                                                                        class="student_id">
                                                                                    <td>{{ $key + 1 }}</td>
                                                                                    <td class="text-left">{{ $student->first_name }} {{ $student->middle_name }}
                                                                                        {{ $student->last_name }} </td>
                                                                                    <td colspan="3">
                                                                                        <div class="switch-toggle switch-light switch-candy">
                                                                                            <input class="present" id="present{{ $key }}"
                                                                                                name="attend_status{{ $key }}" value="present"
                                                                                                type="radio" checked="checked" />
                                                                                            <label for="present{{ $key }}">Yes</label>

                                                                                            <input class="leave" id="leave{{ $key }}"
                                                                                                name="attend_status{{ $key }}" value="leave"
                                                                                                type="radio" />
                                                                                            <label for="leave{{ $key }}">No</label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        <tbody><br>

                                                                    </table>

                                                            </div>
                                                            {{-- {{$students->links()}} --}}
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-7 mail-box-detail">
                                                        <div class="iq-card">
                                                            <div class="iq-card-body p-0">
                                                                <div class="">
                                                                    <div class="iq-email-tolist p-3">
                                                                        <div class="justify-content-between">


                                                                            <div class="form-group col-md-12">
                                                                                <label for="email">Subject:</label>
                                                                                <input type="email" class="form-control" id="email1">
                                                                            </div>

                                                                            <div class="form-group col-md-12">
                                                                                <label for="email">Message:</label>
                                                                                <textarea class="textarea form-control" rows="5" name="body"></textarea>
                                                                            </div>

                                                                            <div class="form-group col-md-12">
                                                                                <button type="submit" class="btn btn-warning px-5">Send</button>
                                                                            </div>



                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    </form>

                                                </div>

                                                {{-- Staffs ends --}}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                                <div class="iq-card">
                                    {{-- <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Students</h4>
                                        </div>
                                    </div> --}}
                                    <div class="iq-card-body">
                                            {{-- Students --}}

                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="iq-card">
                                                        <div class="iq-card-body">




                                                            <form method="POST" action="{{ route('communication.send') }}">
                                                                @csrf
                                                                <table class="table-sm table-bordered table-striped dt-responsive" style="width: 100%;    ">
                                                                    <thead>
                                                                        <tr>
                                                                            <th rowspan="2" class="text-center" style="vertical-align:middle;">S/N</th>
                                                                            <th rowspan="2" class="text-center" style="vertical-align:middle;">Name</th>
                                                                            <th colspan="3" class="text-center" style="vertical-align:middle; width: 40%;">
                                                                                Send
                                                                        <tr>
                                                                            <th class="text-center btn present_all"
                                                                                style="display: table-cell; background-color: #114190;color: white;">Yes
                                                                            </th>
                                                                            <th class="text-center btn leave_all"
                                                                                style="display: table-cell; background-color: #114190; color: white;">No
                                                                            </th>
                                                                            {{-- <th class="text-center btn absent_all" style="display: table-cell; background-color: #114190;color: white;">Absent</th> --}}
                                                                        </tr>
                                                                        </th>
                                                                        </tr>

                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($students as $key => $student)
                                                                            <tr id="div{{ $student->id }}" class="text-center">
                                                                                <input type="hidden" name="student_id[]" value="{{ $student->id }}"
                                                                                    class="student_id">
                                                                                <td>{{ $key + 1 }}</td>
                                                                                <td class="text-left">{{ $student->first_name }} {{ $student->middle_name }}
                                                                                    {{ $student->last_name }} </td>
                                                                                <td colspan="3">
                                                                                    <div class="switch-toggle switch-light switch-candy">
                                                                                        <input class="present" id="present{{ $key }}"
                                                                                            name="attend_status{{ $key }}" value="present"
                                                                                            type="radio" checked="checked" />
                                                                                        <label for="present{{ $key }}">Yes</label>

                                                                                        <input class="leave" id="leave{{ $key }}"
                                                                                            name="attend_status{{ $key }}" value="leave"
                                                                                            type="radio" />
                                                                                        <label for="leave{{ $key }}">No</label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    <tbody><br>

                                                                </table>
                                                                {{-- <span class="mt-3" style="margin-top: 20px;">{{$students->links()}}</span> --}}
                                                        </div>
                                                        <span class="mt-3" style="margin-left: 50px;">{{$students->links()}}</span>
                                                    </div>

                                                </div>
                                                <div class="col-lg-7 mail-box-detail">
                                                    <div class="iq-card">
                                                        <div class="iq-card-body p-0">
                                                            <div class="">
                                                                <div class="iq-email-tolist p-3">
                                                                    <div class="justify-content-between">


                                                                        <div class="form-group col-md-12">
                                                                            <label for="email">Subject:</label>
                                                                            <input type="email" class="form-control" id="email1">
                                                                        </div>

                                                                        <div class="form-group col-md-12">
                                                                            <label for="email">Message:</label>
                                                                            <textarea class="textarea form-control" rows="5" name="body"></textarea>
                                                                        </div>

                                                                        <div class="form-group col-md-12">
                                                                            <button type="submit" class="btn btn-warning px-5">Send</button>
                                                                        </div>



                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                </form>

                                            </div>

                                            {{-- Students --}}
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
        $(document).on('click', '.present', function() {
            $(this).parents('tr').find('.datetime').css('pointer-events', 'none').css('background-color', '#dee2e6')
                .css('color', '#495057');
        })

        $(document).on('click', '.leave', function() {
            $(this).parents('tr').find('.datetime').css('pointer-events', 'none').css('background-color', '#dee2e6')
                .css('color', '#495057');
        })

        $(document).on('click', '.absent', function() {
            $(this).parents('tr').find('.datetime').css('pointer-events', 'none').css('background-color', '#dee2e6')
                .css('color', '#495057');
        });
    </script>

    <script type="text/javascript">
        $(document).on('click', '.present_all', function() {
            $("input[value=present]").prop('checked', true);
            $('.datetime').css('pointer-events', 'none').css('background-color', '#dee2e6').css('color', '#495057');
        });

        $(document).on('click', '.leave_all', function() {
            $("input[value=leave]").prop('checked', true);
            $('.datetime').css('pointer-events', 'none').css('background-color', '#dee2e6').css('color', '#495057');
        });

        $(document).on('click', '.absent_all', function() {
            $("input[value=absent]").prop('checked', true);
            $('.datetime').css('pointer-events', 'none').css('background-color', '#dee2e6').css('color', '#495057');
        });
    </script>

@endsection
