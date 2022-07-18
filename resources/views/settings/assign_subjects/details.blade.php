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
                                {{-- <h4><strong>Class Name: </strong>{{ $editData['0']['class']['name']}} {{$editData['0']['class_section']['name']}}</h4> --}}

                                </h4>
                            </div>

                            <a class="btn btn-success float-right btn-sm" href="{{ route('assign.subjects.index') }}"><i
                                    class="fa fa-list"></i> Subjects Assignment List</a>
                        </div>
                        <hr>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <table id="example144" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Class Section</th>
                                            <th>S/N</th>
                                            <th>Subjects</th>
                                            <th>Teacher</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sections as  $section)

                                        @php
                                            $id = Auth::user()->school_id;
                                            $subjects = App\Models\AssignSubjects::where('school_id',$id)->where('class_id', $class_id)->where('class_section_id',$section->id)->get();
                                        @endphp

                                       @foreach ($subjects as $key => $value)

                                        <tr>
                                           @if ($loop->first)
                                           <td>{{$value['class']['name']}}  {{$value['class_section']['name']}}</td>
                                           @else
                                           <td></td>
                                           @endif

                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $value['subject']['name'] }}</td>
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
