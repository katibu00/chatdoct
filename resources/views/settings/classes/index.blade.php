@extends('layout.master')
@section('PageTitle', 'Classes')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Classes</h4>

                            </div>

                            <a class="btn btn-primary float-right pull-right" href="{{ route('classes.create') }}"><i
                                    class="fa fa-plus-circle"></i> Add New Class </a>
                        </div>
                        <hr>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allData as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>
                                                    <a title="Edit" class="btn btn-sm btn-primary" href="{{ route('classes.edit', $value->id) }}"><i class="fa fa-edit"></i></a>
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
