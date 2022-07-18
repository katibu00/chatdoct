<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>End of Term Report - Psychomotor Based report</title>
    <link rel="stylesheet" type="text/css" href="/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="/fontawesome/css/fontawesome.min.css">
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
            padding: 0px 5px;
            vertical-align: top;
            border-top: 1px solid #000000;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #000000;
        }

        .table tbody+tbody {
            border-top: 2px solid #000000;
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
            padding: px;
            width:0.1%;
            white-space: nowrap;
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
@php
$count = $students->count();
@endphp

<body>

    @foreach ($students as $position => $student)
        <div class="container" style="margin-top: -30px;">
            <div class="row">
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td class="text-center" width="15%">
                                <img src="/uploads/{{ $institution->username }}/{{ $institution->logo }}"
                                    style="width: 80px; height: 80px;">
                            </td>
                            <td class="text-center" width="85%">
                                <{{ $institution->heading }} style="text-transform: uppercase;">
                                    <strong>{{ $school->name }}</strong></{{ $institution->heading }}>
                                    <h5 style="margin-top: -10px;"><strong>Tel: {{ $school->phone_first }} | website:
                                            {{ $school->website }} | Email: {{ $school->email }}</strong></h5>
                                    <h5 style="margin-top: -20px;"><strong>{{ $school->address }}</strong></h5>
                            </td>

                        </tr>
                    </table>
                    <div style="margin-top: -30px;">
                        <h4
                            style="text-transform: uppercase; text-align: center; border-bottom: 2px solid black; border-top: 2px solid black; padding:5px;">
                            <strong>Student's End of Term Report Form - Psychomotor-Based</strong>
                        </h4>
                    </div>
                </div>


                <div style="width: 100%">
                    <div style="width: 45%; float: left;">
                        @php
                            $user = App\Models\user::where('id', $student->user_id)->first();
                        @endphp
                        <p style="margin-top: -15px;"><strong>Roll Number:</strong> {{ $user->roll_number }}</p>
                        <p style="margin-top: -15px;"><strong>Name:</strong> {{ $user->first_name }}
                            {{ $user->middle_name }} {{ $user->last_name }}</p>
                        <p style="margin-top: -15px; "><strong>Class: </strong> {{ $user['class']['name'] }}
                            {{ $user['class_section']['name'] }}</p>
                        @if ($user['parent']['first_name'] != null)<p style="margin-top: -15px;"><strong>Parent/Guardian: </strong> {{ $user['parent']['first_name'] }}  {{ $user['parent']['middle_name'] }}  {{ $user['parent']['last_name'] }}</p>@endif
                        @if ($user['parent']['phone'] != null) <p style="margin-top: -15px;"><strong>Mobile Number: </strong> {{ $user['parent']['phone'] }}</p>@endif
                    </div>

                    @php
                        $subjects = App\Models\Marks::select('subject_id')
                            ->where('class_id', $class_id)
                            ->where('class_section_id', $class_section_id)
                            ->where('school_id', $school_id)
                            ->groupBy('subject_id')
                            ->get();
                        $subject_number = $subjects->count();
                        
                        $total = App\Models\Processed::select('total')
                            ->where('class_id', $class_id)
                            ->where('class_section_id', $class_section_id)
                            ->where('term', $term)
                            ->where('school_id', $school_id)
                            ->where('user_id', $student->user_id)
                            ->first();
                        
                        $total_marks = $total->total;
                        $average = $total_marks / $subject_number;
                    @endphp

                    <div style="width: 40%; float: left; margin-left: 0px;">
                        <p style="margin-top: -15px;"><strong>TERM:</strong> {{ $term }} Term</p>
                        @php
                            $session = App\Models\Session::where('id', $session_id)
                                ->where('school_id', $school_id)
                                ->first();
                        @endphp
                        <p style="margin-top: -15px;"><strong>Session:</strong> {{ $session->name }}</p>
                        <p style="margin-top: -15px;"><strong>Class Population:</strong> {{ $count }}</p>

                        @if ($institution->show_position == 'on')
                            <p style="margin-top: -15px;"><strong>Position:</strong> {{ $position + 1 }}</p>
                        @endif

                        <p style="margin-top: -15px;"><strong>Marks Obtained:</strong> {{ $total_marks }} out of
                            {{ $subject_number * 100 }}</p>
                        <p style="margin-top: -15px;"><strong>Average Score:</strong>
                            {{ number_format($average, 2) }}
                        </p>
                        @if ($institution->show_attendance == 'on')
                            @php
                                $absent = App\Models\Attendance::where('class_id', $class_id)
                                    ->where('class_section_id', $class_section_id)
                                    ->where('school_id', $school_id)
                                    ->where('status', '!=', 'present')
                                    ->where('term', $term)
                                    ->where('session_id', $session_id)
                                    ->where('user_id', $user->id)
                                    ->get()
                                    ->count();
                                $number = App\Models\Attendance::select('date')
                                    ->where('class_id', $class_id)
                                    ->where('class_section_id', $class_section_id)
                                    ->where('school_id', $school_id)
                                    ->where('session_id', $session_id)
                                    ->where('term', $term)
                                    ->groupBy('date')
                                    ->get()
                                    ->count();
                                
                            @endphp

                            <p style="margin-top: -15px;"><strong>Attendance:</strong>Absent {{ $absent }} out of
                                {{ $number }} times</p>
                        @endif
                    </div>

                    <div style="width:15%; float: right;">
                        @if ($institution->show_passport == 'on')
                            <p style="margin-top: -10px; margin-left: 0px;"><img @if ($user->image == 'default.png') src="/uploads/default.png" @else src="/uploads/{{ $school->username }}/{{ $user->image }}" @endif
                                    style="width: 100px; height: 120px; border: 0px solid black;"></p>
                        @endif
                    </div>
                </div>

                <div style="width: 100%; overflow: auto; clear:both; margin-top: 30px;">

                    <table class="content-table" border="1">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 5%;">S/N</th>
                                <th class="text-center" style="width: 25%;">Subject</th>
                                <th class="text-center" style="width: 5%;">CA</th>
                                <th class="text-center" style="width: 5%;">Exam</th>
                                <th class="text-center" style="width: 5%;">Total</th>
                                <th class="text-center" style="width: 5%;">Grade</th>
                                <th class="text-center" style="width: 15%;">Remarks</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($subjects as $key => $subject)
                                @php
                                    $subject_name = App\Models\AssignSubjects::where('id', $subject->subject_id)->first();
                                @endphp
                                <tr>
                                    <td class="text-center">{{ $key + 1 }}</td>
                                    <td class="text-left">{{ $subject_name['subject']['name'] }}</td>

                                    @php
                                        $cas = App\Models\Marks::where('user_id', $user->id)
                                            ->where('class_id', $class_id)
                                            ->where('class_section_id', $class_section_id)
                                            ->where('term', $term)
                                            ->where('school_id', $school_id)
                                            ->where('type', 'ca')
                                            ->where('subject_id', $subject->subject_id)
                                            ->get();
                                        $exams = App\Models\Marks::where('user_id', $user->id)
                                            ->where('class_id', $class_id)
                                            ->where('class_section_id', $class_section_id)
                                            ->where('term', $term)
                                            ->where('school_id', $school_id)
                                            ->where('type', 'exam')
                                            ->where('subject_id', $subject->subject_id)
                                            ->get();
                                        
                                        $ca = 0;
                                        foreach ($cas as $key => $value) {
                                            $ca += $value->marks;
                                        }
                                        
                                        $exam = 0;
                                        foreach ($exams as $key => $value) {
                                            $exam += $value->marks;
                                        }
                                        $total = $exam + $ca;
                                        
                                        @$grade_marks = App\Models\Grade::where([['start_mark', '<=', (int) $total], ['end_mark', '>=', (int) $total]])
                                            ->where('type', $institution->grading)
                                            ->first();
                                        @$letter_grade = $grade_marks->letter_grade;
                                        @$remark = $grade_marks->remarks;
                                        
                                    @endphp
                                    <td class="text-center">{{ $ca }}</td>
                                    <td class="text-center">{{ $exam }}</td>
                                    <td class="text-center">{{ $total }}</td>
                                    <td class="text-center">{{ $letter_grade }}</td>
                                    <td class="text-center">{{ $remark }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
              
                    <div style="margin: 10px"></div>

                    @php
                        $psychomotor = App\Models\Psychomotor::where('school_id', $school_id)
                            ->where('user_id', $user->id)
                            ->where('session_id', $session_id)
                            ->where('term', $term)
                            ->where('class_id', $class_id)
                            ->where('class_section_id', $class_section_id)
                            ->first();
                        $affective = App\Models\Affective::where('school_id', $school_id)
                            ->where('user_id', $user->id)
                            ->where('session_id', $session_id)
                            ->where('term', $term)
                            ->where('class_id', $class_id)
                            ->where('class_section_id', $class_section_id)
                            ->first();
                    @endphp


                    <div style="width: 100% margin: px; clear: both; overflow: hidden;">
                        <div style="width: 40%; float: left;">
                            <table class="table" border="1" style="font-size: 14px;">
                                <thead>
                                    <tr style="color: #fff; background:#000000;">
                                        <th style="text-align: left;">Psychomotor Skills</th>
                                        <th>5</th>
                                        <th>4</th>
                                        <th>3</th>
                                        <th>2</th>
                                        <th>1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                       <td style="text-align: left;">Hand Writing</td>
                                       <td>{!! $psychomotor->writing == 5? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->writing == 4? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->writing == 3? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->writing == 2? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->writing == 1? '<i class="fa fa-check"></i>': '' !!}</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: left;">Verbal Fluency</td>
                                       <td>{!! $psychomotor->verbal == 5? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->verbal == 4? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->verbal == 3? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->verbal == 2? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->verbal == 1? '<i class="fa fa-check"></i>': '' !!}</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: left;">Sports & Games</td>
                                       <td>{!! $psychomotor->sports == 5? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->sports == 4? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->sports == 3? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->sports == 2? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->sports == 1? '<i class="fa fa-check"></i>': '' !!}</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: left;">Drawing & Painting</td>
                                       <td>{!! $psychomotor->drawing == 5? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->drawing == 4? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->drawing == 3? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->drawing == 2? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->drawing == 1? '<i class="fa fa-check"></i>': '' !!}</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: left;">Musical Skills</td>
                                       <td>{!! $psychomotor->music == 5? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->music == 4? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->music == 3? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->music == 2? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $psychomotor->music == 1? '<i class="fa fa-check"></i>': '' !!}</td>
                                    </tr>
                                </tbody>

                            </table>
                            <p>SCALE:</p>
                            <p style="margin-top: -12px">5 - Excellent</p>
                            <p style="margin-top: -12px">4 - Good</p>
                            <p style="margin-top: -12px">3 - Fair</p>
                            <p style="margin-top: -12px">2 - Poor</p>
                            <p style="margin-top: -12px">1 - Very Poor</p>
                        </div>


                        <div style="width: 55%; float: right;">

                            <table class="table" border="1" style="font-size: 14px;">
                                <thead>
                                    <tr style="color: #fff; background:#000000;">
                                        <th style="text-align: left;">Affective Areas</th>
                                        <th>5</th>
                                        <th>4</th>
                                        <th>3</th>
                                        <th>2</th>
                                        <th>1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                       <td style="text-align: left;">Puntuality</td>
                                       <td>{!! $affective->puntuality == 5? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->puntuality == 4? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->puntuality == 3? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->puntuality == 2? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->puntuality == 1? '<i class="fa fa-check"></i>': '' !!}</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: left;">Neatness</td>
                                       <td>{!! $affective->neatness == 5? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->neatness == 4? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->neatness == 3? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->neatness == 2? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->neatness == 1? '<i class="fa fa-check"></i>': '' !!}</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: left;">Politeness</td>
                                       <td>{!! $affective->politeness == 5? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->politeness == 4? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->politeness == 3? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->politeness == 2? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->politeness == 1? '<i class="fa fa-check"></i>': '' !!}</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: left;">Honesty</td>
                                       <td>{!! $affective->honesty == 5? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->honesty == 4? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->honesty == 3? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->honesty == 2? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->honesty == 1? '<i class="fa fa-check"></i>': '' !!}</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: left;">Honesty</td>
                                       <td>{!! $affective->honesty == 5? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->honesty == 4? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->honesty == 3? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->honesty == 2? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->honesty == 1? '<i class="fa fa-check"></i>': '' !!}</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: left;">Cooperation with Others</td>
                                       <td>{!! $affective->cooperation == 5? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->cooperation == 4? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->cooperation == 3? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->cooperation == 2? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->cooperation == 1? '<i class="fa fa-check"></i>': '' !!}</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: left;">Emotional Stability</td>
                                       <td>{!! $affective->emotional == 5? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->emotional == 4? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->emotional == 3? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->emotional == 2? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->emotional == 1? '<i class="fa fa-check"></i>': '' !!}</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: left;">Health</td>
                                       <td>{!! $affective->health == 5? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->health == 4? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->health == 3? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->health == 2? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->health == 1? '<i class="fa fa-check"></i>': '' !!}</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: left;">Attitude to School Work</td>
                                       <td>{!! $affective->attitude == 5? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->attitude == 4? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->attitude == 3? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->attitude == 2? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->attitude == 1? '<i class="fa fa-check"></i>': '' !!}</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: left;">Attentiveness</td>
                                       <td>{!! $affective->attentiveness == 5? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->attentiveness == 4? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->attentiveness == 3? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->attentiveness == 2? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->attentiveness == 1? '<i class="fa fa-check"></i>': '' !!}</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: left;">Perseverance</td>
                                       <td>{!! $affective->perseverance == 5? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->perseverance == 4? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->perseverance == 3? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->perseverance == 2? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->perseverance == 1? '<i class="fa fa-check"></i>': '' !!}</td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: left;">Speaking/Handwriting</td>
                                       <td>{!! $affective->speaking == 5? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->speaking == 4? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->speaking == 3? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->speaking == 2? '<i class="fa fa-check"></i>': '' !!}</td>
                                       <td>{!! $affective->speaking == 1? '<i class="fa fa-check"></i>': '' !!}</td>
                                    </tr>
                                    
                                </tbody>

                            </table>
                        </div>
                    </div>








                </div>
                <div style=" width: 100%; overflow: auto; clear:both; margin-top: 10px;">
                    <div style="width: 20%; float: left; text-align: center;">
                        <img src="/uploads/qr-code.png" style="width: 80px; height: 80px;">
                    </div>

                    <div style="width: 80%; float: right;">
                        <p style="font-size: 12px;">INTERPRETATION OF GRADES: A1 Excellent 75%-100%, B2 Very Good
                            70%-74%, B3 Good 65%-69%, C4 Credit 60%-64%, C5 Credit 55%-59%, C6 Credit 50%-54%, D7 Pass
                            45%-49%, E8 Pass 40%-45%, F9 Fail 1% - 44%, ABSENT 0%</p>
                    </div>
                </div>

                <div style=" width: 100%; margin-top: -20px;">
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
