<?php
$sum = 0;
   foreach($data as $key=>$value){
    $sum += $value->amount;
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Payment Slip</title>
    {{-- <link rel="stylesheet" href="{{public_path('/css/bootstrap.min.css')}}"> --}}
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
@foreach ($users as $user)
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
                <{{$institution->heading}} style="text-transform: uppercase;"><strong>{{$institution->name}}</strong></{{$institution->heading}}>
                <h5 style="margin-top: -10px;"><strong>Tel: {{$institution->phone_first}} | website: {{$institution->website}} | Email: {{$institution->email}}</strong></h5>
                <h5 style="margin-top: -20px;"><strong>{{$institution->address}}</strong></h5>
            </td>

           </tr>
       </table>
       <div style="margin-top: -40px;">
        <h5 style="text-transform: uppercase; text-align: center; border-bottom: 2px solid black; padding:5px;"><strong>Invoiced to {{Auth::user()->matric_number}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total Amount Due N{{number_format($sum,0)}}</strong></h5>
       </div>
    </div>


    <div style="width: 100%">
        <div style="width: 50%; float: left;">

               <p style="margin-top: -15px;"><h5>Roll NUMBER:</strong> {{$user->roll_number}} </h5></p>
               <p style="margin-top: -15px; text-transform: uppercase;"><h5>Name:</strong> {{$user->first_name}}  {{$user->middle_name}}  {{$user->last_name}}</h5></p>
               <p style="margin-top: -15px; text-transform: uppercase;"><h5>Class: </strong> {{$user['class']['name']}}  {{$user['class_section']['name']}}</h5></p>
        </div>

        <div style="width: 15%; float: left; margin-left: 0px;">

        </div>

        <div style="width:45%; float: right;">
            <p style="margin-top: -10px; color: red;"><strong>Bank Transfer:</strong></p>
            <p style="margin-top: -20px;"><h5>Account Name: {{$institution->first_acct_name}}</h5></p>
            <p style="margin-top: -20px;"><h5>Account No/Bank: {{$institution->first_acct_no}} ({{$institution->first_bank_name}})</h5></p>
            <p style="margin-top: -20px;"><h5>Account Name: {{$institution->second_acct_name}}</h5></p>
            <p style="margin-top: -20px;"><h5>Account No/Bank: {{$institution->second_acct_number}} ({{$institution->second_bank_name}})</h5></p>
        </div>
    </div>

    <div style="width: 100%; clear: both; overflow: auto; border-top: 2px solid black;">
        <h2 style="font-size: 20px; text-align: center; text-transform: uppercase;">{{$institution->name}} - STUDENT PAYMENT SLIP</h2>
        <h2 style="font-size: 16px; text-align: center; text-transform: uppercase; margin-top: -10px;">{{$institution['session']['name']}} Session - {{$institution->term}} Term Fee Collection</h2>
    </div>
    <div style="border:  2px solid black; width: 100%; clear: both; overflow: auto;">
        <p style="font-size: 14px; text-align: center;">REGISTRATION FEES ARE NOT REFUNDABLE</p>
    </div>

    <div style="width: 100%; overflow: auto; clear:both; margin-top: 15px;">
        <div style="width: 80%; margin: 0 auto;">
            <table border="1" width="100%" cellpadding="1" cellspacing="2">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 15%;">S/N</th>
                        <th class="text-center"  style="width: 50%;">Item/Description</th>
                        <th class="text-center"  style="width: 35%;">Cost (<span style="text-decoration: line-through; text-decoration-style: double;">N</span>)</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key=>$value)
                    <tr>
                    <td>{{$key+1}}</td>

                    <td>{{$value['fee_type']['name']}}</td>
                    <td style="text-align: center;">{{number_format($value->amount,0)}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td style="border: 0; cellpadding: 0; cellspacing: 0;"></td>
                        <td style="text-align: right"><strong>Amount Payable</strong></td>
                        <td style="text-align: center;"><strong>{{number_format($sum,0)}}</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
            {{-- <p style="text-align: center; text-transform: uppercase; width: 100%; border-bottom: 2px solid black; padding: 5px;">Certification by Head of Department</p>
            <p style="text-align: center; width: 35%; margin-left: 30%; margin-top: 7%; border-top: 1px solid black; padding: 5px;">Head of Department</p> --}}
            <div style="width: 90%; margin: 0 auto; overflow: auto; clear:both; margin-top: 30px;">

                    <p style="margin-top: -15px; text-align: center;"><strong>Instructions</strong></p>
                    <li><p style="margin-top: -15px;">Login to your dashboard and confirm the payment details.</p></li>
                    <li><p style="margin-top: -15px;">Make the payment to our Account Number and send us Notification</p></li>
                    <li><p style="margin-top: -15px;">After processing your payment, log back to your dashboard to generate your receipt.</p></li>
                 
            </div>


        </div>
    </div>
    <div style=" width: 100%; overflow: auto; clear:both; margin-top: 10px;">
        <div style="width: 20%; float: left; text-align: center;">
            <img src="{{asset('/uploads/qr-code.png')}}" style="width: 80px; height: 80px;">
        </div>

        <div style="width: 80%; float: right;">
            <h2 style="font-size: 23px; text-align: center">This Payment Schedule is Valid up to the midnight of {{$deadline}}</h2>
        </div>
    </div>

    <div style=" width: 100%; margin-top: -10px; clear: both;">

    </div>
    <div style=" width: 100%; margin-top: -20px;">
        <p style="font-size: 13px; text-align: center">Generated on {{date("l, jS \of F Y ")}} @ {{date("h:i A")}}</p>
    </div>

</div>
</body>
@endforeach
</html>

