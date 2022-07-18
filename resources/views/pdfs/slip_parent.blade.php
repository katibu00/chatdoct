
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Payment Slip</title>
    <style type="text/css">
        .content-table{
            border-collapse: collapse;
            margin: 0 auto;
            font-size: 0.9em;

            /* border-radius:  5px 5px 0 0; */
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
            padding: 2px 15px;
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
            font-size: 0.9em;
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
                <img src="{{asset("uploads").'/'.$institution->username.'/'.$institution->logo}}" style="width: 80px; height: 80px;">
            </td>
               <td class="text-center" width="85%">
                <{{$institution->heading}} style="text-transform: uppercase;"><strong>{{$institution->name}}</strong></{{$institution->heading}}>
                <h5 style="margin-top: -10px;"><strong>Tel: {{$institution->phone_first}} | website: {{$institution->website}} | Email: {{$institution->email}}</strong></h5>
                <h5 style="margin-top: -20px;"><strong>{{$institution->address}}</strong></h5>
            </td>

           </tr>
       </table>
       <div style="margin-top: -30px;">
        <h5 style="text-transform: uppercase; text-align: center; border-bottom: 2px solid black; padding:5px;"><strong>Invoiced to {{Auth::user()->first_name}} {{Auth::user()->middle_name}}  {{Auth::user()->last_name}}</strong></h5>
       </div>
    </div>


    <div style="width: 100%">
        <div style="width: 50%; float: left;">

            <p style="margin-top: -5px;"><strong>Roll Number:</strong> {{ $user->roll_number }} </p>
            <p style="margin-top: -15px; "><strong>Name:</strong> {{ $user->first_name }}
                {{ $user->middle_name }} {{ $user->last_name }}</p>
            <p style="margin-top: -15px;"><strong>Class: </strong> {{ $user['class']['name'] }}
                {{ $user['class_section']['name'] }}</p>
            @if ($user['parent']['first_name'] != null)<p style="margin-top: -15px;"><strong>Parent/Guardian: </strong> {{ $user['parent']['first_name'] }}  {{ $user['parent']['middle_name'] }}  {{ $user['parent']['last_name'] }}</p>@endif
            @if ($user['parent']['phone'] != null) <p style="margin-top: -15px;"><strong>Mobile Number: </strong> {{ $user['parent']['phone'] }}</p>@endif
        </div>

        <div style="width: 15%; float: left; margin-left: 0px;">

        </div>
        <div style="width:50%; float: right; margin-left: 0px; ">
            <p style="margin-top: -15px; color: red;"><strong>Bank Transfer:</strong></p>
            <p style="margin-top: -15px;"><strong>Account Name:</strong>
                {{ $institution->first_acct_name }}</p>
            <p style="margin-top: -15px;"><strong>Account No/Bank:</strong>
                {{ $institution->first_acct_no }} ({{ $institution->first_bank_name }})</p>
            <p style="margin-top: -15px;"><strong>Account Name:</strong>
                {{ $institution->second_acct_name }}</p>
            <p style="margin-top: -15px;"><strong>Account No/Bank:</strong>
                {{ $institution->second_acct_number }} ({{ $institution->second_bank_name }})</p>
        </div>
    </div>

    <div style="width: 100%; clear: both; overflow: auto; border-top: 2px solid black;">
        <h2 style="font-size: 20px; text-align: center; text-transform: uppercase;">{{$institution->name}} - STUDENT PAYMENT SLIP</h2>
        <h2 style="font-size: 16px; text-align: center; text-transform: uppercase; margin-top: -10px;">{{$institution['session']['name']}} Session - {{$institution->term}} Term Fee Collection</h2>
    </div>
    <div style="border:  2px solid black; width: 100%; clear: both; overflow: auto;">
        <p style="font-size: 14px; text-align: center;">REGISTRATION FEES ARE NOT REFUNDABLE</p>
    </div>

    <div style="width: 100%; overflow: auto; clear:both; margin-top: 30px;">
        <div style="width: 80%; margin: 0 auto;">
            <table class="content-table">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 15%;">S/N</th>
                        <th class="text-center"  style="width: 50%;">Item/Description</th>
                        <th class="text-center"  style="width: 35%;">Cost (<span style="text-decoration: line-through; text-decoration-style: double;">N</span>)</th>

                    </tr>
                </thead>
                @php
                   $fee = App\Models\AssignFee::where('school_id', $institution->id)->where('class_id',$user->class_id)->where('student_type','Returning')->get();

                @endphp

                    <?php
                    $sum = 0;
                    foreach($fee as $key=>$value){
                        $sum += $value->amount;
                    }
                    ?>
                  <tbody>
                    @foreach ($fee as $key=>$value)
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
                   <li><span style="margin-top: -15px;">Make payment to one of the above account numbers or in the
                                school premises.</span></li>
                        <li><span style="margin-top: -15px;">Verify your payment by login to your dashboard > Payment
                                Notification.</span></li>
                        <li><span style="margin-top: -15px;">Receipt will be sent to your email after processing your
                                payment.</span></li>
                        <li><span style="margin-top: -15px;">Busy parents are encouraged to transfer directly to the
                                above account number.</span></li>


            </div>


        </div>
    </div>
    <div style=" width: 100%; overflow: auto; clear:both; margin-top: 10px;">
        <div style="width: 20%; float: left; text-align: center;">
            <img src="{{asset('/uploads/qr-code.png')}}" style="width: 80px; height: 80px;">
        </div>

        <div style="width: 80%; float: right;">
            <h2 style="font-size: 23px; text-align: center">Payment should be made the soonest possible.</h2>
        </div>
    </div>

    <div style=" width: 100%; margin-top: -100px; clear: both;">

    </div>
    <div style=" width: 100%; margin-top: -20px;">
        <p style="font-size: 13px; text-align: center">Generated on {{date("l, jS \of F Y ")}} @ {{date("h:i A")}}</p>
    </div>

</div>
</body>
@endforeach
</html>

