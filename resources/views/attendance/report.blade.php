@extends('layout.master')
@section('PageTitle', 'Attendance Report')
@section('content')
@php
            $number = App\Models\Attendance::select('date')->where('class_id', @$class_id)->where('class_section_id',  @$class_section_id)->where('school_id',  auth()->user()->school_id)->where('term',$school->term)->where('session_id',$school->session_id)->groupBy('date')->get()->count();
@endphp

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Attendance Report</h4>
                            </div>
                            @if(isset($users))
                            <a class="btn btn-sm btn-danger text-white" href="{{route('attendance.print').'?class='.@$class_id.'&section='.@$class_section_id.'&school='.$school->id}}" target="__blank"><i class="fa fa-print"></i>Print to PDF</a>
                            @endif
                        </div>
                        <hr>
                        <div class="iq-card-body">

                            <form method="POST" action="{{route('attendance.report')}}">
                                @csrf
                                <div class="form-row">

                                    <div class="form-group col-md-3">
                                        <select name="class_id" class="form-control form-control-sm" required>
                                            <option value="">Select Class</option>
                                            @foreach ($classes as $class)
                                                <option value="{{$class->class_id}}" @if (@$class->class_id == @$class_id) selected @endif>{{ $class['class']['name'] }}</option>\
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <select name="class_section_id" class="form-control form-control-sm" required>
                                            <option value="">Select Section</option>
                                            @foreach ($class_section as $section)
                                                <option value="{{ $section->class_section_id }}" @if (@$section->class_section_id == @$class_section_id) selected @endif>
                                                    {{ $section['class_section']['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>



                                    <div class="form_group col-md-4" style="padding-top: px;">
                                        <button type="submit" class="btn btn-sm btn-success text-white">Search</button>
                                      {{-- <a class="btn btn-sm btn-danger text-white" href="{{route('attendance.print').'?class='.@$class_id.'?section='.@$class_section_id.'?school='.$school->id}}" target="__blank"><i class="fa fa-print"></i>Print to PDF</a> --}}
                                     </div>
                                </div>
                            </form>


                            @if(isset($users))
                            Attendance Recorded <strong>{{$number}}</strong> times
                            <table class="table-sm table-bordered table-striped dt-responsive" style="width: 80%;">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="vertical-align:middle;">S/N</th>
                                        <th class="text-center" style="vertical-align:middle;">Name</th>
                                        <th class="text-center text-success" style="vertical-align:middle;">Present</th>
                                        <th class="text-center text-warning" style="vertical-align:middle;">Leave</th>
                                        <th class="text-center text-danger" style="vertical-align:middle;">Absent</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                        <tr class="text-center">
                                            <td>{{$key+1}}</td>
                                            <td >{{$user->first_name}}</td>

                                           @php
                                            $present = App\Models\Attendance::where('class_id', $user->class_id)->where('class_section_id',  $user->class_section_id)->where('school_id',  auth()->user()->school_id)->where('status','=','present')->where('term',$school->term)->where('session_id',$school->session_id)->where('user_id',$user->id)->get()->count();
                                            @endphp

                                            <td @if($present == 0) class="text-danger" @elseif($present == $number) class="text-success"   @endif>
                                                {{$present}}
                                            </td>
                                            
                                            <td>
                                            @php
                                                $leave = App\Models\Attendance::where('class_id', $class_id)->where('class_section_id',  $class_section_id)->where('school_id',   auth()->user()->school_id)->where('status','=','leave')->where('term',$school->term)->where('session_id',$school->session_id)->where('user_id',$user->id)->get()->count();
                                             @endphp
                                             {{$leave}}
                                            </td>

                                            @php
                                            $absent = App\Models\Attendance::where('class_id', $user->class_id)->where('class_section_id',  $user->class_section_id)->where('school_id',  auth()->user()->school_id)->where('status','=','absent')->where('term',$school->term)->where('session_id',$school->session_id)->where('user_id',$user->id)->get()->count();
                                            @endphp

                                        <td @if($absent == 0 && $number != 0) class="text-success" @else class="text-danger" @endif>

                                            {{$absent}}
                                        </td>

                                    @endforeach
                                <tbody><br>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
