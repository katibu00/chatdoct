@extends('layout.master')
@section('PageTitle', 'Notify Payment')
@section('content')


<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h4 class="card-title">
                           Notify your Payment
                         </div>

                      </div>
                      <hr>
                      <div class="iq-card-body col-md-10 mx-auto">
                        <form class="form-horizontal" method="POST" action="{{route('payment.notify')}}">
                            @csrf


                                <div class="form-row">

                                   <div class="col-sm-3">
                                    <label>Payment Type: *</label>
                                        <select class="form-control form-control-sm" name="payment_type" required>
                                            <option selected="" value="">Select Item</option>
                                            @foreach ($types as $type)
                                            <option value="{{$type->id}}"> {{$type->name}}</option>
                                            @endforeach
                                        </select>
                                   </div>



                                   <div class="col-sm-3">
                                    <label>Account Deposited to: *</label>
                                    <select class="form-control form-control-sm" name="account" required>
                                        <option selected="" value="">Select Item</option>
                                        @foreach ($methods as $method)
                                        <option value="{{$method->id}}"> {{$method->name}}</option>
                                        @endforeach
                                    </select>
                                   </div>

                                   <div class="col-sm-3">
                                    <label>Amount: *</label>
                                    <input type="number" class="form-control form-control-sm" placeholder="Amount" name="amount" required>
                                   </div>

                                 <div class="col-sm-3">
                                    <label>Reference Number: </label>
                                    <input type="text" class="form-control form-control-sm" name="reference" placeholder="Reference Number">
                                 </div>

                                </div>

                                <div class="form-row">
                                    <div class="col mt-2">
                                        <button type="submit" class="btn btn-primary btn-block">Verify Payment</button>
                                    </div>
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
