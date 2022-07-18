
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student ID Card</title>

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
<body>

<div class="row">
    <div style="width: 50%; border: 2px solid black; margin: 0 auto; margin-bottom: 20px">


       <div style="width: 20%; float: left; padding: 8px; background: grey;  ">
        <img  src="{{public_path('/uploads/institution/').$institution->logo}}" style="width: 30px; height: 30px;">

       </div>
       <div style="width: 80%; float:right; background: grey; ">
        <p style="text-transform: uppercase; font-size: 14px;"><strong>{{$institution->name}}</strong></p>
       </div>

       <div style="clear:both;overflow: auto;"></div>
       <div style="width: 65%; float: left; padding: 10px;">
        <p style="font-size: 12px; margin-top: -10px; text-align: center; margin-left: 50px;">Student ID card</p>
        <p style="font-size: 13px; margin-top: 30px; text-transform: uppercase"><strong>{{$user->last_name}} {{$user->middle_name}} {{$user->first_name}}</strong></p>
        <p style="font-size: 13px; margin-top: -10px;"><strong>{{$user->matric_number}}</strong></p>
        <p style="font-size: 12px; margin-top: -10px;"><strong>{{$user['department']['name']}}</strong></p>

       </div>
       <div style="width: 35%; float:right; padding: 10px;">
        <img src="{{public_path('/uploads/users/').$user->image}}" style="width: 100px; height: 100px;  margin-left: 25px;">
       </div>
       <div style="clear:both;overflow: auto;"></div>
</div>
</body>
</html>

