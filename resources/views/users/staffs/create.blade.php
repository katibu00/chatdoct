@extends('layout.master')
@section('PageTitle', ' Register New Staffs')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">
                                    Register New Staffs
                                </h4>
                            </div>
                            {{-- <a class="btn btn-warning   btn-sm" href="{{ route('assign.subjects.index') }}"><i
                                    class="ri-file-upload"></i> Import From Excel</a>
                            <a class="btn btn-primary   btn-sm" href="{{ route('assign.subjects.index') }}"><i
                                    class="fa fa-download"></i> Download Sample</a> --}}
                            <a class="btn btn-success  btn-sm" href="{{ route('staffs.index') }}"><i
                                    class="fa fa-list"></i> Staffs List</a>

                        </div>
                        <hr>
                        <div class="iq-card-body">
                            <form class="form-horizontal" id="quickForm" method="POST"
                                action="{{ route('register.staffs') }}">
                                @csrf
                                @if (@isset($editData))
                                    @method('PATCH')
                                @endif
                                <div class="add_item">

                                    <div class="form-row">

                                        <div class="form-group col-md-2">
                                            <label>First Name*</label>
                                            <input type="text" name="first_name[]" class="form-control" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" required>
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label>Middle Name</label>
                                            <input type="text" name="middle_name[]" class="form-control" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Last Name*</label>
                                            <input type="text" name="last_name[]" class="form-control" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" required>
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label>Email*</label>
                                            <input type="text" name="email[]" class="form-control" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" required>
                                            @error('email')
                                            <div style="color: red;">{{$message}}</div>
                                          @enderror
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label>Designation*</label>
                                            <select name="designation[]" class="form-control form-control-sm" required>
                                                <option value="">Select Designation</option>
                                                <option value="teacher">Teacher</option>
                                                <option value="principal">Principal</option>
                                                <option value="vpadmin">Vice Principal Admin</option>
                                                <option value="vpacademic">Vice Principal Academic</option>
                                                <option value="exam">Exam Officer</option>
                                                <option value="accountant">Accountant</option>
                                                <option value="secretry">Secretery</option>
                                                <option value="librarian">Librarian</option>
                                                <option value="driver">Driver</option>
                                                <option value="securiy">Securiy Guards</option>

                                            </select>
                                        </div>

                                        <div class="form-group col-md-1 mx-1" style="padding-top: 30px;">
                                            <span class="btn btn-success btn-sm addeventmore"><i
                                                    class="fa fa-plus-circle"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-info">{{ @$editData ? 'Update' : 'Submit' }}</button>
                                <span style="color: red">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div style="visibility: hidden;">
                <div class="whole_extra_item_add" id="whole_extra_item_add">
                    <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <input type="text" name="first_name[]" placeholder="First Name" class="form-control" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" required>
                                </div>

                                <div class="form-group col-md-2">
                                    <input type="text" name="middle_name[]" placeholder="Middle Name" class="form-control" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="text" name="last_name[]" placeholder="Last Name" class="form-control" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" required>
                                </div>

                                <div class="form-group col-md-2">
                                    <input type="email" name="email[]" placeholder="Email" class="form-control" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" required>
                                    @error('email')
                                    <div style="color: red;">{{$message}}</div>
                                  @enderror
                                </div>

                                <div class="form-group col-md-2">
                                    <select name="designation[]" class="form-control form-control-sm" required>
                                        <option value="">Select Designation</option>
                                        <option value="teacher">Teacher</option>
                                        <option value="principal">Principal</option>
                                        <option value="vpadmin">Vice Principal Admin</option>
                                        <option value="vpacademic">Vice Principal Academic</option>
                                        <option value="exam">Exam Officer</option>
                                        <option value="accountant">Accountant</option>
                                        <option value="secretry">Secretery</option>
                                        <option value="librarian">Librarian</option>
                                        <option value="driver">Driver</option>
                                        <option value="securiy">Securiy Guards</option>

                                    </select>
                                </div>



                                <div class="form-group col-md-2" style="padding-top: 0px;">
                                    <div class="row mx-1">
                                        <span class="btn btn-success btn-sm mr-1 addeventmore"><i
                                                class="fa fa-plus-circle"></i></span>
                                        <span class="btn btn-danger btn-sm removeeventmore"><i
                                                class="fa fa-minus-circle"></i></span>
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
            $(document).ready(function() {
                var counter = 0;
                $(document).on("click", ".addeventmore", function() {
                    var whole_extra_item_add = $("#whole_extra_item_add").html();
                    $(this).closest(".add_item").append(whole_extra_item_add);
                    counter++
                });
                $(document).on("click", ".removeeventmore", function(event) {
                    $(this).closest(".delete_whole_extra_item_add").remove();
                    counter -= 1;
                });
            });

        </script>

        <script type="text/javascript">
            $(function() {
                $(document).on('change', '#section', function() {

                    var school_section_id = $('#section').val();

                    $.ajax({
                        type: 'GET',
                        url: '{{ route('get-class') }}',
                        data: {
                            school_section_id: school_section_id
                        },
                        success: function(data) {
                            var html = '<option value="">Select Class</option>';
                            $.each(data, function(key, v) {
                                html += '<option value="' + v.class.id + '">' + v
                                    .class.name + '</option>';
                            });
                            html = $('#class').html(html);
                        }
                    });

                });

            });

        </script>

    @endsection
