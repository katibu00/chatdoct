<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}'s Profile</title>
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

    </style>
</head>

<body>
    <div class="container" style="margin-top: -30px;">

            <div class="col-md-12">
                <table width="100%">
                    <tr>
                        <td class="text-center" width="15%">
                <img src="{{asset("uploads").'/'.$institution->username.'/'.$institution->logo}}" style="width: 80px; height: 80px;">
                               
                        </td>
                        <td class="text-center" width="85%">
                            <{{$institution->heading}} style="text-transform: uppercase;"><strong>{{ $institution->name }}</strong></{{$institution->heading}}>
                            <h5 style="margin-top: -10px;"><strong>Tel: {{ $institution->phone_first }} | website:
                                    {{ $institution->website }} | Email: {{ $institution->email }}</strong></h5>
                            <h5 style="margin-top: -20px;"><strong>{{ $institution->address }}</strong></h5>
                        </td>
                </table>
                <hr style="margin-top: -15px; margin-bottom:  15px;">
            </div>



            <div style="width: 100%">

                <p
                    style="margin-top: -10px; text-align: center; text-transform: uppercase; width: 100%; text-decoration: underline; margin-bottom: 15px;">
                    Parents Profile</p>

            </div>

            <div style="width: 100%">
                <div style="width: 60%; float: left;">

                    <p style="margin-top: 0px;"><strong> Full Name:</strong> {{ $user->first_name }}
                        {{ $user->middle_name }} {{ $user->last_name }}</p>
                    <p style="margin-top: -10px;"><strong> Phone Number:</strong> {{ $user->phone }}</p>
                    <p style="margin-top: -10px;"><strong> Email:</strong> {{ $user->email }}</p>
                    <p style="margin-top: -10px;"><strong> Contact Address:</strong> {{ $user->address }}</p>
                </div>



                <div style="width:40%; float: right;">
                    <p style="margin-top: -10px; color: red;"><strong>Login Details</strong></p>
                    <p style="margin-top: -10px;"><strong>Website: </strong>https://intellisas.net</p>
                    <p style="margin-top: -10px;"><strong>Email: </strong>{{ $user->email }}</p>
                    <p style="margin-top: -10px; "><strong>Password (Default):
                        </strong>{{ $institution->students_pwd }}</p>

                </div>
            </div>

            <div style="width: 100%; overflow: auto; clear:both; margin-top: 30px;">
                <div style="width: 100%; margin: 0 auto;">
                    <h4
                        style="font-size: 16px; text-align: left; text-transform: initial;  border-bottom: 2px solid black; margin-top: 0px;">
                        Child(s)</h5>
                        <table border="1" width="100%" cellpadding="1" cellspacing="2" style="margin-top: 0px;">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 15%;">S/N</th>
                                    <th class="text-center" style="width: 50%;">Name</th>
                                    <th class="text-center" style="width: 35%;">Class</th>
                                </tr>
                            </thead>
                            @foreach ($children as $key => $child)

                                <tbody>

                                    <tr>
                                        <td class="text-center">{{ $key + 1 }}</td>
                                        <td class="text-left">{{ $child->first_name }} {{ $child->middle_name }}
                                            {{ $child->last_name }}</td>
                                        <td class="text-center">{{ $child['class']['name'] }}
                                            {{ $child['class_section']['name'] }}</td>
                                    </tr>

                                </tbody>
                            @endforeach
                        </table>
                        <ol>
                        <li>Visit https://intellisas.net</li>
                         <li>Click login and enter your login details as indicated above.</li>
                         <li>Change the default password tp maximize your account security</li>
                         <li>You can visit the school page at https://intelisas.net/{{$institution->username}} for recent news, events and other updates.</li>
                         <li>You can monitor your childrens perfomance and attendance, pay fees, print results, and so much more using the portal.</li>
                        </ol>

                </div>
            </div>


            {{-- <p style="clear: both; overflow: hidden;">visit https://intellisas.net and click on login. Enter your email and password.</p> --}}
            {{-- <div style="width: 100%; overflow: auto; clear:both; margin-top: 30px;">
            <div style="width: 100%; margin: 0 auto;">
                <h4 style="font-size: 16px; text-align: left; text-transform: initial;  border-bottom: 2px solid black; margin-top: 0px;">How to Login</h5>
                <p>visit https://intellisas.net and click on login. Enter your email and password.</p>
            </div>
            </div> --}}


    </div>
</body>

</html>
