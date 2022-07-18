@extends('layout.master')
@section('PageTitle', 'End of Session Report')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">End of Session Report</h4>

                            </div>
                        </div>
                        <hr>
                        <div class="iq-card-body">

                            <form method="POST" action="{{ route('session.report.generate') }}" target="_blank">
                                @csrf
                                <div class="form-row">


                                <div class="form-group col-md-2">
                                    <label>Session: *</label>
                                    <select name="session_id" class="form-control form-control-sm">
                                        <option value="">Select Level</option>
                                        @foreach ($sessions as $session)
                                            <option value="{{ $session->id }}"
                                                {{ $current == $session->id ? 'Selected' : '' }}>{{ $session->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                    <div class="form-group col-md-2">
                                        <label>Class: *</label>
                                        <select name="class_id" class="form-control form-control-sm" required>
                                            <option value=""></option>
                                            @foreach ($classes as $class)
                                                <option value="{{$class->class_id}}">{{ $class['class']['name'] }}</option>\
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label>Class Section: *</label>
                                        <select name="class_section_id" class="form-control form-control-sm" required>
                                            <option value=""></option>
                                            @foreach ($class_section as $section)
                                                <option value="{{ $section->class_section_id }}">
                                                    {{ $section['class_section']['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form_group col-md-2" style="padding-top: 30px;">
                                        <button type="submit" class="btn btn-primary btn-sm text-white">Generate</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
