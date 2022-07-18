@extends('layout.master')
@section('PageTitle', 'Make Payment')
@section('content')


    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Make Payment</h4>
                            </div>
                            {{-- <a class="btn btn-sm btn-danger text-white" href="" target="__blank"><i class="fa fa-money"></i>Pay Offline</a> --}}
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#payment"><i class="fa fa-money"></i>Pay Offline</button>
                        </div>
                        <hr>
                        <div class="iq-card-body">

                           <p>Online Payment currently unavailable. However, you may proceed to make your payment offline</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>


    <div class="modal fade" id="payment" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
           <div class="modal-content">
              <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Instructions: Offline Payment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                 </div>
                 <div class="modal-body">

                    Payment Details (This Term)

                    <table class="table">
                        {{-- <caption>List of users</caption> --}}
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">Student</th>
                              <th scope="col">Invoice Amount (&#8358;)</th>
                              <th scope="col">Total Paid (&#8358;)</th>
                              <th scope="col">Balance (&#8358;)</th>
                           </tr>
                        </thead>
                        <tbody>
                            @foreach ($children as $key => $child)

                            @php
                                $invoice_amount = App\Models\AssignFee::where('school_id',$school->id)->where('class_id',$child->class_id)->where('student_type','Returning')->get();
                                $paid = DB::table('payments')->where('school_id', $school->id)->where('session_id', $school->session_id)->where('term', $school->term)->where('student_id',$child->id)->sum('amount');

                                $total_paid = App\Models\Payment::where('school_id', $school->id)->where('session_id', $school->session_id)->where('term', $school->term)->whereHas('student', function ($query)  {
                                            $query->where('parent_id', Auth::user()->id);
                                        })->sum('amount');

                                $total = 0;

                            @endphp

                           @foreach ($invoice_amount as $amount)
                           @php
                             $total +=$amount->amount;
                           @endphp

                           @endforeach

                           <tr>
                              <th scope="row">{{$key+1}}</th>
                              <td>{{$child->first_name}} {{$child->middle_name}} {{$child->last_name}}</td>
                              <td>{{number_format($total,0)}}</td>
                              <td>{{number_format($paid,0)}}</td>
                              <td>@if($total-$paid < 1) Fully Paid @else {{number_format($total-$paid,0)}} @endif</td>
                           </tr>






                           @endforeach


                           <tr>
                               <th></th>
                               <th></th>
                               <th>Total Amount</th>
                               <th>Total Paid</th>
                               <th>Oustanding Balance</th>
                           </tr>
                           <tr>
                            <th></th>
                            <th></th>
                            <th>&#8358;{{number_format($invoice,0)}}</th>
                            <th>&#8358;{{number_format($total_paid,0)}}</th>
                            <th>&#8358;{{number_format($invoice-$total_paid,0)}}</th>
                        </tr>
                        </tbody>
                     </table>
                     Instructions
                    <ol>
                        {{-- <li>You are required  to pay the sum of &#x20A6;{{ number_format(($students * $school->service_fee), 0) }} as a service fee for {{$school['session']['name']}} Academic Session- {{$school->term}} Term</li> --}}
                        <li>Account Number: <span class="text-danger">{{$school->first_acct_no}} ({{$school->first_bank_name}})</span>, Account Name:  <span class="text-danger">{{$school->first_acct_name}}</span> @if($school->second_acct_number != Null) <span class="text-success">OR</span> <span class="text-danger">{{$school->second_acct_number}} ({{$school->second_bank_name}})</span>, Account Name:  <span class="text-danger">{{$school->second_acct_name}}</span> @endif</li>
                        <li>Upon making your payment, Call us on <span class="text-danger">{{$school->phone_first}}</span> or Send Notication for even faster processing.</li>
                        <li>Your payment will immediately reflect on your Account</li>
                        <li>Generate your Payment Receipt as Evidence of Payment</li>
                    </ol>

                 </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{route('payment.notify')}}" class="btn btn-success">I have Transferred, Send Notification</a>
                 </div>
              </div>
           </div>
        </div>

@endsection

