<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Payment Slip</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
        }

        h2 h3 {
            margin: 0;
            padding: 0;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody+tbody {
            border-top: 2px solid #dee2e6;
        }

        .table .table {
            background-color: #fff;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
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

        table tr td {
            padding: 5px;
        }

        .table-bordered thead th,
        .table-bordered td,
        .table-bordered th {
            border: 1px solid black !important;
        }

        .table-bordered thead th {
            background-color: #cacaca;
        }

        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

        }


        @media print {
            * {
                -webkit-print-color-adjust: exact;
            }
        }

        p {
            font-size: 14px;
        }

    </style>

</head>

<body>
    <?php
    $sum = 0;
    foreach ($data as $key => $value) {
        $sum += $value->amount;
    }
    ?>

    @foreach ($users as $user)
        <div class="container" style="margin-top: -30px;">
            <div class="row">
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td class="text-center" width="15%">
                                <img src="/uploads/{{ $institution->username }}/{{ $institution->logo }}" style="width: 80px; height: 80px;">
                            </td>
                            <td class="text-center" width="85%">
                                <{{ $institution->heading }} style="text-transform: uppercase;">
                                    <strong>{{ $institution->name }}</strong></{{ $institution->heading }}>
                                    <h5 style="margin-top: -10px;"><strong>Tel: {{ $institution->phone_first }} |
                                            website: {{ $institution->website }} | Email:
                                            {{ $institution->email }}</strong></h5>
                                    <h5 style="margin-top: -20px;"><strong>{{ $institution->address }}</strong></h5>
                            </td>

                        </tr>
                    </table>
                    <div style="margin-top: -30px;">
                        <h5 style="text-align: center; border-bottom: 2px solid black; padding:5px;"><strong>Invoiced
                                to:</strong>
                            {{ $user->roll_number }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <strong>Total Amount Due:</strong> NGN{{ number_format($sum, 0) }}</h5>
                    </div>
                </div>


                <div style="width: 100%">
                    <div style="width: 50%; float: left;  margin-left: 0px;">

                        <p style="margin-top: -5px;"><strong>Roll Number:</strong> {{ $user->roll_number }} </p>
                        <p style="margin-top: -15px; "><strong>Name:</strong> {{ $user->first_name }}
                            {{ $user->middle_name }} {{ $user->last_name }}</p>
                        <p style="margin-top: -15px;"><strong>Class: </strong> {{ $user['class']['name'] }}
                            {{ $user['class_section']['name'] }}</p>
                        @if ($user['parent']['first_name'] != null)<p style="margin-top: -15px;"><strong>Parent/Guardian: </strong> {{ $user['parent']['first_name'] }}  {{ $user['parent']['middle_name'] }}  {{ $user['parent']['last_name'] }}</p>@endif
                        @if ($user['parent']['phone'] != null) <p style="margin-top: -15px;"><strong>Mobile Number: </strong> {{ $user['parent']['phone'] }}</p>@endif
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
                    <{{ $institution->heading }}
                        style="font-size: 20px; text-align: center; text-transform: uppercase; margin-top: 0px;">
                        {{ $institution->name }} - STUDENT PAYMENT SLIP</{{ $institution->heading }}>
                        <h2 style="font-size: 16px; text-align: center; font-style: italic; margin-top: -5px;">
                            {{ $institution['session']['name'] }} Session - {{ $institution->term }} Term Fee
                            Collection</h2>
                </div>
                <div style="border:  2px solid black; width: 100%; clear: both; overflow: auto; margin-top: -px;">
                    <p style="font-size: 14px; text-align: center;">SCHOOL FEES ARE NOT REFUNDABLE AFTER PAYMENT</p>
                </div>

                <div style="width: 100%; overflow: auto; clear:both; margin-top: 20px;">
                    <div style="width: 80%; margin: 0 auto;">
                        {{-- <table border="1" width="100%" cellpadding="1" cellspacing="2" > --}}
                        <table class="content-table" border="1">
                            <thead style="background-color: black; color: white;">
                                <tr>
                                    <th class="text-center" style="width: 15%;">S/N</th>
                                    <th class="text-center" style="width: 50%;">Item/Description</th>
                                    <th class="text-center" style="width: 35%;">Cost (<span
                                            style="text-decoration: line-through; text-decoration-style: double;">N</span>)
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>

                                        <td>{{ $value['fee_type']['name'] }}</td>
                                        <td style="text-align: center;">{{ number_format($value->amount, 0) }}</td>
                                    </tr>
                                @endforeach
                                <tr>

                                    <td style="text-align: right" colspan="2"><strong>Total Amount Payable</strong></td>

                                    <td style="text-align: center;"><strong>NGN{{ number_format($sum, 0) }}</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                    <div style="width: 90%; margin: 0 auto; overflow: auto; clear:both; margin-top: 30px;">

                        <p style="margin-top: 0px; text-align: center;"><strong>Instructions</strong></p>
                        <li><span style="margin-top: -15px;">Make payment to one of the above account numbers or in the
                                school premises.</span></li>
                        <li><span style="margin-top: -15px;">Verify your payment by login to your dashboard > Payment
                                Notification.</span></li>
                        <li><span style="margin-top: -15px;">Receipt will be sent to your email after processing your
                                payment.</span></li>
                        <li><span style="margin-top: -15px;">Busy parents are encouraged to transfer directly to the
                                above account number.</span></li>

                    </div>


            <div style=" width: 100%; overflow: auto; clear:both; margin-top: 10px;">
                <div style="width: 20%; float: left; text-align: center;">
                    <img src="/uploads/qr-code.png" style="width: 80px; height: 80px;">
                </div>

                <div style="width: 80%; float: right;">
                    <h4 style="font-size: 17px; text-align: center">This Payment Schedule is to be paid before midnight
                        of {{ \Carbon\Carbon::parse($deadline)->format('l jS M, Y') }}</h4>
                </div>
            </div>


            <div style=" width: 100%; margin-top: 0px;">
                <p style="font-size: 13px; text-align: center">Generated on {{ date('l, jS \of F Y ') }} @
                    {{ date('h:i A') }}</p>
            </div>
        </div>
        <br><br>
        <div style=" page-break-before: always;"></div>
    @endforeach
</body>

    <script>
        window.onload = function() {
            window.print();
        }
    </script>

</html>
