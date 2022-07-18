@extends('layout.master')
@section('PageTitle', 'Sessions')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">
                                    @if (@isset($editData))
                                        Edit Session
                                    @else
                                        Add Session
                                    @endif
                                </h4>
                            </div>

                            <a class="btn btn-success float-right" href="{{ route('sessions.index') }}"><i
                                    class="fa fa-list"></i> Sessions List</a>
                        </div>
                        <hr>
                        <div class="iq-card-body">
                            <form class="form-horizontal" method="POST"
                                action="{{ @$editData ? route('sessions.update', $editData->id) : route('sessions.store') }}">
                                @csrf
                                @if (@isset($editData))
                                    @method('POST')
                                @endif

                                <div class="form-group row">
                                    <div class="col-sm-6  mx-auto">
                                        <input type="text" class="form-control" name="name" value="{{ @$editData->name }}"
                                            placeholder="Enter Session Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6  mx-auto">
                                        <button type="submit"
                                            class="btn btn-primary btn-block">{{ @$editData ? 'Update' : 'Submit' }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
