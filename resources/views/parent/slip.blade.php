@extends('layout.master')
@section('PageTitle', 'Payment Invoice')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Payment Slip</h4>

                            </div>
                        </div>
                        <hr>
                        <div class="iq-card-body">

                            <form method="POST" action="{{ route('invoice.generate.parent') }}" target="__blank" class="mx-auto">
                                @csrf

                                <div class="form-row mx-auto">
                                    <div class="col-md-3"></div>
                                    <div class="form-group col-md-6 " style="padding-top: 30px;">
                                        <button type="submit" class="btn btn-success btn-block btn-sm text-white">Generate Payment Slip</a>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection

