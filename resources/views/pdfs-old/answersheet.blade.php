
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personalized Answer Sheets</title>
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
        body{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
    </style>
</head>
@foreach($users as $user)
<body>
<div class="container" style="margin-top: -30px;">
<div class="row">
    <div class="col-md-12">
       <table width="100%">
        <tr>
            <td class="text-center" width="15%">
                <img src="{{asset("uploads").'/'.$institution->username.'/'.$institution->logo}}" style="width: 80px; height: 80px;">
            </td>
            <td class="text-center" width="85%">
             <{{$institution->heading}} style="text-transform: uppercase;"><strong>{{$institution->name}}</strong></{{$institution->heading}}>
             <h5 style="margin-top: -15px;"><strong>{{$institution['session']['name']}} Session - {{$institution->term}} Term Examination</strong></h5>
             <h4 style="margin-top: -18px;"><strong>{{$subject['subject']['name']}}</h4>
         </td>
       </table><hr style="margin-top: -15px; margin-bottom:  15px;">
    </div>



    <div style="width: 100%">

        <div style="width:17%; float: left; ">
            {{-- <p style="margin-top: -10px; margin-left: 0px;"><img src="{{public_path('/uploads/users/').$user['student']['image']}}" style="width: 100px; height: 100px; border: 2px solid black;"></p> --}}
            <p style="margin-top: -10px; margin-left: 0px;"><img @if($user->image == 'default.png') src="{{asset("uploads/default.png")}}"  @else src="{{asset("uploads").'/'.$institution->username.'/'.$user->image}}" @endif style="width: 100px; height: 100px; border: 2px solid black;"></p>

      </div>

        <div style="width: 43%; float: left;">

            <p style="margin-top: 0px;"><strong>Roll Number:</strong> {{$user->roll_number}}</p>
            <p style="margin-top: -18px;"><strong>Name:</strong> {{$user->first_name}}  {{$user->middle_name}}  {{$user->last_name}}</p>
            <p style="margin-top: -18px;"><strong>Class: </strong> {{$user['class']['name']}}  {{$user['class_section']['name']}}</p>
               <p style="margin-top: -15px;"><h5>SIGNATURE:__________________</h5></p>
        </div>

        <div style="width: 30%; float: right; margin-left: 0px;clear:both;">
                <p style="margin-top: -15px;"><h5>Instructions:</h5></p>
                <p style="margin-top: -15px; font-size: 13px;">1) Sign in the space provided</p>
                <p style="margin-top: -15px; font-size: 13px;">2) Shade the Correct Answer using Pencil</p>
                <p style="margin-top: -15px; font-size: 13px;">3) Shading more than one option invalidates the answer</p>

        </div>
        <div style="width: 20%; float: right; text-align: center;">
            <img src="{{asset('/uploads/qr-code.png')}}" style="width: 80px; height: 80px;">
        </div>


    </div>

    <div style=" width: 100%; clear: both; overflow: auto; ">
        <p style="margin-top: -10px; text-align: center; text-transform: uppercase; width: 100%; border: 1px solid black; padding: -5px;">Answer all Questions</p>
    </div>
    {{-- <p style="text-align: left; text-transform: uppercase; width: 100%; border-bottom: 2px solid black; padding: 5px;">Registered Courses</p> --}}

    <div style="width: 100%; overflow: auto; clear:both; margin-top: 30px;">

        <div class="col-md-12">
            <div style="width: 100%;  text-align: center;">
                <img src="{{asset('/uploads/answer.jpg')}}" style="width: 80%;">
            </div>

        </div>
    </div>

</div>
</body>
@endforeach
</html>

