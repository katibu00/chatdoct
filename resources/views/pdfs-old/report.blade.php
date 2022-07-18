<?php
$sum = 0;
   foreach($invoice as $key=>$value){
    $sum += $value->amount;
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Report</title>
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

    </div>

    <div style="width: 100%; clear: both; overflow: auto; border-buttom: 2px solid black;">
        <h3 style="font-size: 16px; text-align: center; text-decoration:underline;margin-top:-20px;">Payment Report For {{$class->name}} {{$section->name}}</h3>
    </div>


    <div style="width: 100%; overflow: auto; clear:both; margin-top: 0px;">
        <div style="width: 100%; margin:;">
            <table border="1" width="100%" cellpadding="1" cellspacing="2" style="margin-top: 0px;">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 10%;">S/N</th>
                        <th class="text-center"  style="width: 45%;">Name</th>
                        <th class="text-center"  style="width: 15%;">Payable (N)</th>
                        <th class="text-center"  style="width: 15%;">Paid (N)</th>
                        <th class="text-center"  style="width: 15%;">Balance (N)</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($users as $key => $user)

                            @php
                            $allPayment = App\Models\Payment::where('school_id',$school_id)->where('student_id',$user->id)->where('session_id',$session)->where('term',$term)->where('class_id',$class->id)->where('class_section_id',$section->id)->get();
                       $total_payment = 0;
                            $total = 0;

                            foreach($allPayment as $all){
                                    $total += $all->amount;
                                }

                             @endphp
                            <tr>
                                <td class="text-center">{{$key+1}}</td>
                                <td class="text-left"> {{$user->first_name}} Students</td>
                                <td class="text-center">{{number_format($sum,0)}}</td>
                                <td class="text-center">{{number_format($total,0)}}</td>
                                <td class="text-center">{{number_format($sum-$total,2)}}</td>
                            </tr>
                        @endforeach

                </tbody>
            </table>
        </div>


        <div style="width: 80%; margin: ;">
            <p style="margin-left: 90px;">Class PR Summary</p>
            <table border="1" width="50%" cellpadding="1" cellspacing="2" style="margin-top: 5px;">

                <tbody>

                    <tr>
                        <th style="width: 60%; ">Number of Students</th>
                        <td class="text-center"  style="width: 40%;">{{$users->count()}}</td>
                    </tr>

                    <tr>
                        <th style="width: 60%;">Amount/Student</th>
                        <td class="text-center"  style="width: 40%;">{{$sum}}</td>
                    </tr>

                        @php
                              $receivable = $users->count()*$sum;
                        @endphp
                    <tr>
                        <th style="width: 60%;">Total Receivable (N)</th>
                        <td class="text-center"  style="width: 40%;">{{number_format($receivable,0)}}</td>
                    </tr>








                        @php
                          $total_payment = 0;

                            $total_paid = App\Models\Payment::where('school_id',$school_id)->where('session_id',$session)->where('term',$term)->where('class_id',$class->id)->where('class_section_id',$section->id)->get();

                            foreach($total_paid as $total_paym){

                                $total_payment += $total_paym->amount;

                                }
                        @endphp
                        <tr>
                           <th style="width: 60%;">Total Received (N)</th>
                           <td class="text-center"  style="width: 40%;">{{number_format($total_payment,0)}}</td>
                          </tr>

                          <tr>
                            <th style="width: 60%;">Total Unpaid (N)</th>
                            <td class="text-center"  style="width: 40%;">{{number_format($receivable-$total_payment,0)}}</td>
                            </tr>
                </tbody>
            </table>
        </div>


        </div>
    </div>
    <div style=" width: 100%; overflow: auto; clear:both; margin-top: 20px;">
        {{-- <div style="width: 20%; float: left; text-align: center;">
            <img src="{{asset('/uploads/qr-code.png')}}" style="width: 80px; height: 80px; margin-top: 20px;">
        </div> --}}

        <div style="width: 80%; float: right;">
            {{-- <h4 style="font-size: 18px; text-align: center">The Sum of <span style="text-decoration: line-through; text-decoration-style: double;">N</span>{{number_format($payment->amount,2)}} was paid to {{$institution->name}} in respect of {{$institution['session']['name']}} Academic Session - {{$institution->term}} Term Fee Collection Services via {{$payment['method']['completion']}} on {{$payment->created_at->format('F  j, Y')}}.</h4> --}}
        </div>
    </div>

    <div style=" width: 100%; margin-top: -100px; clear: both;">

    </div>
    {{-- <div style="border:  2px solid black; width: 100%; clear: both; overflow: auto;">
        <p style="font-size: 14px; text-align: center;">REGISTRATION FEES ARE NOT REFUNDABLE</p>
    </div> --}}
    <div style=" width: 100%; margin-top: 20px;">
        <p style="font-size: 13px; text-align: center">Generated on {{date("l, jS \of F Y ")}} @ {{date("h:i A")}}</p>
    </div>

</div>
</body>
</html>

