@extends('layout.master')
@section('PageTitle', 'Assign Fee')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Fee Amount</h4>

                            </div>
                            <a class="btn btn-success float-right btn-sm" href="{{ route('fee.assign.create') }}"><i
                                    class="fa fa-plus-circle"></i> Assign Fee </a>
                        </div>
                        <hr>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Class</th>
                                            <th>Regular</th>
                                            <th>Transfer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allData as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value['class']['name'] }}</td>
                                                <td>
                                                    <a title="Edit" class="btn btn-sm btn-primary"
                                                        href="{{ route('fee.assign.details.returning', $value->class_id) }}"><i
                                                            class="fa fa-eye"></i></a>
                                                    <a title="Edit" class="btn btn-sm btn-primary"
                                                        href="{{ route('fee.assign.edit.returning', $value->class_id) }}"><i
                                                            class="fa fa-edit"></i></a>
                                                </td>
                                                <td>
                                                    <a title="Edit" class="btn btn-sm btn-primary"
                                                        href="{{ route('fee.assign.details.fresh', $value->class_id) }}"><i
                                                            class="fa fa-eye"></i></a>
                                                    <a title="Edit" class="btn btn-sm btn-primary"
                                                        href="{{ route('fee.assign.edit.fresh', $value->class_id) }}"><i
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
    </div>
@endsection
