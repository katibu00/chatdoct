@extends('layout.master')
@section('PageTitle', ' Edit Record Marks')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Edit Marks Record</h4>

                            </div>
                        </div>
                        <hr>
                        <div class="iq-card-body">

                            <form method="POST" id="myForm" action="{{ route('marks.update') }}">
                                @csrf
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
                                                    {{ $ca->description }} ({{$ca->max}} Marks)</option>
                                            @endforeach
                                            <option value="exam">Exams</option>
                                        </select>
                                    </div>


                                    <div class="form_group col-md-2" style="padding-top: 30px;">
                                        <a id="edit_marks" class="btn btn-primary btn-sm text-white">Search</a>
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
                                <button type="submit" id="submit" class="btn btn-success btn-md d-none">Update
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
            $(document).on('click', '#edit_marks', function() {


                var subject_id = $('#subject_id').val();
                var ca_id = $('#ca_id').val();

                if(subject_id == '' || ca_id == ''){
                    alert('All Field are required');
                    return;
                }

                $.ajax({
                    type: 'GET',
                    url: '{{ route('edit-student-marks') }}',
                    data: {
                        'subject_id': subject_id,'ca_id':ca_id
                    },
                    success: function(data) {
                        if(data == ''){
                            alert('No Marks has been entered for your selected input. Please check your input and try again.');
                            return;
                        }
                        $('#marks-generate').removeClass('d-none');
                        $('#submit').removeClass('d-none');
                        var html = '';
                        $.each(data, function(key, v) {
                            html +=
                                '<tr>' +
                                 '<td>'+v.user.roll_number+'<input type="hidden" name="user_id[]" value="'+v.user.id+'"><input type="hidden" name="class_id[]" value="'+v.user.class_id+'"><input type="hidden" name="class_section_id[]" value="'+v.user.class_section_id+'"></td>'+
                                 '<td>'+v.user.first_name+' '+v.user.middle_name+' '+v.user.last_name+'</td>'+
                                 '<td>'+v.class.name+'</td>'+
                                '<td><input type="number" max="100" class="form-control form-control-sm" name="marks[]" value="' + v.marks + '" required></td>' +
                                '</tr>';
                        });
                        html = $('#marks-generate-tr').html(html);
                    }
                });

            });

        });

    </script>
@endsection
