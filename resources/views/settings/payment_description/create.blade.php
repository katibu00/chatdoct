@extends('layout.master')
@section('PageTitle', 'Payment Description')
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
                                        Edit Payment Type
                                    @else
                                        Add Payment Type
                                    @endif
                                </h4>
                            </div>

                            <a class="btn btn-success float-right" href="{{ route('payment.description.index') }}"><i
                                    class="fa fa-list"></i>Payment Types List</a>
                        </div>
                        <hr>
                        <div class="iq-card-body">
                            <form class="form-horizontal" method="POST"
                                action="{{ @$editData ? route('payment.description.update', $editData->id) : route('payment.description.store') }}">
                                @csrf
                                @if (@isset($editData))
                                    @method('POST')
                                @endif

                                <div class="form-group row">
                                    <div class="col-sm-6  mx-auto">
                                        <input type="text" class="form-control" name="name" value="{{ @$editData->name }}"
                                            placeholder="Enter Payment Type">
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
