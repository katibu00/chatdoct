@extends('layout.master')
@section('PageTitle', 'Form Master Details')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                {{-- <h4><strong>Class Name: </strong>{{ $editData['0']['class']['name']}} {{$editData['0']['class_section']['name']}}</h4> --}}

                                </h4>
                            </div>

                            <a class="btn btn-success float-right btn-sm" href="{{ route('assign.master.index') }}"><i
                                    class="fa fa-list"></i> Form Master List</a>
                        </div>
                        <hr>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <table id="example144" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>

                                            <th>Class</th>
                                            <th>Master</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sections as  $section)

                                        @php
                                            $id = Auth::user()->school_id;
                                            $classes = App\Models\AssignMaster::where('school_id',$id)->where('class_id', $class_id)->where('class_section_id',$section->id)->get();
                                        @endphp

                                       @foreach ($classes as $key => $value)

                                        <tr>
                                
                                            <td>{{$value['class']['name']}}  {{$value['class_section']['name']}}</td>
                                            <td>{{ $value['user']['first_name'] }} {{ $value['user']['middle_name'] }}  {{ $value['user']['last_name'] }}</td>
                                        </tr>
                                        @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
