@extends('layout.master')
@section('PageTitle', 'Subjects Assignment')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">
                                    Edit Subjects Assignment
                                </h4>
                            </div>
                            <a class="btn btn-success float-right btn-sm" href="{{ route('assign.subjects.index') }}"><i
                                    class="fa fa-list"></i> Class Assignment List</a>
                        </div>
                        <hr>
                        <div class="iq-card-body">
                            <form class="form-horizontal" id="quickForm" method="POST"
                                action="{{ route('assign.subjects.update', $editData['0']->class_id) }}">
                                @csrf

                                <div class="add_item">
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label>Class Name</label>
                                            <select name="class_id" class="form-control form-control-sm">
                                                <option value="">Select Class</option>
                                                @foreach ($classes as $class)
                                                <option value="{{$class->id}}"  {{ $editData['0']->class_id == $class->id ? 'Selected' : '' }}>{{$class->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Class Section</label>
                                            <select name="class_section_id" class="form-control form-control-sm" required>
                                                <option value="">Select Class Section</option>
                                                @foreach ($class_sections as $section)
                                                <option value="{{$section->id}}" {{ $editData['0']->class_section_id == $section->id ? 'Selected' : '' }}>{{$section->name}}</option>
                                                @endforeach
                                            </select>
                                         </div>
                                    </div>

                                    @foreach ($editData as $edit)
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label>Subject</label>
                                                <select name="subject_id[]" class="form-control form-control-sm">
                                                    <option value="">Select Subject</option>
                                                    @foreach($subjects as $subject)
                                                    <option value="{{$subject->id}}" {{ $edit->subject_id == $subject->id ? 'Selected' : '' }}>{{$subject->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label>Teacher</label>
                                                <select name="user_id[]" class="form-control form-control-sm">
                                                    <option value="">Select Teacher</option>
                                                    @foreach($users as $user)
                                                    <option value="{{$user->id}}"  {{ $edit->user_id == $user->id ? 'Selected' : '' }}>{{$user->first_name}} {{$user->middle_name}} {{$user->last_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-md-1 mx-1" style="padding-top: 30px;">
                                                <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle"></i></span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <button type="submit" class="btn btn-info">Update</button>
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
                            <div class="form-group col-md-3">
                                <label>Subject</label>
                                <select name="subject_id[]" class="form-control form-control-sm">
                                    <option value="">Select Subject</option>
                                    @foreach($subjects as $subject)
                                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label>Teacher</label>
                                <select name="user_id[]" class="form-control form-control-sm">
                                    <option value="">Select Teacher</option>
                                    @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->first_name}} {{$user->middle_name}} {{$user->last_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-2" style="padding-top: 30px;">
                                <div class="row mx-1">
                                <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle"></i></span>
                                <span class="btn btn-danger btn-sm removeeventmore mx-1"><i class="fa fa-minus-circle"></i></span>
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

    @endsection
