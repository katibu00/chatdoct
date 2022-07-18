<?php
$sum = 0;
$total = 0;
   foreach($invoice as $key=>$value){
    $sum += $value->amount;
   }

   foreach($allPayment as $all){
    $total += $all->amount;
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPR - {{$user->first_name}} {{$user->middle_name}} {{$user->last_name}}</title>
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
        bode{
            font-family:Arial, Helvetica, sans-serif;
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
                   <img src="{{asset("uploads").'/'.$institution->username.'/'.$institution->logo}}" style="width: 80px; height: 80px;">
               </td>
               <td class="text-center" width="85%">
                <{{$institution->heading}} style="text-transform: uppercase;"><strong>{{$institution->name}}</strong></{{$institution->heading}}>
                <h5 style="margin-top: -10px;"><strong>Tel: {{$institution->phone_first}} | website: {{$institution->website}} | Email: {{$institution->email}}</strong></h5>
                <h5 style="margin-top: -20px;"><strong>{{$institution->address}}</strong></h5>
            </td>

           </tr>
       </table>
       <div style="margin-top: -20px;">
        <hr style="margin-bottom: 30px; color: black;">
       </div>
    </div>


    <div style="width: 100%">
        <div style="width: 40%; float: left;">

            <p style="margin-top: 0px;"><strong>Roll Number:</strong> {{$user->roll_number}}</p>
            <p style="margin-top: -18px;"><strong>Name:</strong> {{$user->first_name}}  {{$user->middle_name}}  {{$user->last_name}}</p>
            <p style="margin-top: -18px;"><strong>Class: </strong> {{$user['class']['name']}}  {{$user['class_section']['name']}}</p>
     </div>

        <div style="width: 10%; float: left; margin-left: 0px;">

        </div>

        <div style="width:50%; float: right; margin-top: -15px;">

            <p style="margin-top: 0px;"><strong>Total Amount Payable:</strong> N{{number_format($sum,0)}}</p>
            <p style="margin-top: -18px;"><strong>Amount Paid (This Transaction):</strong> N{{number_format($payment->amount,0)}}</p>
            <p style="margin-top: -18px;"><strong>Total Amount Paid:</strong> N{{number_format($total,0)}}</p>
            <p style="margin-top: -18px;"><strong>Payment Description:</strong>{{$payment['description']['name']}}</h5></p>
            <p style="margin-top: -18px;"><strong>Balance:</strong> N</span>{{number_format($sum - $total,2)}}</p>
            <p style="margin-top: -18px;"><strong>Processed:</strong> {{$payment->created_at->format('l, jS \of F Y')}}</p>
        </div>
    </div>

    <div style="width: 100%; clear: both; overflow: auto; border-top: 2px solid black;">
        <h2 style="font-size: 20px; text-align: center; text-transform: uppercase;">{{$institution['session']['name']}} {{$institution->semester}} SEMESTER ONLINE REGISTRATION - STUDENT PAYMENT RECEIPT</h2>
    </div>


    <div style="width: 100%; overflow: auto; clear:both; margin-top: 30px;">
        <div style="width: 80%; margin: 0 auto;">
            <h4 style="font-size: 16px; text-align: center; text-transform: initial; margin-top: -10px;"> Payment Details for:</h5>
            <h6 style="font-size: 14px; text-align: center; text-transf orm: initial; margin-top: 0px;">({{$user->roll_number}} -  {{$user['class']['name']}}  {{$user['class_section']['name']}})</h6>
           <table border="1" width="100%" cellpadding="1" cellspacing="2" style="margin-top: -50px;">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 15%;">S/N</th>
                        <th class="text-center"  style="width: 50%;">Item/Description</th>
                        <th class="text-center"  style="width: 35%;">Cost (<span style="text-decoration: line-through; text-decoration-style: double;">N</span>)</th>
                      h>
                    </tr>
                </thead>
                <tbody>

                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-left">School Fee for {{$user['class']['name']}} Students</td>
                            <td class="text-center">{{number_format($sum,0)}}</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="text-left">Late Payment Surcharge</td>
                            <td class="text-center">0.00</td>
                        </tr>

                        <tr>
                            <td class="text-center"></td>
                            <td class="text-right">Total Amount Payable</td>
                            <td class="text-center">{{number_format($sum,0)}}</td>
                        </tr>
                        <tr>
                            <td class="text-center"></td>
                            <td class="text-right">Total Amount Paid</td>
                            <td class="text-center">{{number_format($total,0)}}</td>
                        </tr>
                        <tr>
                            <td class="text-center"></td>
                            <td class="text-right"><strong>Outstanding Balance</strong></td>
                            <td class="text-center"><strong>{{number_format($sum - $total,2)}}</strong></td>
                        </tr>
                </tbody>
            </table>
        </div>

            <div style="width: 90%; margin: 0 auto; overflow: auto; clear:both; margin-top: 30px;">



            </div>


        </div>
    </div>
    <div style=" width: 100%; overflow: auto; clear:both; margin-top: 20px;">
        <div style="width: 20%; float: left; text-align: center;">
            <img src="{{asset('/uploads/qr-code.png')}}" style="width: 80px; height: 80px; margin-top: 20px;">
        </div>

        <div style="width: 80%; float: right;">
            <h4 style="font-size: 18px; text-align: center">The Sum of <span style="text-decoration: line-through; text-decoration-style: double;">N</span>{{number_format($payment->amount,2)}} was paid to {{$institution->name}} in respect of {{$institution['session']['name']}} Academic Session - {{$institution->term}} Term Fee Collection Services via {{$payment['method']['completion']}} on {{$payment->created_at->format('F  j, Y')}}.</h4>
        </div>
    </div>

    <div style=" width: 100%; margin-top: -100px; clear: both;">

    </div>
    <div style="border:  2px solid black; width: 100%; clear: both; overflow: auto;">
        <p style="font-size: 14px; text-align: center;">REGISTRATION FEES ARE NOT REFUNDABLE</p>
    </div>
    <div style=" width: 100%; margin-top: 20px;">
        <p style="font-size: 13px; text-align: center">Generated on {{date("l, jS \of F Y ")}} @ {{date("h:i A")}}</p>
    </div>

</div>
</body>
</html>

