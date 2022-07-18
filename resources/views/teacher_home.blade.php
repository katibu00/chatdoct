@extends('layout.master')
@section('PageTitle', 'Home')

@section('script')

<script type="text/javascript" src="/chart/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['field', 'value'],
      ['Present',  @if($present == 0) 1 @else {{$present}} @endif],
      ['Leave',   @if($present == 0) 1 @else {{$leave}} @endif],
      ['Absent',  @if($present == 0) 1 @else {{$absent}} @endif]

    ]);

    var options = {
    @if($present == 0) title: 'No Actual Attendance has been taken today!',@endif
    };

    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
    chart.draw(data, options);
  }
</script>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Class' , 'Total', 'Male', 'Female'],
        
                @php
                $male = App\Models\User::where('school_id',$school->id)->where('gender','Male')->where('usertype','student')->where('class_id',@$class->class_id)->where('class_section_id',@$class->class_section_id)->get()->count();
                $female = App\Models\User::where('school_id',$school->id)->where('gender','Female')->where('usertype','student')->where('class_id',@$class->class_id)->where('class_section_id',@$class->class_section_id)->get()->count();
                @endphp

           ["{{@$class['class']['name']}} {{@$class['class_section']['name']}}", {{$male+$female}}, {{$male}}, {{$female}}],

      

    ]);

    var options = {
      chart: {
        // title: 'Company Performance',
        // subtitle: 'Sales, Expenses, and Profit: 2014-2017',
      },
      bars: 'vertical' // Required for Material Bar Charts.
    };

    var chart = new google.charts.Bar(document.getElementById('barchart_material'));

    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
</script>

@endsection

@section('content')

<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4">
             <div class="iq-card iq-card-block iq-card-stretch iq-card-height-half">
                <div class="iq-card-body p-0">
                   <div class="p-3 bg-primary mb-3 rounded position-relative">
                      <div class="d-flex align-items-center justify-content-between">
                         <div class="icon iq-icon-box bg-primary rounded border" data-wow-delay="0.2s">
                            <i class="ri-user-fill"></i>
                         </div>
                         <div class="ml-2">
                            <a href="javascript:void();" class="d-flex align-items-center mr-4">
                               <span class="bg-white p-1 rounded mr-2"></span>
                               <p class="text-white mb-0">Marking</p>
                            </a>
                            <div id="progress-chart-1"></div>
                         </div>
                      </div>
                   </div>
                   <div class="d-flex align-items-center pb-3">
                      <div class="col-lg-6">
                         <div class="ml-2">
                            <h6 class="mb-1">{{$total_ca}} Asessements</h6>
                            <span class="h4 text-dark mb-0 counter d-inline-block w-100">{{$marked_ca}}</span>Completed
                         </div>
                      </div>
                      <div class="col-lg-6">
                         <div class="d-flex align-items-center justify-content-between mt-4 position-relative">
                            <div class="iq-progress-bar bg-primary-light mt-3 iq-progress-bar-icon">
                               <span class="bg-primary iq-progress progress-1 position-relative" data-percent="{{number_format($marked_ca/$total_ca*100,0)}}">
                               <span class="progress-text text-primary">{{number_format($marked_ca/$total_ca*100,0)}}%</span>
                               </span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>

                <div class="iq-card iq-card-block iq-card-stretch iq-card-height-half">
                   <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                         <h5 class="card-title">Today's Head Count</h5>
                      </div>
                      <div class="iq-card-header-toolbar d-flex align-items-center">

                      </div>
                   </div>
                   <div class="iq-card-body p-1">
                     <div id="donutchart" style="height: 200px"></div>
                   </div>
                </div>

          </div>
          <div class="col-lg-4">
             <div class="iq-card iq-card-block iq-card-stretch iq-card-height">

                <div class="iq-card-body">
                   <ul class="list-inline p-0 m-0">
                      <li class="d-flex mb-3 align-items-center p-3 sell-list border-primary rounded">
                         <div class="user-img img-fluid">
                            <i class="ri-calendar-line"></i>
                         </div>
                         <div class="media-support-info ml-3">
                            <h6>Session</h6>
                            <p class="mb-0 font-size-12">{{$school['session']['name']}} - {{$school->term}} Term</p>
                         </div>
                         <div class="iq-card-header-toolbar d-flex align-items-center">
                            {{-- <div class="badge badge-pill badge-primary">157</div> --}}
                         </div>
                      </li>
                      <li class="d-flex mb-3 align-items-center p-3 sell-list border-success rounded">
                         <div class="user-img img-fluid">
                            <i class="ri-user-line"></i>
                         </div>
                         <div class="media-support-info ml-3">
                            <h6>Assigned Class</h6>
                            <p class="mb-0 font-size-12">{{$class['class']['name']}} {{$class['class_section']['name']}}</p>
                         </div>
                         <div class="iq-card-header-toolbar d-flex align-items-center">
                            {{-- <div class="badge badge-pill badge-success">280</div> --}}
                         </div>
                      </li>
                      <li class="d-flex mb-3 align-items-center p-3 sell-list border-danger rounded">
                         <div class="user-img img-fluid">
                            <i class="ri-calendar-line"></i>
                         </div>
                         <div class="media-support-info ml-3">
                            <h6>Students</h6>
                            {{-- <p class="mb-0 font-size-12">05 March, 2020</p> --}}
                         </div>
                         <div class="iq-card-header-toolbar d-flex align-items-center">
                            <div class="badge badge-pill badge-danger">  @if($class['class']['name'] != '') {{$students->count()}} @endif</div>&nbsp; Students
                         </div>
                      </li>
                      <li class="d-flex align-items-center p-3 sell-list border-info rounded">
                         <div class="user-img img-fluid">
                            <i class="ri-calendar-line"></i>
                         </div>
                         <div class="media-support-info ml-3">
                            <h6>Assigned Subjects</h6>
                            {{-- <p class="mb-0 font-size-12">10 April, 2020</p> --}}
                         </div>
                         <div class="iq-card-header-toolbar d-flex align-items-center">
                            <div class="badge badge-pill badge-info">{{$subjects}}</div>&nbsp; Subjects
                         </div>
                      </li>

                      <li class="d-flex mt-3 align-items-center p-3 sell-list border-secondary rounded">
                        <div class="user-img img-fluid">
                           <i class="ri-calendar-line"></i>
                        </div>
                        <div class="media-support-info ml-3">
                           <h6>Attendance Taken</h6>
                           {{-- <p class="mb-0 font-size-12">05 March, 2020</p> --}}
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <div class="badge badge-pill badge-secondary">{{$attendance}}</div>&nbsp; Times
                        </div>
                     </li>

                   </ul>
                </div>
             </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
             <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h5 class="card-title">Students Distribution</h5>
                   </div>
                </div>
                <div class="iq-card-body">
                   <div id="barchart_material" style=" height: 310px;"></div>
                </div>
             </div>
          </div>

        @if($class['class']['name'] != '')
          <div class="col-lg-12">
             <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h5 class="card-title">Students' Payment Status</h5>
                   </div>

                </div>
                <div class="iq-card-body">
                   <div class="table-responsive">
                      <table class="table mb-0 table-borderless" id="example1">
                         <thead>
                            <tr>
                               <th scope="col">S/N</th>
                               <th scope="col">Roll Number</th>
                               <th scope="col">Passport</th>
                               <th scope="col">Name</th>
                               <th scope="col">Class</th>
                               <th scope="col">Payment</th>
                               <th scope="col">Status</th>

                            </tr>
                         </thead>
                         <tbody>
                             @foreach ($students as $key => $student)

                             @php
                                 $paid = App\Models\Payment::where('school_id',$school->id)->where('session_id',$school->session_id)->where('term',$school->term)->where('student_id',$student->id)->sum('amount');
                                 $balance = number_format($paid/$invoice*100,0)
                             @endphp
                            <tr>
                               <td>{{$key+1}}</td>
                               <td>{{$student->roll_number}}</td>
                               <td>
                                <img class="img-fluid avatar-30 rounded-circle" @if($student->image == 'default.png') src="/uploads/default.png" @else src="/uploads/{{$school->username}}/{{$student->image}}" @endif alt="">
                               </td>
                               <td>{{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</td>

                               <td>{{$student['class']['name']}} {{$student['class_section']['name']}}</td>
                               <td>
                                <p class="mb-0">N{{$paid}}/{{$invoice}}</p>
                                <div class="iq-progress-bar">
                                   <span @if($balance >= 100) class="bg-success" @elseif($balance >= 1 && $balance != 100)  class="bg-info" @endif data-percent="{{$balance}}"></span>
                                </div>
                             </td>
                               <td>
                                  @if($balance >= 100)<div class="badge badge-pill badge-success">Settled</div>@endif
                                  @if($balance >= 1 && $balance != 100)<div class="badge badge-pill badge-info">Partially</div>@endif
                                  @if($balance == 0) <div class="badge badge-pill badge-danger">Not Paid</div>@endif
                               </td>
                            </tr>

                            @endforeach
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
          @endif
       </div>
    </div>
 </div>
</div>
@endsection
