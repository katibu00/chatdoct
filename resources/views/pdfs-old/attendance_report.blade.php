<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Termly Attendance Report</title>
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
<body>
<div class="container" style="margin-top: -30px;">
<div class="row">
    <div class="col-md-12">
       <table width="100%">
           <tr>
               <td class="text-center" width="15%">
                   <img  src="{{asset("uploads").'/'.$school->username.'/'.$school->logo}}" style="width: 100px; height: 100px;">
               </td>
               <td class="text-center" width="85%">
                <{{$school->heading}} style="text-transform: uppercase;"><strong>{{$school->name}}</strong></{{$school->heading}}>
                <h5 style="margin-top: -10px;"><strong>Tel: {{$school->phone_first}} | website: {{$school->website}} | Email: {{$school->email}}</strong></h5>
                <h5 style="margin-top: -20px;"><strong>{{$school->address}}</strong></h5>
            </td>

           </tr>
       </table>
       <div style="margin-top: -30px;">
        <h4 style="text-transform: uppercase; text-align: center; border-bottom: 2px solid black;  padding:5px;"><strong>Attendance Report for {{$class['class']['name']}}  {{$class['class_section']['name']}}</strong></h4>
       </div>
    </div>
    @php
        $number = App\Models\Attendance::select('date')->where('class_id', $class->class_id)->where('class_section_id',  $class->class_section_id)->where('school_id',  $class->school_id)->where('term',$term)->where('session_id',$session)->groupBy('date')->get()->count();
    @endphp

    Attendance Recorded <strong>{{$number}}</strong> times

    <div style="width: 100%; overflow: auto; clear:both; margin-top: 10px;">
        <div class="col-md-12">
            <table class="table-sm table-bordered table-striped dt-responsive" style="width: 100%;">
                <thead>
                    <tr>
                        <th class="text-center" style="vertical-align:middle;">S/N</th>
                        <th class="text-center" style="vertical-align:middle;">Name</th>
                        <th class="text-center" style="vertical-align:middle;">Present</th>
                        <th class="text-center" style="vertical-align:middle;">Leave</th>
                        <th class="text-center" style="vertical-align:middle;">Absent</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr class="text-center">
                            <td>{{$key+1}}</td>
                            <td class="text-left">{{$user->first_name}} {{$user->middle_name}} {{$user->last_name}}</td>
                            <td>
                                @php
                                   $present = App\Models\Attendance::where('class_id', $class->class_id)->where('class_section_id',  $class->class_section_id)->where('school_id',  $class->school_id)->where('status','=','present')->where('term',$school->term)->where('session_id',$school->session_id)->where('user_id',$user->id)->get()->count();
                                @endphp
                                {{$present}}
                            </td>
                            <td>
                            @php
                                $leave = App\Models\Attendance::where('class_id', $class->class_id)->where('class_section_id',  $class->class_section_id)->where('school_id',  $class->school_id)->where('status','=','leave')->where('term',$school->term)->where('session_id',$school->session_id)->where('user_id',$user->id)->get()->count();
                             @endphp
                             {{$leave}}
                            </td>

                            <td>
                                @php
                                    $absent = App\Models\Attendance::where('class_id', $class->class_id)->where('class_section_id',  $class->class_section_id)->where('school_id',  $class->school_id)->where('status','=','absent')->where('term',$school->term)->where('session_id',$school->session_id)->where('user_id',$user->id)->get()->count();
                                 @endphp
                                 {{$absent}}
                                </td>

                    @endforeach
                <tbody><br>
            </table>

    <div style=" width: 100%; margin-top: 20px;">
        <p style="font-size: 13px; text-align: center">Generated on {{date("l, jS \of F Y ")}} @ {{date("h:i A")}}</p>
    </div>

</div>
</body>
</html>

