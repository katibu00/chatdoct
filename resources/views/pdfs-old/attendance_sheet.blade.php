<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Offline Attendance Sheet</title>
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
        @foreach ($users as $key => $user)
            @if ($loop->first)
                    <h4 style="text-transform: uppercase; text-align: center; border-bottom: 2px solid black;  padding:5px;"><strong>Offline Attendance Sheet ({{$user['class']['name']}} {{$user['class_section']['name']}})</strong></h4>
            @endif
        @endforeach
       </div>
    </div>

    <div style="width: 100%; overflow: auto; clear:both; margin-top: 10px;">
        <div class="col-md-12">
            <table class="table-sm table-bordered table-striped dt-responsive" style="width: 100%;">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%;">S/N</th>
                        <th class="text-center"  style="width: 25%;">Name</th>
                        <th class="text-center"  style="width: 5%;">I</th>
                        <th class="text-center"  style="width: 5%;">II</th>
                        <th class="text-center"  style="width: 5%;">III</th>
                        <th class="text-center"  style="width: 5%;">IV</th>
                        <th class="text-center"  style="width: 5%;">V</th>
                        <th class="text-center"  style="width: 5%;">VI</th>
                        <th class="text-center"  style="width: 5%;">VIII</th>
                        <th class="text-center"  style="width: 5%;">IX</th>
                        <th class="text-center"  style="width: 5%;">X</th>

                    </tr>

                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr class="">
                            <td class="text-center">{{$key+1}}</td>
                            <td >{{$user->first_name}} {{$user->middle_name}} {{$user->last_name}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                    @endforeach
                <tbody><br>
            </table>

    <div style=" width: 100%; margin-top: 20px;">
        <p style="font-size: 13px; text-align: center">Generated on {{date("l, jS \of F Y ")}} @ {{date("h:i A")}}</p>
    </div>

</div>
</body>
</html>

