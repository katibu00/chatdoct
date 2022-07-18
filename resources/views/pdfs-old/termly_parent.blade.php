<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>End of Term Report Sheet</title>
    <style type="text/css">
        table{
            border-collapse: collapse;
        }
        h2 h3{
            margin: 0;
            padding: 0;
        }
        .table{
            width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }
        .table th,
        .table td{
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }
        .table thead th{
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }
        .table tbody + tbody{
            border-top: 2px solid #dee2e6;
        }
        .table .table{
            background-color: #fff;
        }
        .table-bordered{
            border: 1px solid #dee2e6;
        }
        .table-bordered th,
        .table-bordered td{
            border: 1px solid #dee2e6;
        }
        .text-center{
            text-align: center;
        }
        .text-right{
            text-align: right;
        }
        .text-left{
            text-align: left;
        }
        table tr td{
            padding: 5px;
        }
        .table-bordered thead th, .table-bordered td, .table-bordered th{
            border: 1px solid black !important;
        }
        .table-bordered thead th{
            background-color: #cacaca;
        }
    </style>
</head>

@foreach($students as $position => $student)

@php
    $count = App\Models\User::where('class_id',$student->class_id)->where('class_section_id',$student->class_section_id)->count();
@endphp
<body>
<div class="container" style="margin-top: -30px;">
<div class="row">
    <div class="col-md-12">
       <table width="100%">
           <tr>
               <td class="text-center" width="15%">
                   <img  src="{{asset("uploads").'/'.$institution->username.'/'.$institution->logo}}" style="width: 100px; height: 100px;">
               </td>
               <td class="text-center" width="85%">
                <{{$institution->heading}} style="text-transform: uppercase;"><strong>{{$school->name}}</strong></{{$institution->heading}}>
                <h5 style="margin-top: -10px;"><strong>Tel: {{$school->phone_first}} | website: {{$school->website}} | Email: {{$school->email}}</strong></h5>
                <h5 style="margin-top: -20px;"><strong>{{$school->address}}</strong></h5>
            </td>

           </tr>
       </table>
       <div style="margin-top: -30px;">
        <h4 style="text-transform: uppercase; text-align: center; border-bottom: 2px solid black; border-top: 2px solid black; padding:5px;"><strong>Student's End of Term Report Form</strong></h4>
       </div>
    </div>


    <div style="width: 100%">
        <div style="width: 40%; float: left;">
                @php
                    $user = App\Models\user::where('id',$student->id)->first();
                @endphp
               <p style="margin-top: -15px; text-transform:uppercase;"><strong>Roll Number:</strong> {{$user->roll_number}}</p>
               <p style="margin-top: -15px; text-transform:uppercase;"><strong>Name:</strong> {{$user->first_name}}  {{$user->middle_name}}  {{$user->last_name}}</p>
               <p style="margin-top: -15px; text-transform:uppercase;"><strong>Class: </strong> {{$user['class']['name']}}  {{$user['class_section']['name']}}</p>
        </div>

        @php
            $subjects = App\Models\Marks::select('subject_id')->where('class_id',$user->class_id)->where('class_section_id',$user->class_section_id)->where('school_id',$school_id)->groupBy('subject_id')->get();
            $subject_number = $subjects->count();
            if($subject_number == 0){
                $subject_number = 1;
            }

            $total = App\Models\Marks::where('class_id',$user->class_id)->where('class_section_id',$user->class_section_id)->where('term',$term)->where('school_id',$school_id)->where('user_id',$student->id)->sum('marks');

            $total_marks = $total;
            $average =  $total_marks/$subject_number
         @endphp

        <div style="width: 40%; float: left; margin-left: 0px;">
                <p style="margin-top: -15px;"><strong>TERM:</strong> {{$term}} Term</p>
                @php
                    $session = App\Models\Session::where('id',$session_id)->where('school_id',$school_id)->first();
                @endphp
                <p style="margin-top: -15px;"><strong>SESSION:</strong> {{$session->name}}</p>
                <p style="margin-top: -15px;"><strong>Class Population:</strong> {{$count}}</p>

                @if($institution->show_position == 'on')
                   {{-- <p style="margin-top: -15px;"><strong>Position:</strong> {{$position+1}}</p> --}}
                @endif

                <p style="margin-top: -15px;"><strong>Marks Obtained:</strong> {{$total_marks}} out of   {{$subject_number*100}}</p>
                <p style="margin-top: -15px;"><strong>Average Score:</strong> {{number_format($average,2)}}</p>
                @if($institution->show_attendance == 'on')
                     @php
                         $absent = App\Models\Attendance::where('class_id', $user->class_id)->where('class_section_id',  $user->class_section_id)->where('school_id',  $school_id)->where('status','!=','present')->where('term',$term)->where('session_id',$session_id)->where('user_id',$user->id)->get()->count();
                         $number = App\Models\Attendance::select('date')->where('class_id', $user->class_id)->where('class_section_id',  $user->class_section_id)->where('school_id',  $school_id)->where('session_id',$session_id)->groupBy('date')->get()->count();

                     @endphp

                <p style="margin-top: -15px;"><strong>Attendance:</strong>Absent {{$absent}} out of {{$number}} times</p>
                @endif
        </div>

        <div style="width:20%; float: right;">
              <p style="margin-top: -10px; margin-left: 0px;"><img @if($user->image == 'default.png') src="{{asset("uploads/default.png")}}"  @else src="{{asset("uploads").'/'.$institution->username.'/'.$user->image}}" @endif style="width: 100px; height: 100px; border: 2px solid black;"></p>
        </div>
    </div>

    <div style="width: 100%; overflow: auto; clear:both; margin-top: 30px;">
        <div class="col-md-12">
            <table border="1" width="100%" cellpadding="1" cellspacing="2">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 10%;">S/N</th>
                        <th class="text-center"  style="width: 40%;">Subject</th>
                        <th class="text-center"  style="width: 10%;">CA</th>
                        <th class="text-center" style="width: 10%;" >Exam</th>
                        <th class="text-center"  style="width: 10%;">Total</th>
                        <th class="text-center"  style="width: 10%;">Grade</th>
                        <th class="text-center"  style="width: 10%;">Remarks</th>

                    </tr>
                </thead>
                <tbody>
                    {{-- @php
                        $subjects = App\Models\Marks::select('subject_id')->where('class_id',$class_id)->where('class_section_id',$class_section_id)->where('term',$term)->where('school_id',$school_id)->groupBy('subject_id')->get();
                    @endphp --}}
                    @foreach($subjects as $key => $subject)
                        @php
                           $subject_name = App\Models\AssignSubjects::where('id',$subject->subject_id)->first();
                        @endphp
                        <tr>
                            <td class="text-center">{{$key+1}}</td>
                            <td class="text-center">{{$subject_name['subject']['name']}}</td>

                            @php
                                 $cas = App\Models\Marks::where('user_id',$user->id)->where('class_id',$user->class_id)->where('class_section_id',$user->class_section_id)->where('term',$term)->where('school_id',$school_id)->where('type','ca')->where('subject_id',$subject->subject_id)->get();
                                 $exams = App\Models\Marks::where('user_id',$user->id)->where('class_id',$user->class_id)->where('class_section_id',$user->class_section_id)->where('term',$term)->where('school_id',$school_id)->where('type','exam')->where('subject_id',$subject->subject_id)->get();

                                 $ca = 0;
                                    foreach($cas as $key=>$value){
                                        $ca += $value->marks;
                                    }

                                    $exam = 0;
                                    foreach($exams as $key=>$value){
                                        $exam += $value->marks;
                                    }
                                    $total = $exam+$ca;

                                $grade_marks = App\Models\Grade::where([['start_mark','<=',(int)$total],['end_mark','>=',(int)$total]])->first();
                                $letter_grade = $grade_marks->letter_grade;
                                $remark = $grade_marks->remarks;


                            @endphp
                             <td class="text-center">{{$ca}}</td>
                             <td class="text-center">{{$exam}}</td>
                             <td class="text-center">{{$total}}</td>
                             <td class="text-center">{{$letter_grade}}</td>
                             <td class="text-left">{{$remark}}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- <p style="text-align: center; text-transform: uppercase; width: 100%; border-bottom: 2px solid black; padding: 5px;">REMARKS</p>

            <div style=" width: 100%; overflow: auto; clear:both; margin-top: -10px;">
                <div style="width: 50%; float: left; text-align: center;">
                    <p style="text-align: center; width: 80%; margin-left: 5%; margin-top: 7%; border-top: 1px solid black; padding: 5px;">Principal</p>
                </div>

                <div style="width: 50%; float: right;">
                    <p style="text-align: center; width: 80%; margin-left: 0%; margin-top: 7%; border-top: 1px solid black; padding: 5px;">Form Master</p>
                </div>
            </div> --}}


        </div>
    </div>
    <div style=" width: 100%; overflow: auto; clear:both; margin-top: 30px;">
        <div style="width: 20%; float: left; text-align: center;">
            <img src="{{asset("uploads/qr-code.png")}}" style="width: 80px; height: 80px;">
        </div>

        <div style="width: 80%; float: right;">
            <p style="font-size: 12px;">INTERPRETATION OF GRADES: A1 Excellent 75%-100%, B2 Very Good 70%-74%, B3 Good 65%-69%, C4 Credit 60%-64%, C5 Credit 55%-59%, C6 Credit 50%-54%, D7 Pass 45%-49%, E8 Pass 40%-45%, F9 Fail 1% - 44%, ABSENT 0%</p>
        </div>
    </div>

    <div style=" width: 100%; margin-top: -100px; clear: both;">
            <p style="font-size: 14px; text-align: center; margin-top: -5px;">THIS REPORT REQUIRES SIGNATURE</p>
    </div>
    <div style=" width: 100%; margin-top: -20px;">
        <p style="font-size: 13px; text-align: center">Generated on {{date("l, jS \of F Y ")}} @ {{date("h:i A")}}</p>
    </div>

</div>
</body>
@endforeach
</html>

