@extends('layout.master')
@section('PageTitle', 'Record Marks')
@section('content')

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Record Marks</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="iq-card-body">

                            <form method="POST" id="myForm" action="{{ route('marks.store') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>Subject</label>
                                        <select name="subject_id" id="subject_id" class="form-control form-control-sm"
                                            required>
                                            <option value="">Select Subject</option>
                                            @foreach ($subjects as $subject)
                                                <option value="{{ $subject->id }}">{{ $subject['subject']['name'] }}
                                                    ({{ $subject['class']['name'] }}
                                                    {{ $subject['class_section']['name'] }})</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group col-md-3">
                                        <label>Category</label>
                                        <select name="ca_id" id="ca_id" class="form-control form-control-sm" required>
                                            <option value="">Select Category</option>
                                            @foreach ($cas as $ca)
                                                <option value="{{ $ca->id }}">{{ $ca->code }} -
                                                    {{ $ca->description }} ({{ $ca->max }} Marks)</option>
                                            @endforeach
                                            <option value="exam">Exams</option>
                                        </select>
                                    </div>


                                    <div class="form_group col-md-2" style="padding-top: 30px;">
                                        <a id="insert_marks" class="btn btn-primary btn-sm text-white"
                                            name="insert_marks">Search</a>
                                    </div>
                                </div>
                                <br />
                                <div class="row d-none" id="marks-generate">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-striped dt-responsive" style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <th>Registration Number</th>
                                                    <th>Student Name</th>
                                                    <th>Class</th>
                                                    <th>Marks</th>
                                                </tr>
                                            </thead>
                                            <tbody id="marks-generate-tr">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <button type="submit" id="submit" class="btn btn-success btn-md d-none">Save
                                    Records</button>
                            </form>

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
            $(document).on('click', '#insert_marks', function() {


                var subject_id = $('#subject_id').val();
                var ca_id = $('#ca_id').val();

                if(subject_id == '' || ca_id == ''){
                    alert('All Field are required');
                    return;
                }

                $.ajax({
                    type: 'GET',
                    url: '{{ route('get-student-marks') }}',
                    data: {
                        'subject_id': subject_id,
                        'ca_id': ca_id
                    },
                    success: function(data) {
                        if(data == ''){
                            alert('No students Found in the selected Class. Please check your input and try again.');
                            return;
                        }
                        $('#marks-generate').removeClass('d-none');
                        $('#submit').removeClass('d-none');
                        var html = '';
                        $.each(data, function(key, v) {

                            html +=
                                '<tr>' +
                                '<td>' + v.roll_number +
                                '<input type="hidden" name="user_id[]" value="' + v.id +
                                '"><input type="hidden" name="class_id[]" value="' + v
                                .class_id +
                                '"><input type="hidden" name="class_section_id[]" value="' +
                                v.class_section_id + '"></td>' +
                                '<td>' + v.first_name + ' ' + v.middle_name + ' ' + v
                                .last_name + '</td>' +
                                '<td>' + v.class.name + ' ' + v.class_section.name +
                                '</td>' +
                                '<td><input type="number" max="70" class="form-control" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" name="marks[]" value="" required></td>' +
                                '</tr>';
                        });
                        html = $('#marks-generate-tr').html(html);
                    }
                });
            });
        });
    </script>
@endsection
