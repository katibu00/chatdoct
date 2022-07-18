@extends('layouts.master')
@section('PageTitle', ' Generate Scratch Cards')
@section('content')


<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h4 class="card-title">
                          Generate Scratch Cards
                         </div>

                      </div>
                      <hr>
                      <div class="iq-card-body col-md-10 mx-auto">
                        <form class="form-horizontal" method="POST" action="{{route('cards.generate.generate')}}">
                            @csrf


                                <div class="form-row">

                                   <div class="col-sm-3">
                                    <label>Number:</label>
                                        <select class="form-control form-control-sm" name="number" required>
                                            <option selected="" value="">Select Item</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="150">150</option>
                                            <option value="250">250</option>
                                            <option value="350">350</option>
                                            <option value="500">500</option>
                                            <option value="700">700</option>
                                        </select>
                                        </div>

                                   <div class="form_group col-md-2" style="padding-top: 32px;">
                                      <button type="submit" class="btn btn-sm btn-primary text-white" name="search_receipt">Generate</button>
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



