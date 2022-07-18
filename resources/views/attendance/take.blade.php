@extends('layout.master')
@section('PageTitle', 'Take Attendance')
@section('content')

<style type="text/css">
    .switch-toggle{
        width: auto;
    }
   .switch-toggle label:not(.disabled){
       cursor: pointer;
   }
   .switch-candy a{
       border: 1px solid #333;
       border-radius: 3px;
       box-shadow: 0 1px 1px rgba(0,0,0,0.2), inset 0 1px 1px rgba(255, 255,255,0.45);
       background-color: white;
       background-image: -webkit-linear-gradient(top,rgba(255,255,255,02),transparent);
       background-image: linear-gradient(to bottom,rgba(255,255,255,02),transparent);
   }

   .switch-toggle.switch-candy,.switch-light.switch-candy > span{
       background-color: #b6b8ba;
       border-radius: 3px;
       box-shadow: inset 0 2px 6px rgba(0,0,0,0.3),0 1px 0 rgba(255,255,255,0.2);

   }
   </style>

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                {{-- <h4 class="card-title">Attendance Report ({{$class['class']['name']}} {{$class['class_section']['name']}})</h4> --}}
                            </div>
                            <h5 class="float-right">{{date("l, jS \of F Y ")}} </h5>
                        </div>
                        <hr>
                        <div class="iq-card-body">

                            <form method="POST" action="{{route('attendance.create')}}">
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



                                    <div class="form_group col-md-2" style="padding-top: 0px;">
                                        <button type="submit" class="btn btn-sm btn-success text-white">Search Students</a>
                                     </div>
                                </div>
                            </form>
                            <form method="POST" action="{{route('attendance.store')}}" class="@if (!isset($students)) d-none @endif" >
                                    @csrf

                                    <input type="hidden" value="{{@$class_id}}" name="class_id">
                                    <input type="hidden" value="{{@$class_section_id}}" name="class_section_id">

                                <div class="form-row">
                                <div class="form-group col-md-3 mt-2">
                                    <label class="control-label">Attendance Date</label>
                                    <input type="date" name="date" id="date" class="checkdate form-control form-control-sm singledatepicker" autocomplete="off" required>
                                </div>
                                </div>

                                <table class="table-sm table-bordered table-striped table-responsive" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" class="text-center" style="vertical-align:middle;">S/N</th>
                                            <th rowspan="2" class="text-center" style="vertical-align:middle;">Name</th>
                                            <th colspan="3" class="text-center" style="vertical-align:middle; width: 35%;">Status
                                                <tr>
                                                    <th class="text-center btn present_all" style="display: table-cell; background-color: #114190;color: white;">Present</th>
                                                    <th class="text-center btn leave_all" style="display: table-cell; background-color: #114190; color: white;">Leave</th>
                                                    <th class="text-center btn absent_all" style="display: table-cell; background-color: #114190;color: white;">Absent</th>
                                                </tr>
                                            </th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @if(isset($students))
                                        @foreach ($students as $key => $student)
                                            <tr id="div{{$student->id}}"  class="text-center">
                                                <input type="hidden" name="student_id[]" value="{{$student->id}}" class="student_id">
                                                <td>{{$key+1}}</td>
                                                <td >{{$student->first_name}} {{$student->middle_name}} {{$student->last_name}} </td>
                                                <td colspan="3">
                                                    <div class="switch-toggle switch-light switch-candy">
                                                    <input class="present" id="present{{$key}}" name="attend_status{{$key}}" value="present" type="radio" checked="checked"  />
                                                    <label for="present{{$key}}">Present</label>

                                                    <input class="leave" id="leave{{$key}}" name="attend_status{{$key}}" value="leave" type="radio"  />
                                                    <label for="leave{{$key}}">Leave</label>

                                                    <input class="absent" id="absent{{$key}}" name="attend_status{{$key}}" value="absent" type="radio"  />
                                                    <label for="absent{{$key}}">Absent</label>
                                                </td>
                                        @endforeach
                                        @endif
                                    <tbody><br>
                                </table>
                                <div class="col-md-3">
                                <button type="submit" class="btn btn-success btn-sm text-white btn-block text-white mt-2">Record</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

<script type="text/javascript">
$(document).on('click','.present',function(){
    $(this).parents('tr').find('.datetime').css('pointer-events','none').css('background-color','#dee2e6').css('color','#495057');
})

$(document).on('click','.leave',function(){
    $(this).parents('tr').find('.datetime').css('pointer-events','none').css('background-color','#dee2e6').css('color','#495057');
})

$(document).on('click','.absent',function(){
    $(this).parents('tr').find('.datetime').css('pointer-events','none').css('background-color','#dee2e6').css('color','#495057');
});
</script>

<script type="text/javascript">
    $(document).on('click','.present_all',function(){
        $("input[value=present]").prop('checked',true);
        $('.datetime').css('pointer-events','none').css('background-color','#dee2e6').css('color','#495057');
    });

    $(document).on('click','.leave_all',function(){
        $("input[value=leave]").prop('checked',true);
        $('.datetime').css('pointer-events','none').css('background-color','#dee2e6').css('color','#495057');
    });

    $(document).on('click','.absent_all',function(){
        $("input[value=absent]").prop('checked',true);
        $('.datetime').css('pointer-events','none').css('background-color','#dee2e6').css('color','#495057');
    });


    </script>

@endsection
