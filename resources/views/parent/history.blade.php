@extends('layout.master')
@section('PageTitle', 'Transaction History')
@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Transaction History</h4>

                            </div>
                        </div>
                        <hr>
                        <div class="iq-card-body">


                            <form method="POST" action="{{ route('transaction.history.generate.parent') }}" target="__blank">
                                @csrf

                                <div class="form-row">


                                    <div class="form-group col-md-4">
                                        <label>Student</label>
                                        <select name="student_id" id="student_id" class="form-control form-control-sm" required>
                                            <option value="">Select Child</option>
                                            @foreach ($students as $student)
                                                 <option value="{{$student->id}}">{{$student->first_name}} {{$student->middle_name}} {{$student->middle_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form_group col-md-2" style="padding-top: 32px;">
                                        <a id="search_history" class="btn btn-sm btn-primary text-white">Search</a>
                                        <button type="submit"  class="btn btn-sm btn-danger text-white ml-2"><i class="fa fa-download"></i> PDF</button>
                                     </div>


                                </div>

                                <div class="row d-none" id="marks-generate">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-striped dt-responsive" style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    {{-- <th>Session</th> --}}
                                                    <th>Class</th>
                                                    <th>Term</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Description</th>
                                                    <th>Method</th>
                                                </tr>
                                            </thead>
                                            <tbody id="marks-generate-tr">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </form>

                        </div>
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
        $(document).on('click', '#search_history', function() {

            var student_id = $('#student_id').val();



            if(student_id == ''){
                    alert('All Fields are Required');
                    return;
                }


            $.ajax({
                type: 'GET',
                url: '{{ route('search-student-history') }}',
                data: {
                    'student_id': student_id

                },
                success: function(data) {
                    if(data == ''){
                    alert('No Payment Record has been found.');
                    return;
                    }

                    $('#marks-generate').removeClass('d-none');
                    var html = '';
                    $.each(data, function(key, v) {
                        html +=
                            '<tr>' +
                            '<td>' + (key+1) + '</td>' +
                            // '<td>' + v.session.name + '</td>' +
                            '<td>' + v.class.name + '</td>' +
                            '<td>' + v.term + '</td>' +
                            '<td>' + v.formattedDate + '</td>' +
                            '<td>' + v.amount + '</td>' +
                            '<td>' + v.description.name + '</td>' +
                            '<td>' + v.method.name + '</td>' +

                            '</tr>';
                    });
                    html = $('#marks-generate-tr').html(html);
                }
            });

        });

    });

</script>
@endsection
