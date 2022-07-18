@extends('layout.master')
@section('PageTitle', 'Assign Form Master')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">
                                    Assign Form Master
                                </h4>
                            </div>
                            <a class="btn btn-success float-right btn-sm" href="{{ route('assign.master.index') }}"><i
                                    class="fa fa-list"></i> Subject Assignment List</a>
                        </div>
                        <hr>
                        <div class="iq-card-body">
                            <form class="form-horizontal" id="quickForm" method="POST"
                                action="{{ route('assign.master.store') }}">
                                @csrf
                                @if (@isset($editData))
                                    @method('PATCH')
                                @endif
                                <div class="add_item">
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label>Class</label>
                                            <select name="class_id[]" class="form-control form-control-sm" required>
                                                <option value="">Select Class</option>
                                                @foreach ($classes as $class)
                                                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Class Section</label>
                                            <select name="class_section_id[]" class="form-control form-control-sm" required>
                                                <option value="">Select Class Section</option>
                                                @foreach ($class_sections as $section)
                                                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>Teacher</label>
                                            <select name="user_id[]" class="form-control form-control-sm" required>
                                                <option value="">Select Teacher</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->first_name }}
                                                        {{ $user->middle_name }} {{ $user->last_name }}</option>
                                                @endforeach
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
                                <select name="class_id[]" class="form-control form-control-sm" required>
                                    <option value="">Select Class</option>
                                    @foreach ($classes as $class)
                                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <select name="class_section_id[]" class="form-control form-control-sm" required>
                                    <option value="">Select Class Section</option>
                                    @foreach ($class_sections as $section)
                                        <option value="{{ $section->id }}">{{ $section->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <select name="user_id[]" class="form-control form-control-sm" required>
                                    <option value="">Select Teacher</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->first_name }}
                                            {{ $user->middle_name }} {{ $user->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-2">
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

    @endsection
