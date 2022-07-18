@extends('layout.master')
@section('PageTitle', 'Home')

@section('content')

<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
             <div class="iq-card">
                <div class="iq-card-body profile-page p-0">
                   <div class="profile-header">
                      <div class="cover-container">
                         <img src="/images/1111.jpg" alt="profile-bg" class="rounded img-fluid">
                         <ul class="header-nav d-flex flex-wrap justify-end p-0 m-0">
                            <li><a href="{{route('change.password')}}"><i class="ri-pencil-line"></i></a></li>
                            <li><a href="{{route('profile.edit',Auth::user()->id)}}"><i class="ri-settings-4-line"></i></a></li>
                         </ul>
                      </div>
                      <div class="profile-info p-4">
                         <div class="row">
                            <div class="col-sm-12 col-md-6">
                               <div class="user-detail pl-5">
                                  <div class="d-flex flex-wrap align-items-center">
                                     <div class="profile-img pr-4">
                                        <img @if(Auth::user()->image == 'default.png') src="/uploads/default.png" @else src="/uploads/{{$school->username}}/{{Auth::user()->image}}" @endif alt="profile-img" class="avatar-130 img-fluid" />
                                     </div>
                                     <div class="profile-detail d-flex align-items-center">
                                        <h3>{{Auth::user()->first_name}} {{Auth::user()->middle_name}} {{Auth::user()->last_name}}</h3>
                                        <p class="m-0 pl-3"> - {{$children->count()}} @if($children->count() == 1) child @else Children @endif</p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                               <ul class="nav nav-pills d-flex align-items-end float-right profile-feed-items p-0 m-0">
                                  <li>
                                     <a class="nav-link active" data-toggle="pill" href="#profile-feed">feed</a>
                                  </li>
                                  <li>
                                     <a class="nav-link" data-toggle="pill" href="#profile-activity">Invoice</a>
                                  </li>
                                  <li>
                                     <a class="nav-link" data-toggle="pill" href="#profile-friends">Marks</a>
                                  </li>
                                  {{-- <li>
                                     <a class="nav-link" data-toggle="pill" href="#profile-profile">profile</a>
                                  </li> --}}
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-sm-12">
             <div class="row">
                <div class="col-lg-3 profile-left">
                   <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h5 class="card-title">School Overview</h5>
                         </div>
                      </div>
                      <div class="iq-card-body">
                         <ul class="m-0 p-0">
                            <li class="d-flex mb-2">
                               <div class="news-icon"><i class="ri-chat-4-fill"></i></div>
                               <p class="news-detail mb-0">{{$school['session']['name']}} Academic Session</p>
                            </li>
                            <li class="d-flex">
                               <div class="news-icon mb-0"><i class="ri-chat-4-fill"></i></div>
                               <p class="news-detail mb-0">{{$school->term}} Term</p>
                            </li>
                         </ul>
                      </div>
                   </div>

                   <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                       <div class="iq-header-title">
                          <h5 class="card-title">Child(s)</h5>
                       </div>
                    </div>
                    <div class="iq-card-body">
                       <ul class="media-story m-0 p-0">
                        @foreach ($children as $child)

                          <li class="d-flex mb-4 align-items-center active">
                             <img @if($child->image == 'default.png') src="/uploads/default.png" @else src="/uploads/{{$school->username}}/{{$child->image}}" @endif alt="child-img" style="width: 70px; height: 65px" class="rounded-circle img-fluid" />
                             <div class="stories-data ml-3">
                                <h6>{{$child->first_name}} {{$child->middle_name}} {{$child->last_name}}</h6>
                                <p class="mb-0">{{$child['class']['name']}} {{$child['class_section']['name']}}</p>
                             </div>
                          </li>

                          @endforeach
                       </ul>
                    </div>
                 </div>

                </div>
                <div class="col-lg-6 profile-center">
                   <div class="tab-content">
                      <div class="tab-pane fade active show" id="profile-feed" role="tabpanel">
                         <div class="iq-card">
                            <div class="iq-card-body p-0">



                                       <div class="iq-card-header d-flex justify-content-between">
                                          <div class="iq-header-title">
                                             <h5 class="card-title">Recent Payments</h5>
                                          </div>
                                       </div>

                                       <div class="iq-card-body">
                                           @if($payments->count() > 0)
                                          <ul class="list-inline m-0 p-0">

                                            @foreach ($payments as $key => $payment)

                                            <li class="mb-4">
                                               <div class="d-flex align-items-center justify-content-between">
                                                  <div class="media align-items-center">
                                                     <div class=" @if ($key == 0)iq-bg-primary @elseif ($key == 1) iq-bg-danger @elseif($key == 2) iq-bg-info @elseif($key == 3) iq-bg-success @endif rounded icon-date" data-wow-delay="0.2s">
                                                        <div class="date-meta">
                                                           <h6 class="date pt-2"><b>{{$payment->created_at->diffForHumans()}}</b></h6>
                                                           {{-- <p class="mb-0">{{$payment->created_at->diffForHumans()}}</p> --}}
                                                           <div class="icon-dot @if ($key == 0) bg-success @elseif ($key == 1) bg-warning @elseif($key == 2) bg-danger @elseif($key == 3) bg-info @endif"></div>
                                                        </div>
                                                     </div>
                                                     <div class="media-body ml-3">
                                                        <h5 class="mb-0">{{$payment['student']['first_name']}} {{$payment['student']['middle_name']}} {{$payment['student']['last_name']}}</h5>
                                                        <small>{{$payment['class']['name']}} {{$payment['class_section']['name']}}</small>
                                                     </div>
                                                  </div>
                                                  <h6 class="text-danger">&#8358;{{number_format($payment->amount,0)}}</h6>
                                               </div>
                                            </li>
                                            @endforeach

                                          </ul>
                                          @else
                                          <p>No Records Found</p>
                                          @endif
                                       </div>
                            </div>
                         </div>


                      </div>
                      <div class="tab-pane fade" id="profile-activity" role="tabpanel">
                         <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                               <div class="iq-header-title">
                                  <h5 class="card-title">Invoice (This term)</h5>
                               </div>
                            </div>
                            <div class="iq-card-body">

                              <table class="table">
                                 {{-- <caption>List of users</caption> --}}
                                 <thead>
                                    <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">Student</th>
                                       <th scope="col">Item</th>
                                       <th scope="col">Amount</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ($children as $key => $child)

                                     @php
                                         $invoice_amount = App\Models\AssignFee::where('school_id',$school->id)->where('class_id',$child->class_id)->where('student_type','Returning')->get();
                                         $total = 0;
                                         $grand = 0;
                                     @endphp

                                    @foreach ($invoice_amount as $amount)


                                    <tr>
                                        @if($loop->first)<th scope="row">{{$key+1}}</th>@else <th></th> @endif
                                        @if($loop->first)<td>{{$child->first_name}} {{$child->middle_name}} {{$child->last_name}}</td>@else <th></th> @endif
                                       <td>{{$amount['fee_type']['name']}}</td>
                                       <td>{{$amount->amount}}</td>
                                    </tr>
                                    @php
                                        $total +=$amount->amount

                                    @endphp

                                    @endforeach


                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Total</th>
                                        <th>{{$total}}</th>
                                    </tr>

                                    @endforeach

                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Grand Total</th>
                                        <th>&#8358;{{number_format($invoice,0)}}</th>
                                    </tr>
                                 </tbody>
                              </table>


                            </div>
                         </div>
                      </div>
                      <div class="tab-pane fade" id="profile-friends" role="tabpanel">
                         <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                               <div class="iq-header-title">
                                  <h5 class="card-title">Continous Assessment (This Term)</h5>
                               </div>
                            </div>
                            <div class="iq-card-body">

                              @foreach ($children as $child)
                                <table class="table">

                                    <thead>
                                       <caption>{{$child->first_name}} {{$child->middle_name}} {{$child->last_name}}</caption>
                                       <tr>
                                          <th scope="col">S/N</th>
                                          <th scope="col">Subject</th>
                                          @php
                                             $cas = App\Models\CA::where('school_id',$school->id)->get();
                                          @endphp
                                          @foreach ($cas as $ca)
                                           <th scope="col">{{$ca->code}}/{{$ca->max}}</th>
                                          @endforeach


                                       </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                           $subjects = App\Models\AssignSubjects::where('school_id',$school->id)->where('class_id',$child->class_id)->where('class_section_id',$child->class_section_id)->get();
                                        @endphp
                                        @foreach ($subjects as $key => $subject)
                                        <tr>
                                           <th scope="row">{{$key +1}}</th>
                                           <td>{{$subject['subject']['name']}}</td>

                                           @foreach ($cas as $ca)
                                           @php
                                                     // dd($subject);
                                              $score = App\Models\Marks::where('school_id',$school->id)->where('session_id',$school->session_id)->where('term',$school->term)->where('type','ca')->where('ca_id',$ca->id)->where('user_id',$child->id)->where('class_id',$child->class_id)->whereHas('assign_subject', function ($query) use($subject) {
                                                 $query->where('subject_id', $subject->subject_id);
                                             })->first();
                                           @endphp
                                           <td>{{@$score->marks}}</td>
                                          @endforeach


                                        </tr>
                                        @endforeach
                                     </tbody>
                                 </table>
                                 @endforeach
                            </div>
                         </div>
                      </div>

                   </div>
                </div>
                <div class="col-lg-3 profile-right">
                   <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h5 class="card-title">Fee Overview (This Term)</h5>
                         </div>
                      </div>
                      <div class="iq-card-body">
                        <ul class="m-0 p-0">
                           <li class="d-flex mb-2">
                              <div class="news-icon"><i class="ri-chat-4-fill"></i></div>
                              <p class="news-detail mb-0">&#8358;{{number_format($invoice,0)}} Total Invoice Amount</p>
                           </li>
                           <li class="d-flex">
                              <div class="news-icon mb-0"><i class="ri-chat-4-fill"></i></div>
                              <p class="news-detail mb-0">&#8358;{{number_format($paid,0)}} Total Amount Paid</p>
                           </li>
                        </ul>
                     </div>
                   </div>

                   <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h5 class="card-title">Recent Posts</h5>
                         </div>
                         <div class="iq-card-header-toolbar d-flex align-items-center">
                            {{-- <a href="#"><i class="ri-more-fill"></i></a> --}}
                         </div>
                      </div>
                      <div class="iq-card-body">
                          @if($recents->count() > 0)
                         <ul class="suggestions-lists m-0 p-0">
                            @foreach ($recents as $blog)

                            <li class="d-flex mb-4 align-items-center">
                               <div class="user-img img-fluid"><img src="/uploads/frontend/{{$school->username }}/{{$blog->image}}" alt="story-img" class="rounded-circle avatar-40" /></div>
                               <div class="media-support-info ml-3">
                                  <p> <a href="{{route('post',['username' => $school->username, 'slug' => $blog->slug])}}" target="__blank">{{$blog->title}}</a></p>
                                  <p class="mb-0">{{$blog->created_at->format('d F Y')}}</p>
                               </div>
                               {{-- <div class="add-suggestion"><a href="javascript:void();"><i class="ri-user-add-line"></i></a></div> --}}
                            </li>
                            @endforeach
                         </ul>
                            <a href="{{route('blog',$school->username)}}" target="__blank" class="btn btn-success d-block"><i class="ri-add-line"></i> Load More</a>
                            @else
                            <p>No posts found</p>
                            @endif
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>


@endsection
