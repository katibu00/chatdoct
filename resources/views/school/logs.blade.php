@extends('layout.master')
@section('PageTitle', 'Students')
@section('content')

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Logging Logs</h4>
                            </div>
                            
                        </div>

                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <hr>
                                <table class="table table-striped table-bordered mt-4">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>School</th>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Phone</th>
                                            <th>Date</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allData as $key => $value)
                                            <tr>
                                                <td>{{ $key + $allData->firstItem() }}</td>

                                                <td>{{ $value['school']['name'] }}</td>
                                                <td>{{ $value['user']['first_name'] }} {{ $value['user']['middle_name'] }} {{ $value['user']['last_name'] }}</td>
                                                <td>{{ $value['user']['usertype'] }}</td>
                                                <td>{{ $value['user']['phone'] }}</td>
                                                <td>{{ $value->created_at->diffForHumans() }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $allData->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
