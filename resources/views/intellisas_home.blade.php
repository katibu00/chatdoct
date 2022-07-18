@extends('layout.master')
@section('PageTitle', 'Home')


@section('content')

    <div id="content-page" class="content-page">
        <div class="container-fluid">



            <div class="row">
                <div class="col-md-6 col-lg-3">
                   <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                      <div class="iq-card-body relative-background">
                         <div class="d-flex align-items-center">
                             <div class="rounded-circle iq-card-icon dark-icon-light iq-bg-primary mr-3"> <i class="ri-exchange-dollar-line"></i></div>
                             <div class="text-left">
                                <h3 class="">{{$schools->count()}}</h3>
                             </div>
                          </div>
                          <p class=" mb-0 mt-3">Total Schools</p>
                          <div class="background-image">
                             <img src="/images/page-img/36.png" class="img-fluid" alt="img-36">
                          </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-6 col-lg-3">
                   <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                      <div class="iq-card-body relative-background">
                         <div class="d-flex align-items-center">
                             <div class="rounded-circle iq-card-icon iq-bg-warning mr-3"> <i class="ri-guide-line"></i></div>
                             <div class="text-left">
                                <h5 class="">{{$students}}</h5>
                             </div>
                          </div>
                          <p class=" mb-0 mt-3">Total Students</p>
                          <div class="background-image">
                             <img src="/images/page-img/37.png" class="img-fluid" alt="img-37">
                          </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-6 col-lg-3">
                   <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                      <div class="iq-card-body relative-background">
                         <div class="d-flex align-items-center">
                             <div class="rounded-circle iq-card-icon iq-bg-danger mr-1"> <i class="ri-money-pound-circle-line"></i></div>
                             <div class="text-left">
                               
                                <h6 class="">&#8358;{{number_format($payable,0)}}</h6>
                             </div>
                          </div>
                          <p class=" mb-0 mt-3">Termly Fee</p>
                          <div class="background-image">
                             <img src="/images/page-img/38.png" class="img-fluid" alt="img-38">
                          </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-6 col-lg-3">
                   <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                      <div class="iq-card-body relative-background">
                         <div class="d-flex align-items-center">
                             <div class="rounded-circle iq-card-icon iq-bg-info mr-3"> <i class="ri-numbers-line"></i></div>
                             <div class="text-left">
                                <h6 class="">&#8358;0</h6>
                             </div>
                          </div>
                          <p class=" mb-0 mt-3">Fee Collection</p>
                          <div class="background-image">
                             <img src="/images/page-img/39.png" class="img-fluid" alt="img-39">
                          </div>
                      </div>
                   </div>
                </div>
            </div>
            

       



        </div>
    </div>
@endsection
