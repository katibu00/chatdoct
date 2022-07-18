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
    <style type="text/css">
        .content-table{
            border-collapse: collapse;
            margin: 25px; 0;
            font-size: 0.9em;
            min-width: 400px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            /* box-shadow: 0 2px 12px rgba(22,22,22,0.1); */
            /* border-radius: 12px 12px 0 0; */
            border: 3px solid black;

        }

        .content-table thead tr{
            color: #14211e;
            background-color: #ffffff;
            text-align: left;
            font-weight: bold;

        }
        .content-table th,
        .content-table td{
            padding: 5px 15px;
        }
        .content-table tbody tr{
            border-bottom: 2px solid #dddddd;
        }
        .content-table tbody tr:nth-of-type(even){
            background-color: #f3f3f3;
        }
        .content-table tbody tr:last-of-type{
            border-bottom: 5px solid    #009878;
        }
        .content-table th{
            background-color: rgb(72, 67, 67);
            color: white;
        }
        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-left {
            text-align: left;
        }
        p{
            font-size: 1em;
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
        <div style="width: 50%; float: left;">

            <p style="margin-top: -10px;"><strong>Roll Number:</strong> {{$user->roll_number}}</p>
            <p style="margin-top: -15px;"><strong>Name:</strong> {{$user->first_name}}  {{$user->middle_name}}  {{$user->last_name}}</p>
            <p style="margin-top: -15px;"><strong>Class: </strong> {{$user['class']['name']}}  {{$user['class_section']['name']}}</p>
            @if($user['parent']['first_name'] != null)<p style="margin-top: -15px;"><strong>Parent/Guardian: </strong> {{$user['parent']['first_name']}}  {{$user['parent']['middle_name']}}  {{$user['parent']['last_name']}}</p>@endif
            @if($user['parent']['phone'] != null) <p style="margin-top: -15px;"><strong>Mobile Number: </strong> {{$user['parent']['phone']}}</p>@endif
     </div>



        <div style="width:50%; float: right; margin-top: -10px;">

            <p style="margin-top: -10px;"><strong>Total Amount Payable:</strong> N{{number_format($sum,0)}}</p>
            <p style="margin-top: -15px;"><strong>Amount Paid (This Transaction):</strong> N{{number_format($payment->amount,0)}}</p>
            <p style="margin-top: -15px;"><strong>Total Amount Paid:</strong> N{{number_format($total,0)}}</p>
            <p style="margin-top: -15px;"><strong>Payment Description:</strong>{{$payment['description']['name']}}</h5></p>
            <p style="margin-top: -15px;"><strong>Balance:</strong> N</span>{{number_format($sum - $total,2)}}</p>
            <p style="margin-top: -15px;"><strong>Processed:</strong> {{$payment->created_at->format('l, jS \of F Y')}}</p>
        </div>
    </div>

    <div style="width: 100%; clear: both; overflow: auto; border-top: 2px solid black;">
        <h2 style="font-size: 20px; text-align: center; font-style:oblique; ">{{$institution['session']['name']}} {{$institution->term}} Term Fee Collection - Student Payment Receipt</h2>
    </div>


    <div style="width: 100%; overflow: auto; clear:both; margin-top: 0px;">
        <div style="width: 80%; margin: 0 auto;">
            <h4 style="font-size: 16px; text-align: center; text-transform: initial; margin-top: -30px;"> Payment Details for:</h5>
            <h6 style="font-size: 14px; text-align: center; text-transform: initial; font-style:oblique; line-height: 1.2em;">({{$user->roll_number}} -  {{$user['class']['name']}}  {{$user['class_section']['name']}})</h6>
            <table border="1" width="100%" cellpadding="1" cellspacing="2" style="margin-top: -50px;" class="content-table">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 15%;">S/N</th>
                        <th class="text-center"  style="width: 50%;">Item/Description</th>
                        <th class="text-center"  style="width: 35%;">Cost (<span style="text-decoration: line-through; text-decoration-style: double;">N</span>)</th>
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
            <h4 style="font-size: 18px; text-align: center">The Sum of <span style="text-decoration: line-through; text-decoration-style: double;">N</span>{{number_format($payment->amount,2)}} was paid to {{$institution->name}} in respect of {{$institution['session']['name']}} Academic Session - {{$institution->term}} Term Fee Collection Services via {{$payment['method']['completion']}} on {{$payment->created_at->format('l, jS \of F Y')}}.</h4>
        </div>
    </div>

    <div style=" width: 100%; margin-top: -100px; clear: both;">

    </div>
    <div style="border:  2px solid black; width: 100%; clear: both; overflow: auto;">
        <p style="font-size: 14px; text-align: center;">SCHOOL FEES ARE NOT REFUNDABLE AFTER PAYMENT</p>
    </div>
    <div style=" width: 100%; margin-top: 20px;">
        <p style="font-size: 13px; text-align: center">Generated on {{date("l, jS \of F Y ")}} @ {{date("h:i A")}}</p>
    </div>

</div>
</body>
</html>

