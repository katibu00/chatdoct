@extends('layout.master')
@section('PageTitle', 'Service Status')
@section('content')

    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">View Service Status</h4>
                            </div>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalScrollable">How To Make Payment</button>
                        </div>


                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <hr>
                                <div class="col-md-7" mx-auto>
                                    <table id="" class="table table-sm  table-borderless mt-" role="grid"
                                        aria-describedby="user-list-page-info">
                                        <thead>
                                            <tr style="border: 1px solid black; text-align:center;">
                                                <th style="border-right: 1px solid black">S/N</th>
                                                <th style="border-right: 1px solid black">Item</th>
                                                <th style="border-right: 1px solid black;">Amount</th>
                                                <th style="border-right: 1px solid black">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr style="border-left: 1px solid black; border-right: 1px solid black;">
                                                <td  style="border-right: 1px solid black;" class="text-center">1</td>
                                                <td  style="border-right: 1px solid black;">Total Number of Students</td>
                                                <td style="border-right: 1px solid black;"  class="text-center">{{ $students }}</td>
                                                <td style="border-right: 1px solid black;" ></td>
                                            </tr>

                                              <tr style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black;">
                                                <td  style="border-right: 1px solid black;"></td>
                                                <td style="border-right: 1px solid black;" >Service Fee/Student</td>
                                                <td  style="border-right: 1px solid black;" class="text-center">{{ $school->service_fee }}</td>
                                                <td style="border-right: 1px solid black;" class="text-center">&#x20A6;{{ number_format($students * $school->service_fee, 0) }}</td>
                                            </tr>

                                         <tr style="border-left: 1px solid black; border-right: 1px solid black;">
                                                <td  style="border-right: 1px solid black;" class="text-center">2</td>
                                                <td  style="border-right: 1px solid black;">Total Number of Staffs</td>
                                                <td style="border-right: 1px solid black;"  class="text-center">{{ $staffs }}</td>
                                                <td style="border-right: 1px solid black;" ></td>
                                            </tr>

                                            <tr style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black;">
                                                <td  style="border-right: 1px solid black;" class="text-center"></td>
                                                <td  style="border-right: 1px solid black;">Fee/Staff</td>
                                                <td style="border-right: 1px solid black;"  class="text-center">0.00</td>
                                                <td style="border-right: 1px solid black; text-align:center;">&#x20A6;0.00</td>
                                            </tr>

                                            <tr style="border-left: 1px solid black; border-right: 1px solid black;">
                                                <td  style="border-right: 1px solid black;" class="text-center">3</td>
                                                <td  style="border-right: 1px solid black;">Total Number of Parents</td>
                                                <td style="border-right: 1px solid black;"  class="text-center">{{ $parents }}</td>
                                                <td style="border-right: 1px solid black;" ></td>
                                            </tr>

                                            <tr style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black;">
                                                <td  style="border-right: 1px solid black;" class="text-center"></td>
                                                <td  style="border-right: 1px solid black;">Fee/parent</td>
                                                <td style="border-right: 1px solid black;"  class="text-center">0.00</td>
                                                <td style="border-right: 1px solid black; text-align:center;">&#x20A6;0.00</td>
                                            </tr>


                                            <tr style="border-left: 1px solid black; border-right: 1px solid black;">
                                                <td  style="border-right: 1px solid black;" class="text-center">4</td>
                                                <td  style="border-right: 1px solid black;">Submitted Applications (last session)</td>
                                                <td style="border-right: 1px solid black;"  class="text-center">0</td>
                                                <td style="border-right: 1px solid black;" ></td>
                                            </tr>
                                            <tr style="border-left: 1px solid black; border-right: 1px solid black;border-bottom: 1px solid black;">
                                                <td  style="border-right: 1px solid black;" class="text-center"></td>
                                                <td  style="border-right: 1px solid black;">Fee/Application</td>
                                                <td style="border-right: 1px solid black;"  class="text-center">0</td>
                                                <td style="border-right: 1px solid black; text-align:center;" >&#x20A6;0.00</td>
                                            </tr>
                                            <tr style="border-left: 1px solid black; border-right: 1px solid black;border-bottom: 1px solid black;">
                                                <td  style="border-right: 1px solid black;" class="text-center"></td>
                                                <td  style="border-right: 1px solid black;"  class="text-right"><strong>Total Amount Due</strong></td>
                                                <td   class="text-center" colspan="1"> &#x20A6;{{ number_format(($students * $school->service_fee), 0) }}</td>
                                                <td style="border-right: 1px solid black; text-align:center;" ></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>




                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                               <div class="modal-content">
                                  <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalScrollableTitle">Making Payment</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                     </button>
                                  </div>
                                  <div class="modal-body">
                                      <ol>
                                     <li>You are required  to pay the sum of &#x20A6;{{ number_format(($students * $school->service_fee), 0) }} as a service fee for {{$school['session']['name']}} Academic Session- {{$school->term}} Term</li>
                                     <li>Account Number: <span class="text-danger">0058658598585</span>, Account Name:  <span class="text-danger">IntelliSAS Limited</span>, Bank:  <span class="text-danger">GTBank</span></li>
                                     <li>Upon making your payment, Call us on <span class="text-success">08000000</span> to notify us.</li>
                                     <li>Your payment will immediately reflect on your Account</li>
                                     <li>You may continue to use the portal to enter your records. However, printing of some documents maybe limited unless you make payment.</li>
                                      </ol>
                                  </div>
                                  <div class="modal-footer">
                                     <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
                                     {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
