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
                                        Edit CA Category
                                    @else
                                        Add CA Category
                                    @endif
                                </h4>
                            </div>

                            <a class="btn btn-success float-right" href="{{ route('ca.index') }}"><i
                                    class="fa fa-list"></i> CA Category List</a>
                        </div>
                        <hr>
                        <div class="iq-card-body">
                            <form class="form-horizontal" method="POST"
                                action="{{ @$editData ? route('ca.update', $editData->id) : route('ca.store') }}">
                                @csrf
                                @if (@isset($editData))
                                    @method('POST')
                                @endif

                                <div class="form-group row col-md-11">
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm mt-2" name="code" value="{{ @$editData->code }}"  placeholder="Enter CA Code">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm mt-2" name="description" value="{{ @$editData->description }}"  placeholder="Enter Description">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" class="form-control form-control-sm mt-2" name="max" value="{{ @$editData->max }}"  placeholder="Enter Maximum Marks">
                                    </div>

                                    <div class="col-sm-2 ">
                                        <button type="submit"
                                            class="btn btn-primary btn-sm btn-block mt-2">{{ @$editData ? 'Update' : 'Submit' }}</button>
                                    </div>
                                </div>
                                {{-- <div class="form-group row">
                                    <div class="col-sm-5  mx-auto">
                                        <button type="submit"
                                            class="btn btn-primary btn-sm btn-block">{{ @$editData ? 'Update' : 'Submit' }}</button>
                                    </div>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
