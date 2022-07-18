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
                        <form class="form-horizontal" method="POST" action="{{route('cards.issue.print')}}" target="_blank">
                            @csrf


                                <div class="form-row">

                                   <div class="col-sm-3">
                                    <label>Number:</label>
                                        <select class="form-control form-control-sm" name="number" required>
                                            <option selected="" value="">Select Item</option>
                                            <option value="one">One</option>
                                            <option value="all">All</option>
                                        </select>
                                        </div>

                                   <div class="form_group col-md-3" style="padding-top: 32px;">
                                      <button type="submit" class="btn btn-sm btn-primary text-white">Print card</button>
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



