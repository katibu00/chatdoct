@extends('layout.master')
@section('PageTitle', 'End of Term Report (Psychomotor-Based)')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-7">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h6 class="card-title">Psychomotor-Based</h6>
                            </div>
                            <button type="button" class="btn " style="background: green; color: white;"
                                data-toggle="modal" data-target=".bd-example-modal-xl"><span><i
                                        class="fas fa-plus"></i></span>Psychomotor</button>
                            <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add Psychomotor</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form method="POST" action="{{ route('psychomotor.store') }}">
                                                @csrf
                                                <div class="form-row">

                                                    <div class="form-group col-md-2">
                                                        <label>Class: *</label>
                                                        <select id="class_id" name="class_id"
                                                            class="form-control form-control-sm" required>
                                                            <option value=""></option>
                                                            @foreach ($classes as $class)
                                                                <option value="{{ $class->class_id }}">
                                                                    {{ $class['class']['name'] }}</option>\
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-2">
                                                        <label>Class Section: *</label>
                                                        <select id="class_section_id" name="class_section_id"
                                                            class="form-control form-control-sm" required>
                                                            <option value=""></option>
                                                            @foreach ($class_section as $section)
                                                                <option value="{{ $section->class_section_id }}">
                                                                    {{ $section['class_section']['name'] }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-2">
                                                        <label>Type: *</label>
                                                        <select name="type" id="type" class="form-control form-control-sm"
                                                            required>
                                                            <option value=""></option>
                                                            <option value="psychomotor">psychomotor Skills</option>
                                                            <option value="affective">Affective Trait</option>

                                                        </select>
                                                    </div>

                                                    <div class="form_group col-md-2" style="padding-top: 32px;">
                                                        <a id="search_psychomotor"
                                                            class="btn btn-primary btn-sm text-white">Search</a>
                                                    </div>
                                                </div>



                                                <div class="row d-none" id="marks-generate">
                                                    <div class="col-md-12">

                                                        <table class="table table-bordered dt-responsive"
                                                            style="width: 100%">
                                                            <thead id="table-head">

                                                            </thead>
                                                            <tbody id="marks-generate-tr">

                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save Grades</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="iq-card-body">

                            <form method="POST" action="{{ route('psychomotor.report.generate') }}" target="_blank">
                                @csrf
                                <div class="form-row">


                                    <div class="form-group col-md-3">
                                        <label>Session: *</label>
                                        <select name="session_id" class="form-control form-control-sm">
                                            <option value="">Select Level</option>
                                            @foreach ($sessions as $session)
                                                <option value="{{ $session->id }}"
                                                    {{ $current == $session->id ? 'Selected' : '' }}>
                                                    {{ $session->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label>Term: *</label>
                                        <select name="term" class="form-control form-control-sm" required>
                                            <option value=""></option>
                                            <option value="First" @if ($term == 'First') selected @endif>First Term</option>
                                            <option value="Second" @if ($term == 'Second') selected @endif>Second Term</option>
                                            <option value="Third" @if ($term == 'Third') selected @endif>Third Term</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label>Class: *</label>
                                        <select name="class_id" class="form-control form-control-sm" required>
                                            <option value=""></option>
                                            @foreach ($classes as $class)
                                                <option value="{{ $class->class_id }}">{{ $class['class']['name'] }}
                                                </option>\
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label>Class Section: *</label>
                                        <select name="class_section_id" class="form-control form-control-sm" required>
                                            <option value=""></option>
                                            @foreach ($class_section as $section)
                                                <option value="{{ $section->class_section_id }}">
                                                    {{ $section['class_section']['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form_group col-md-12" style="padding-top: 10px;">
                                        <button type="submit"
                                            class="btn btn-primary btn-sm text-white btn-block">Generate</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                <div class="col-sm-12 col-lg-5">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h6 class="card-title">Grades Entry</h6>
                            </div>

                            <button type="button" class="btn " style="background: #444444; color: white;"
                                data-toggle="modal" data-target="#exampleModalScrollable"><span><i
                                        class="fas fa-eye"></i></span> View Psychomotor</button>

                        </div>


                        <div class="iq-card-body">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Class</th>
                                        <th scope="col">Psychomotor</th>
                                        <th scope="col">Affective</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rows as $key => $row)
                                        <tr class="text-center">
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $row['class']['name'] }} {{ $row['class_section']['name'] }}</td>
                                            @php
                                                $psycho = App\Models\Psychomotor::where('school_id', Auth::user()->school_id)
                                                    ->where('session_id', $current)
                                                    ->where('term', $term)
                                                    ->where('class_id', $row['class']['id'])
                                                    ->where('class_section_id', $row['class_section']['id'])
                                                    ->get()
                                                    ->count();
                                                $affective = App\Models\Affective::where('school_id', Auth::user()->school_id)
                                                    ->where('session_id', $current)
                                                    ->where('term', $term)
                                                    ->where('class_id', $row['class']['id'])
                                                    ->where('class_section_id', $row['class_section']['id'])
                                                    ->get()
                                                    ->count();
                                            @endphp

                                            <td>
                                                @if (@$psycho > 1)
                                                    <i style="font-size: 20px; color: green;"
                                                        class="las la-check-square"></i>
                                                @else
                                                    <i style="font-size: 20px; color: red;" class="lar la-window-close"></i>
                                                @endif
                                            </td>

                                            <td>

                                                @if (@$affective > 1)
                                                    <i style="font-size: 20px; color: green;"
                                                        class="las la-check-square"></i>
                                                @else
                                                    <i style="font-size: 20px; color: red;" class="lar la-window-close"></i>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                        </div>
                    </div>

                </div>
            </div>
        </div>



        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">View Psychomotor Grade</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="#" method="GET">
                            <div class="form-row">

                                <div class="form-group col-md-3">
                                    <label>Class:</label>
                                    <select id="classc_id" class="form-control form-control-sm" required>
                                        <option value="">Select Class</option>
                                        @foreach ($classes as $class)
                                            <option value="{{ $class->class_id }}">{{ $class['class']['name'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Class Section:</label>
                                    <select id="classc_section_id" class="form-control form-control-sm" required>
                                        <option value="">Select Section</option>
                                        @foreach ($class_section as $section)
                                            <option value="{{ $section->class_section_id }}">
                                                {{ $section['class_section']['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Type:</label>
                                    <select id="type1" class="form-control form-control-sm" required>
                                        <option value="">Select item</option>
                                        <option value="psychomotor">Psychomotor Areas</option>
                                        <option value="affective">Affective Traits</option>

                                    </select>
                                </div>

                                <div class="form-group col-md-3" style="padding-top: 32px;">
                                    <a id="view_psychomotor" class="btn btn-primary btn-sm text-white">Search Students</a>
                                </div>
                            </div>
                        </form>


                        <div class="row d-none" id="psycho-view-div">
                            <div class="col-md-12">

                                <table class="table table-bordered table-striped dt-responsive" style="width: 100%">
                                    <thead id="psycho-view-head">

                                    </thead>
                                    <tbody id="psycho-view-table">

                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                        {{-- <button type="button" class="btn btn-primary"></button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
@section('js')
    <script type="text/javascript">
        $(function() {
            $(document).on('click', '#search_psychomotor', function() {


                var class_id = $('#class_id').val();
                var class_section_id = $('#class_section_id').val();
                var type = $('#type').val();

                if (class_id == '' || class_section_id == '' || type == '') {
                    alert("All Fields are required");
                    return;
                }


                if (type == 'psychomotor') {


                    $.ajax({
                        type: 'GET',
                        url: '{{ route('get-student-list') }}',
                        data: {
                            'class_id': class_id,
                            'class_section_id': class_section_id
                        },
                        success: function(data) {

                            if (!$.trim(data)) {
                                alert(
                                    "Generate End of Term Report First for the Selected Class"
                                );
                                return;
                            }

                            $('#marks-generate').removeClass('d-none');

                            var html = '';
                            var head = '';

                            head += '<tr>' +
                                '<th>Name</th>' +
                                '<th>Pos</th>' +
                                '<th>Marks</th>' +
                                '<th>Hand Writting</th>' +
                                '<th>Verbal Fluence</th>' +
                                '<th>Sports</th>' +
                                '<th>Drawing/Painting</th>' +
                                '<th>Musical Skills</th>' +
                                '</tr>';
                            head = $('#table-head').html(head);

                            $.each(data, function(key, v) {

                                html +=
                                    '<tr>' +


                                    '<td>' + v.user.first_name + ' ' + v.user
                                    .middle_name + ' ' + v.user.last_name +
                                    '<input type="hidden" name="user_id[]" value="' + v
                                    .user.id +
                                    '"><input type="hidden" name="classss_id[]" value="' +
                                    v.user.class_id +
                                    '"><input type="hidden" name="classss_section_id[]" value="' +
                                    v.user.class_section_id + '"></td>' +
                                    '<td>' + (key + 1) + '</td>' +
                                    '<td>' + v.total + '</td>' +
                                    '<td> <select name="writing[]" class="form-control form-control-sm bg-whit" required>' +
                                    '<option value=""></option> <option value="5">5</option>' +
                                    '<option value="4">4</option>' +
                                    '<option value="3">3</option>' +
                                    '<option value="2">2</option>' +
                                    '<option value="1">1</option></select></td>' +
                                    '<td> <select name="verbal[]" class="form-control form-control-sm bg-whit" required>' +
                                    '<option value=""></option> <option value="5">5</option>' +
                                    '<option value="4">4</option>' +
                                    '<option value="3">3</option>' +
                                    '<option value="2">2</option>' +
                                    '<option value="1">1</option></select></td>' +
                                    '<td> <select name="sports[]" class="form-control form-control-sm bg-whit" required>' +
                                    '<option value=""></option> <option value="5">5</option>' +
                                    '<option value="4">4</option>' +
                                    '<option value="3">3</option>' +
                                    '<option value="2">2</option>' +
                                    '<option value="1">1</option></select></td>' +
                                    '<td> <select name="drawing[]" class="form-control form-control-sm bg-whit" required>' +
                                    '<option value=""></option> <option value="5">5</option>' +
                                    '<option value="4">4</option>' +
                                    '<option value="3">3</option>' +
                                    '<option value="2">2</option>' +
                                    '<option value="1">1</option></select></td>' +
                                    '<td> <select name="music[]" class="form-control form-control-sm bg-whit" required>' +
                                    '<option value=""></option> <option value="5">5</option>' +
                                    '<option value="4">4</option>' +
                                    '<option value="3">3</option>' +
                                    '<option value="2">2</option>' +
                                    '<option value="1">1</option></select></td>' +


                                    '</tr>';
                            });
                            html = $('#marks-generate-tr').html(html);


                        }
                    });


                } else if (type == 'affective') {

                    $.ajax({
                        type: 'GET',
                        url: '{{ route('get-student-list') }}',
                        data: {
                            'class_id': class_id,
                            'class_section_id': class_section_id
                        },
                        success: function(data) {

                            if (!$.trim(data)) {
                                alert(
                                    "Generate End of Term Report First for the Selected Class"
                                );
                                return;
                            }

                            $('#marks-generate').removeClass('d-none');

                            var html = '';
                            var head = '';

                            head += '<tr>' +
                                '<th>Name</th>' +
                                '<th>Pos</th>' +
                                '<th>Marks</th>' +
                                '<th>Puntuality</th>' +
                                '<th>Neatness</th>' +
                                '<th>Politeness</th>' +
                                '<th>Honesty</th>' +
                                '<th>Cooperation</th>' +
                                '<th>Leadership</th>' +
                                '<th>Emotional Stability</th>' +
                                '<th>Health</th>' +
                                '<th>attitude to <br/>school work</th>' +
                                '<th>Attentiveness</th>' +
                                '<th>Perseverance</th>' +
                                '<th>Speaking/Handwriting</th>' +
                                '<th></th>' +

                                '</tr>';
                            head = $('#table-head').html(head);

                            $.each(data, function(key, v) {

                                html +=
                                    '<tr>' +


                                    '<td>' + v.user.first_name + ' ' + v.user
                                    .middle_name + ' ' + v.user.last_name +
                                    '<input type="hidden" name="user_id[]" value="' + v
                                    .user.id +
                                    '"><input type="hidden" name="classss_id[]" value="' +
                                    v.user.class_id +
                                    '"><input type="hidden" name="classss_section_id[]" value="' +
                                    v.user.class_section_id + '"></td>' +
                                    '<td>' + (key + 1) + '</td>' +
                                    '<td>' + v.total + '</td>' +
                                    '<td> <select name="puntuality[]" class="form-control form-control-sm bg-whit" required>' +
                                    '<option value=""></option> <option value="5">5</option>' +
                                    '<option value="4">4</option>' +
                                    '<option value="3">3</option>' +
                                    '<option value="2">2</option>' +
                                    '<option value="1">1</option></select></td>' +
                                    '<td> <select name="neatness[]" class="form-control form-control-sm bg-whit" required>' +
                                    '<option value=""></option> <option value="5">5</option>' +
                                    '<option value="4">4</option>' +
                                    '<option value="3">3</option>' +
                                    '<option value="2">2</option>' +
                                    '<option value="1">1</option></select></td>' +
                                    '<td> <select name="politeness[]" class="form-control form-control-sm bg-whit" required>' +
                                    '<option value=""></option> <option value="5">5</option>' +
                                    '<option value="4">4</option>' +
                                    '<option value="3">3</option>' +
                                    '<option value="2">2</option>' +
                                    '<option value="1">1</option></select></td>' +
                                    '<td> <select name="honesty[]" class="form-control form-control-sm bg-whit" required>' +
                                    '<option value=""></option> <option value="5">5</option>' +
                                    '<option value="4">4</option>' +
                                    '<option value="3">3</option>' +
                                    '<option value="2">2</option>' +
                                    '<option value="1">1</option></select></td>' +
                                    '<td> <select name="cooperation[]" class="form-control form-control-sm bg-whit" required>' +
                                    '<option value=""></option> <option value="5">5</option>' +
                                    '<option value="4">4</option>' +
                                    '<option value="3">3</option>' +
                                    '<option value="2">2</option>' +
                                    '<option value="1">1</option></select></td>' +
                                    '<td> <select name="leadership[]" class="form-control form-control-sm bg-whit" required>' +
                                    '<option value=""></option> <option value="5">5</option>' +
                                    '<option value="4">4</option>' +
                                    '<option value="3">3</option>' +
                                    '<option value="2">2</option>' +
                                    '<option value="1">1</option></select></td>' +
                                    '<td> <select name="emotional[]" class="form-control form-control-sm bg-whit" required>' +
                                    '<option value=""></option> <option value="5">5</option>' +
                                    '<option value="4">4</option>' +
                                    '<option value="3">3</option>' +
                                    '<option value="2">2</option>' +
                                    '<option value="1">1</option></select></td>' +
                                    '<td> <select name="health[]" class="form-control form-control-sm bg-whit" required>' +
                                    '<option value=""></option> <option value="5">5</option>' +
                                    '<option value="4">4</option>' +
                                    '<option value="3">3</option>' +
                                    '<option value="2">2</option>' +
                                    '<option value="1">1</option></select></td>' +
                                    '<td> <select name="attitude[]" class="form-control form-control-sm bg-whit" required>' +
                                    '<option value=""></option> <option value="5">5</option>' +
                                    '<option value="4">4</option>' +
                                    '<option value="3">3</option>' +
                                    '<option value="2">2</option>' +
                                    '<option value="1">1</option></select></td>' +
                                    '<td> <select name="attentiveness[]" class="form-control form-control-sm bg-whit" required>' +
                                    '<option value=""></option> <option value="5">5</option>' +
                                    '<option value="4">4</option>' +
                                    '<option value="3">3</option>' +
                                    '<option value="2">2</option>' +
                                    '<option value="1">1</option></select></td>' +
                                    '<td> <select name="perseverance[]" class="form-control form-control-sm bg-whit" required>' +
                                    '<option value=""></option> <option value="5">5</option>' +
                                    '<option value="4">4</option>' +
                                    '<option value="3">3</option>' +
                                    '<option value="2">2</option>' +
                                    '<option value="1">1</option></select></td>' +
                                    '<td> <select name="speaking[]" class="form-control form-control-sm bg-whit" required>' +
                                    '<option value=""></option> <option value="5">5</option>' +
                                    '<option value="4">4</option>' +
                                    '<option value="3">3</option>' +
                                    '<option value="2">2</option>' +
                                    '<option value="1">1</option></select></td>' +


                                    '</tr>';
                            });
                            html = $('#marks-generate-tr').html(html);


                        }
                    });

                };


            });
        });
    </script>





    <script type="text/javascript">
        $(function() {
            $(document).on('click', '#view_psychomotor', function() {


                var class_id = $('#classc_id').val();
                var class_section_id = $('#classc_section_id').val();
                var type = $('#type1').val();


                if (class_id == '' || class_section_id == '' || type == '') {
                    alert("All Fields are required");
                    return;
                }


                if (type == 'psychomotor') {


                    $.ajax({
                        type: 'GET',
                        url: '{{ route('get-psychomotor') }}',
                        data: {
                            'class_id': class_id,
                            'class_section_id': class_section_id,
                            'type': type
                        },
                        success: function(data) {

                            if (!$.trim(data)) {
                                alert(
                                    "Generate End of Term Report First for the Selected Class"
                                );
                                return;
                            }

                            $('#psycho-view-div').removeClass('d-none');

                            var html = '';
                            var head = '';

                            head += '<tr>' +
                                '<th>S/N</th>' +
                                '<th>Name</th>' +
                                '<th>Hand Writting</th>' +
                                '<th>Verbal Fluence</th>' +
                                '<th>Sports</th>' +
                                '<th>Drawing/Painting</th>' +
                                '<th>Musical Skills</th>' +
                                '</tr>';
                            head = $('#psycho-view-head').html(head);

                            $.each(data, function(key, v) {

                                html +=
                                    '<tr>' +

                                    '<td>' + (key + 1) + '</td>' +
                                    '<td>' + v.user.first_name + ' ' + v.user
                                    .middle_name + ' ' + v.user.last_name + '</td>' +

                                    '<td>' + v.writing + '</td>' +
                                    '<td>' + v.verbal + '</td>' +
                                    '<td>' + v.sports + '</td>' +
                                    '<td>' + v.drawing + '</td>' +
                                    '<td>' + v.music + '</td>' +
                                    '</tr>';
                            });
                            html = $('#psycho-view-table').html(html);


                        }
                    });


                }else if (type == 'affective') {


                    $.ajax({
                        type: 'GET',
                        url: '{{ route('get-psychomotor') }}',
                        data: {
                            'class_id': class_id,
                            'class_section_id': class_section_id,
                            'type': type
                        },
                        success: function(data) {

                            if (!$.trim(data)) {
                                alert(
                                    "Generate End of Term Report First for the Selected Class"
                                );
                                return;
                            }

                            $('#psycho-view-div').removeClass('d-none');

                            var html = '';
                            var head = '';

                            head += '<tr>' +
                                '<th>S/N</th>' +
                                '<th>Name</th>' +
                                '<th>Puntuality</th>' +
                                '<th>Neatness</th>' +
                                '<th>Politeness</th>' +
                                '<th>Honesty</th>' +
                                '<th>Cooperation<br /> with Others</th>' +
                                '<th>Emotional <br/> Stability</th>' +
                                '<th>Health</th>' +
                                '<th>Attitude to <br/> School Work</th>' +
                                '<th>Attentiveness</th>' +
                                '<th>Perseverance</th>' +
                                '<th>Speaking/Handwriting</th>' +
                                '</tr>';
                            head = $('#psycho-view-head').html(head);

                            $.each(data, function(key, v) {

                                html +=
                                    '<tr>' +

                                    '<td>' + (key + 1) + '</td>' +
                                    '<td>' + v.user.first_name + ' ' + v.user
                                    .middle_name + ' ' + v.user.last_name + '</td>' +

                                    '<td>' + v.puntuality + '</td>' +
                                    '<td>' + v.neatness + '</td>' +
                                    '<td>' + v.politeness + '</td>' +
                                    '<td>' + v.honesty + '</td>' +
                                    '<td>' + v.cooperation + '</td>' +
                                    '<td>' + v.emotional + '</td>' +
                                    '<td>' + v.health + '</td>' +
                                    '<td>' + v.attitude + '</td>' +
                                    '<td>' + v.attentiveness + '</td>' +
                                    '<td>' + v.perseverance + '</td>' +
                                    '<td>' + v.speaking + '</td>' +
                                    '</tr>';
                            });
                            html = $('#psycho-view-table').html(html);


                        }
                    });


                }
            });

        });
    </script>


@endsection
