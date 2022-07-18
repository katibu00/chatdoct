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

                        </div>
                        <hr>
                        <div class="iq-card-body">


                            {{-- Seperation --}}

                            @if(isset($users))
                            <table class="table-sm table-bordered table-striped dt-responsive" style="width: 80%;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" class="text-center" style="vertical-align:middle;">S/N</th>
                                        <th rowspan="2" class="text-center" style="vertical-align:middle;">Name</th>
                                        <th rowspan="2" class="text-center" style="vertical-align:middle;">Class</th>
                                        <th rowspan="2" class="text-center" style="vertical-align:middle;">Today</th>
                                        <th colspan="4" class="text-center" style="vertical-align:middle;" >This Term
                                            <tr>
                                                <th class="text-center" style="vertical-align:middle;">Recorded</th>
                                                <th class="text-center text-success" style="vertical-align:middle;">Present</th>
                                                <th class="text-center text-warning" style="vertical-align:middle;">Leave</th>
                                                <th class="text-center text-danger" style="vertical-align:middle;">Absent</th>
                                            </tr>
                                        </th>

                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)

                                  @php
                                    $number = App\Models\Attendance::select('date')->where('class_id', $user->class_id)->where('class_section_id',  $user->class_section_id)->where('school_id',  auth()->user()->school_id)->where('term',$school->term)->where('session_id',$school->session_id)->groupBy('date')->get()->count();
                                    $status = App\Models\Attendance::where('class_id', $user->class_id)->where('class_section_id',  $user->class_section_id)->where('school_id',  auth()->user()->school_id)->where('term',$school->term)->where('session_id',$school->session_id)->where('user_id',$user->id)->where('date',date('Y-m-d'))->first();
                                  @endphp
                                        <tr class="text-center">
                                            <td>{{$key+1}}</td>
                                            <td >{{$user->first_name}} {{$user->last_name}} {{$user->last_name}} </td>
                                            <td >{{$user['class']['name']}}  {{$user['class_section']['name']}}</td>
                                            <td @if(@$status->status == 'present') class="text-success" @elseif(@$status->status == 'leave') class="text-warning" @elseif(@$status->status == 'absent') class="text-danger" @endif >
                                                @if($status)  {{ucfirst($status->status)}} @else Not Recorded @endif
                                              </td>


                                            <td >{{$number}} @if($number ==1 )Time @else Times @endif</td>

                                                @php
                                                $present = App\Models\Attendance::where('class_id', $user->class_id)->where('class_section_id',  $user->class_section_id)->where('school_id',  auth()->user()->school_id)->where('status','=','present')->where('term',$school->term)->where('session_id',$school->session_id)->where('user_id',$user->id)->get()->count();
                                                @endphp

                                            <td @if($present == 0) class="text-danger" @elseif($present == $number) class="text-success"   @endif>
                                                {{$present}}
                                            </td>
                                            <td>
                                            @php
                                                $leave = App\Models\Attendance::where('class_id', $user->class_id)->where('class_section_id',  $user->class_section_id)->where('school_id',   auth()->user()->school_id)->where('status','=','leave')->where('term',$school->term)->where('session_id',$school->session_id)->where('user_id',$user->id)->get()->count();
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
