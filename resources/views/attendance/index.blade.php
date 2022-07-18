@extends('layout.master')
@section('PageTitle', 'Attendance Report')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Attendance Report</h4>
                            </div>
                            <a class="btn btn-success float-right btn-sm" href="{{route('attendance.create')}}"><i class="fa fa-plus-circle"></i>Take Attendance</a>
                        </div>
                        <hr>
                        <div class="iq-card-body">

                            <form method="POST" action="{{route('attendance.index.search')}}">
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
                                     </div>
                                </div>
                            </form>

                            @if(isset($class_id))
                            <table class="table-sm table-bordered table-striped table-responsive" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="vertical-align:middle;">S/N</th>
                                        <th class="text-center" style="vertical-align:middle;">Time</th>
                                        <th class="text-center" style="vertical-align:middle;">Stat</th>
                                        <th class="text-center" style="vertical-align:middle;">Action</th>
                                    </tr>

                                </thead>
                                <tbody>

                                            <tr class="text-center">
                                                <td>1</td>
                                                <td>Today</td>
                                                <td>
                                                    @php
                                                    $absent = App\Models\Attendance::where('class_id', $class_id)->where('class_section_id',  $class_section_id)->where('school_id',  $school->id)->where('session_id',$school->session_id)->where('term',$school->term)->where('status','absent')->where('date',date('Y-m-d'))->get()->count();
                                                    $present = App\Models\Attendance::where('class_id', $class_id)->where('class_section_id',  $class_section_id)->where('school_id',  $school->id)->where('session_id',$school->session_id)->where('term',$school->term)->where('status','present')->where('date',date('Y-m-d'))->get()->count();
                                                    $leave = App\Models\Attendance::where('class_id', $class_id)->where('class_section_id',  $class_section_id)->where('school_id',  $school->id)->where('session_id',$school->session_id)->where('term',$school->term)->where('status','leave')->where('date',date('Y-m-d'))->get()->count();
                                                    @endphp
                                                    @if($present)
                                                    {{$present}} Present, {{$absent}} Absent, {{$leave}} Leave
                                                    @else
                                                    Not Recorded
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($present)
                                                    <a title="Details" class="btn btn-sm btn-primary" href="{{route('attendance.details', ['class' => $class_id,'section' => $class_section_id,'days' => 0])}}"><i class="fa fa-eye"></i></a>
                                                    @endif
                                                </td>
                                            </tr>

                                            <tr class="text-center">
                                                <td>3</td>
                                                <td style="width: 30%;">This Term</td>
                                                <td>
                                                    @php
                                                    $number = App\Models\Attendance::select('date')->where('class_id', $class_id)->where('class_section_id',  $class_section_id)->where('school_id',  $school->id)->where('session_id',$school->session_id)->where('term',$school->term)->groupBy('date')->get()->count();

                                                    @endphp
                                                  @if($number)
                                                    Recorded {{$number}} Times
                                                  @else
                                                  No Records
                                                  @endif
                                                </td>
                                                <td>
                                                    <a title="Details" class="btn btn-sm btn-primary" href="{{route('attendance.details', ['class' => $class_id,'section' => $class_section_id,'days' => 100])}}"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
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
