@extends('layout.master')
@section('PageTitle', ' Register New Students')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">
                                    Register New Students
                                </h4>
                            </div>
                            {{-- <a class="btn btn-warning   btn-sm" href="{{ route('assign.subjects.index') }}"><i class="fa fa-file-upload"></i> Import From Excel</a>
                            <a class="btn btn-primary   btn-sm" href="{{ route('assign.subjects.index') }}"><i class="fa fa-download"></i> Download Sample</a> --}}
                            <a class="btn btn-success  btn-sm" href="{{ route('students.index') }}"><i class="fa fa-list"></i> Students List</a>

                        </div>
                        <hr>
                        <div class="iq-card-body">
                            <form class="form-horizontal" id="quickForm" method="POST"  action="{{ route('register.students') }}">
                                @csrf
                                @if (@isset($editData))
                                    @method('PATCH')
                                @endif
                                <div class="add_item">
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label>School Section</label>
                                            <select name="school_section_id" id="section" class="form-control form-control-sm">
                                                <option value="">Select School Section</option>
                                                @foreach ($school_sections as $section)
                                                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>Class</label>
                                            <select name="class_id" id="class" class="form-control form-control-sm">

                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Class Section</label>
                                            <select name="class_section_id" class="form-control form-control-sm">
                                                <option value="">Select Class Section</option>
                                                @foreach ($class_sections as $csection)
                                                    <option value="{{ $csection->id }}">{{ $csection->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label>First Name*</label>
                                           <input type="text" name="first_name[]" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" class="form-control" placeholder="Enter First Name" required>
                                           @error('first_name')
                                             <div style="color: red;">{{$message}}</div>
                                           @enderror
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label>Middle Name</label>
                                            <input type="text" name="middle_name[]" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" class="form-control"  placeholder="Enter Middle Name">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Last Name*</label>
                                            <input type="text" name="last_name[]" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" class="form-control"  placeholder="Enter Last Name" required>
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label>Roll Number*</label>
                                            <input type="text" name="roll_number[]" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" class="form-control" placeholder="Enter Roll Number" required>
                                            @error('roll_number')
                                            <div style="color: red;">{{$message}}</div>
                                         @enderror
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label>Parent</label>
                                            <select name="parent_id[]" class="form-control form-control-sm">
                                                <option value="">Select Parent</option>
                                                @foreach ($parents as $parent)
                                                    <option value="{{ $parent->id }}">{{ $parent->first_name}} {{ $parent->middle_name }} {{ $parent->last_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Gender</label>
                                            <select name="gender[]" class="form-control form-control-sm" required>
                                                <option value="">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-1 mx-1" style="padding-top: 0px;">
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
                               <input type="text" name="first_name[]" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" class="form-control"  placeholder="Enter First Name" required>
                            </div>

                            <div class="form-group col-md-2">
                                <input type="text" name="middle_name[]" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" class="form-control"  placeholder="Enter Middle Name">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="text" name="last_name[]" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" class="form-control"  placeholder="Enter Last Name" required>
                            </div>

                            <div class="form-group col-md-2">
                                <input type="text" name="roll_number[]" style="height: calc(1.5em + .5rem + 2px); padding: .25rem .5rem;  font-size: .875rem; line-height: 1.5; border-radius: .2rem" class="form-control" placeholder="Enter Roll Number" required>
                                @error('roll_number')
                                <div style="color: red;">{{$message}}</div>
                             @enderror
                            </div>

                            <div class="form-group col-md-2">
                                <select name="parent_id[]" class="form-control form-control-sm">
                                    <option value="">Select Parent</option>
                                    @foreach ($parents as $parent)
                                        <option value="{{$parent->id}}">{{$parent->first_name}} {{$parent->middle_name}} {{$parent->last_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <select name="gender[]" class="form-control form-control-sm" required>
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>


                            <div class="form-group col-md-2" style="padding-top: px;">
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
