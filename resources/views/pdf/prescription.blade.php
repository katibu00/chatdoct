<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prescription Form</title>
    <style type="text/css">
        table{
            border-collapse: collapse;
            width: 90%;
            margin: 0 auto;
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


        @media print{
            *{
                -webkit-print-color-adjust: exact;
            }
        }
        p{
            font-size: 14px;
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
                <img src="{{ public_path('/uploads/logo.jpg')}}" style="width: 100px; height: 100px;">
               </td>
               <td class="text-center" width="85%">
                <h2 style="text-transform: uppercase;"><strong>Chatdoc Nigeria</strong></h2>
                <h5 style="margin-top: -10px;"><strong>Tel: 0809 697 8454 | website: www.chatdoct.com | Email: support@chatdoct.com</strong></h5>
                {{-- <h5 style="margin-top: -20px;"><strong>{{$school->address}}</strong></h5> --}}
            </td>

           </tr>
       </table>
       <div style="margin-top: -30px;">
        <h4 style="text-transform: uppercase; text-align: center; border-bottom: 2px solid black; border-top: 2px solid black; padding:5px;"><strong>PRESCRIPTION FORM</strong></h4>
       </div>
    </div>


    <div style="width: 100%">
        <div style="width: 50%; float: left;">
               
                <p style="margin-top: -15px;"><strong>Patient Number:</strong> {{$book['patient']['number']}}</p>
                <p style="margin-top: -15px;"><strong>Name:</strong> P{{$book['patient']['first_name']}} {{$book['patient']['middle_name']}} {{$book['patient']['last_name']}} </p>
                <p style="margin-top: -15px;"><strong>Sex:</strong> {{$book['patient']['sex']}} </p>
                <p style="margin-top: -15px;"><strong>Age:</strong> {{$book['patient']['age']}} </p>
                
        </div>

       

        <div style="width: 20%; float: left; margin-left: 0px;">
               

               
        </div>

        <div style="width:30%; float: right;">
            <p style="margin-top: -10px; margin-left: 0px;"><img ) src="{{public_path('uploads/default.png')}}" style="width: 100px; height: 100px; border: 0px solid black;"></p>
        </div>
    </div>

    <div style="width: 100%; overflow: auto; clear:both; margin-top: 50px;">

            <table class="content-table" border="1">
                <thead>
                    <tr>
                        <th class="text-center" >S/N</th>
                        <th class="text-center"  style="width: %;">Medicine</th>
                        

                    </tr>
                </thead>
                <tbody>

                    @foreach ($medicines as $key => $medicine)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$medicine->name}}</td>
                        </tr>
                    @endforeach
                   

                </tbody>
            </table>
    </div>
    <div style=" width: 100%; overflow: auto; clear:both; margin-top: 30px;">
        <div style="width: 20%; float: left; text-align: center;">
            <img src="{{public_path('/uploads/qr-code.png')}}" style="width: 80px; height: 80px;">
        </div>

        <div style="width: 80%; float: right;">
            <p style="font-size: 14px; ">Doctor Name: Dr.  {{$book['book']['first_name']}} {{$book['book']['middle_name']}} {{$book['book']['last_name']}}</p>
            <p style="font-size: 14px; margin-top: -10px;">Doctor Number: D{{$book['book']['number']}} </p>
            <p style="font-size: 14px; margin-top: -10px;">Date Issued: {{$book->updated_at}} </p>
        </div>
    </div>


    <div style=" width: 100%; margin-top: -10px; text-align: center">
        <p style="font-size: 13px; text-align: center">Generated on {{date("l, jS \of F Y ")}} @ {{date("h:i A")}}</p>
    </div>

</div>
</body>
</html>

