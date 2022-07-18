@extends('layout.master')
@section('PageTitle', 'Edit Form Master')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">
                                    Edit Form Master Assignment
                                </h4>
                            </div>
                            <a class="btn btn-success float-right btn-sm" href="{{ route('assign.master.index') }}"><i
                                    class="fa fa-list"></i> Form Master List</a>
                        </div>
                        <hr>
                        <div class="iq-card-body">
                            <form class="form-horizontal" id="quickForm" method="POST"
                                action="{{ route('assign.master.update', $id) }}">
                                @csrf

                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label>Class</label>
                                            <select name="class_id" class="form-control form-control-sm" required>
                                                <option value="">Select Class</option>
                                                @foreach ($classes as $class)
                                                    <option value="{{ $class->id }}" {{ $edit->class_id == $class->id ? 'Selected' : '' }}>{{ $class->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Class Section</label>
                                            <select name="class_section_id" class="form-control form-control-sm" required>
                                                <option value="">Select Class Section</option>
                                                @foreach ($class_sections as $section)
                                                    <option value="{{ $section->id }}" {{ $edit->class_section_id == $section->id ? 'Selected' : '' }}>{{ $section->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>Teacher</label>
                                            <select name="user_id" class="form-control form-control-sm" required>
                                                <option value="">Select Teacher</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}"{{ $edit->user_id == $user->id ? 'Selected' : '' }} >{{ $user->first_name }}
                                                        {{ $user->middle_name }} {{ $user->last_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info">Update</button>
                                    <span style="color: red">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection

