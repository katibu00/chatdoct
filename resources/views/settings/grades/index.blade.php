@extends('layout.master')
@section('PageTitle', 'Grading Scheme')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Grading Scheme</h4>

                            </div>
                            <a class="btn btn-primary float-right" href="{{ route('grades.create') }}"><i
                                    class="fa fa-plus-circle"></i> Add Grade Point </a>
                        </div>
                        <hr>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Grade Name</th>
                                            <th>Mark Range</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allData as $key => $value)
                                            <tr class="{{ $value->id }}">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->letter_grade }}</td>
                                                <td>{{ $value->start_mark }} - {{ $value->end_mark }}</td>
                                                <td>{{ $value->remarks }}</td>
                                                <td>
                                                    <a title="Edit" class="btn btn-sm btn-primary"
                                                        href="{{ route('grades.edit', $value->id) }}"><i
                                                            class="fa fa-edit"></i></a>
                                                </td>
                                            </tr>
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
@endsection
