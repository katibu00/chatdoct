@extends('layouts.master')
@section('PageTitle','My Patients')

@section('css')
<link href="/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">

            <!--begin::Toolbar-->
            <div class="d-flex flex-wrap flex-stack mb-6">
                <!--begin::Heading-->
                <h3 class="fw-bolder my-2">My Patients
                <span class="fs-6 text-gray-400 fw-bold ms-1">Active</span></h3>
                <!--end::Heading-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Row-->
            <div class="row g-6 g-xl-9">

                @foreach ($doctors as $key => $doctor)
                    
                <!--begin::Col-->
                <div class="col-md-6 col-xl-4">
                    <!--begin::Card-->
                    <span class="card border border-2 border-gray-300 border-hover">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-9">
                            <!--begin::Card Title-->
                            <div class="card-title m-0">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px w-50px bg-light">
                                    <img @if($doctor['patient']['picture'] == 'default.png') src="/uploads/default.png" @else src="/uploads/avatar/{{$doctor['patient']['picture']}}" @endif alt="" class="w-100" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::Car Title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <span class="badge badge-light-primary fw-bolder me-auto px-4 py-3">Active</span>
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end:: Card header-->
                        
                        <!--begin:: Card body-->
                        <div class="card-body p-9">
                            <!--begin::Name-->
                            <div class="fs-3 fw-bolder text-dark">{{$doctor['patient']['first_name']}}  {{$doctor['patient']['middle_name']}}  {{$doctor['patient']['last_name']}}</div>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">Booked {{$doctor->created_at->diffForHumans()}}</p>
                            <!--end::Description-->
                            <!--begin::Info-->
                            {{-- <div class="d-flex flex-wrap mb-5">
                                <!--begin::Due-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-5 px-4 me-7 mb-3 text-center">
                                    @if($doctor->pre_consultation == 1)
                                    <i style="font-size: 40px; color: green;"  class="las la-check-square"></i>
                                    @else
                                    <i style="font-size: 40px; color: red;" class="lar la-window-close"></i>
                                    @endif
                                    <div class="fw-bold text-gray-400">Pre Consultation Form</div>
                                </div>
                                <!--end::Due-->
                               
                            </div> --}}
                            <!--end::Info-->
                      
                            <!--begin::Users-->
                            <div class="symbol-group symbol-hover">
                                <!--begin::User-->
                                <div class="">
                                   <a class="btn btn-sm  btn-bg-info btn-active-color-secondary text-white doctor" data-bs-toggle="modal" data-bs-target="#form{{$key}}" data-id="{{$doctor->id}}">Form</a>
                                </div>
                                <!--begin::User-->
                                <!--begin::User-->
                                <div class="ml-2">
                                    @if($doctor->book_type == 'chat')

                                  <a  href="{{route('doctor.chat')}}" class="btn btn-sm  btn-bg-light btn-active-color-primary">Go to Chat</a>
                                   
                                  @else

                                  <a class="btn btn-sm  btn-bg-success ml-1 btn-active-color-info text-white doctor" data-bs-toggle="modal" data-bs-target="#link{{$key}}" data-id="{{$doctor->id}}">Link</a>

                                  @endif
                                  
                                </div>
                                <!--begin::User-->

                                <div class="">
                                    <a class="btn btn-sm  btn-bg-primary ml-1 btn-active-color-secondary text-white subs" data-bs-toggle="modal" data-bs-target="#subscription" data-id="{{$doctor->id}}">Subs</a>
                                 </div>
                               
                            </div>
                            <!--end::Users-->
                        </div>
                        <!--end:: Card body-->
                    </span>
                    <!--end::Card-->
                </div>
                <!--end::Col-->

                 <!--begin::Modal - View Details-->
                <div class="modal fade" id="form{{$key}}" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header pb-0 border-0 justify-content-end">
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--begin::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                            <!--begin::Heading-->
                            <div class="text-center mb-13">
                                <!--begin::Title-->
                                <h1 class="mb-3">Pre-consultation Form</h1>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fw-bold fs-5">
                                    {{$doctor['patient']['first_name']}}  {{$doctor['patient']['middle_name']}}  {{$doctor['patient']['last_name']}}
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Users-->
                            <div class="mb-15">
                                <!--begin::List-->
                                <div class="mh-375px scroll-y me-n7 pe-7">

                            
                


                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <img @if($doctor['patient']['picture'] == 'default.png') src="/uploads/default.png" @else src="/uploads/avatar/{{$doctor['patient']['picture']}}" @endif alt="" class="w-25" />

                                            
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->

                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a class="d-flex align-items-center fs-5 fw-bolder ">Patient:&nbsp; &nbsp;
                                            
                                            <span class="text-dark text-hover-primary">@if($doctor->person == 'self')self @else {{$doctor->name}} @endif </span></a>
                                            <!--end::Name-->
                                            
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a class="d-flex align-items-center fs-5 fw-bolder ">Age:&nbsp; &nbsp;
                                            
                                            <span class="text-dark text-hover-primary">@if($doctor->person == 'self'){{$doctor['patient']['age']}} @else {{$doctor->age}} @endif </span></a>
                                            <!--end::Name-->
                                            
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a class="d-flex align-items-center fs-5 fw-bolder ">Sex:&nbsp; &nbsp;
                                            
                                            <span class="text-dark text-hover-primary">@if($doctor->person == 'self'){{$doctor['patient']['sex']}} @else {{$doctor->sex}} @endif </span></a>
                                            <!--end::Name-->
                                            
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->



                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a class="d-flex align-items-center fs-5 fw-bolder ">Complain:&nbsp; &nbsp;
                                            
                                            <span class="text-dark text-hover-primary"> {{$doctor->complain}}</span></a>
                                            <!--end::Name-->
                                            
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                @if($doctor->temperature != null)
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a class="d-flex align-items-center fs-5 fw-bolder ">Temperature :&nbsp; &nbsp;
                                            
                                            <span class="text-dark text-hover-primary"> {{$doctor->temperature}}&deg;C</span></a>
                                            <!--end::Name-->
                                            
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                @endif
                                @if($doctor->pulse != null)
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a class="d-flex align-items-center fs-5 fw-bolder ">Pulse Rate:&nbsp; &nbsp;
                                            
                                            <span class="text-dark text-hover-primary"> {{$doctor->pulse}}B/min</span></a>
                                            <!--end::Name-->
                                            
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                @endif
                                @if($doctor->bp != null)
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a class="d-flex align-items-center fs-5 fw-bolder ">Blood Pressure:&nbsp; &nbsp;
                                            
                                            <span class="text-dark text-hover-primary"> {{$doctor->bp}}mmHg</span></a>
                                            <!--end::Name-->
                                            
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                @endif
                                @if($doctor->respiratory != null)
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a class="d-flex align-items-center fs-5 fw-bolder ">Respiratory Rate:&nbsp; &nbsp;
                                            
                                            <span class="text-dark text-hover-primary"> {{$doctor->respiratory}}C/min</span></a>
                                            <!--end::Name-->
                                            
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                @endif
                                @if($doctor->sugar != null)
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a class="d-flex align-items-center fs-5 fw-bolder ">Blood Sugar:&nbsp; &nbsp;
                                            
                                            <span class="text-dark text-hover-primary"> {{$doctor->sugar}}mmol/L</span></a>
                                            <!--end::Name-->
                                            
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                @endif
                                @if($doctor->weight != null)
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a class="d-flex align-items-center fs-5 fw-bolder ">Weight:&nbsp; &nbsp;
                                            
                                            <span class="text-dark text-hover-primary"> {{$doctor->weight}}Kg</span></a>
                                            <!--end::Name-->
                                            
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                @endif
                                @if($doctor->history != null)
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a class="d-flex align-items-center fs-5 fw-bolder ">Family History:&nbsp; &nbsp;
                                            
                                            <span class="text-dark text-hover-primary"> {{$doctor->history}}</span></a>
                                            <!--end::Name-->
                                            
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                @endif


                



                    
                                    </div>
                                    <!--end::List-->
                            </div>
                            <!--end::Users-->
                            <!--begin::Notice-->
                            <div class="d-flex justify-content-between">
                                <!--begin::Label-->
                                <div class="fw-bold">
                                    <label class="fs-6">Carefully Review all Information</label>
                                    <div class="fs-7 text-muted">Review the pre-consultation form before chatting with the patient</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <label class="form-check form-switch form-check-custom form-check-solid">
                                    {{-- <input class="form-check-input" type="checkbox" value="" checked="checked" />
                                    <span class="form-check-label fw-bold text-muted">Allowed</span> --}}
                                </label>
                                <!--end::Switch-->
                            </div>
                            <!--end::Notice-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - View Details-->




        <!--begin::Modal -Link -->
        <div class="modal fade" id="link{{$key}}" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Form-->
                    <form class="form" action="{{route('link')}}" id="kt_modal_new_address_form" method="post">
                        @csrf
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_new_address_header">
                        <!--begin::Modal title-->
                        <h2>Send Video Chat Link to {{$doctor['patient']['first_name']}}  {{$doctor['patient']['middle_name']}}  {{$doctor['patient']['last_name']}}</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                            
          
    
                            <!--begin::Input group-->
                            <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-bold mb-2">Link</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea name="link" class="form-control form-control-lg form-control-solid">{{$doctor->link}}</textarea>
                                <input type="hidden" name="get_id" value="{{$doctor->id}}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
    
    
                               
    
                        </div>
                        <!--end::Scroll-->
                        </div>
                        <!--end::Modal body-->
                        <!--begin::Modal footer-->
                        <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                        </button>
                        <!--end::Button-->
                        </div>
                        <!--end::Modal footer-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
            </div>
            <!--end::Modal - New Faculty-->







                @endforeach
           
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->




            <!--begin::Modal - New faculty-->
            <div class="modal fade" id="subscription" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Form-->
                    <form class="form" action="{{route('prescription')}}" id="kt_modal_new_address_form" method="post">
                        @csrf
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_new_address_header">
                        <!--begin::Modal title-->
                        <h2>Send prescription to <span id="pname"></span></h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                            <input type="hidden" name="get_id" id="get_id"/>
                            <!--begin::Input group-->
                            <div class="row mb-5 add_item">
                                <!--begin::Col-->
                                <div class="col-md-9 fv-row my-2">
                                    <!--begin::Label-->
                                    <label class="required fs-5 fw-bold mb-2">Medicine</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text"  class="form-control form-control-solid" placeholder="Medicine" name="name[]" required>
                                      <!--end::Input-->
                                </div>
                               
                                <div class="form-group col-md-1 mx-1" style="padding-top: 35px;">
                                    <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle"></i></span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Scroll-->
                        </div>
                        <!--end::Modal body-->
                        <!--begin::Modal footer-->
                        <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                        </button>
                        <!--end::Button-->
                        </div>
                        <!--end::Modal footer-->
                    </form>
                    <!--end::Form-->

                        <div style="visibility: hidden;">
                        <div class="whole_extra_item_add" id="whole_extra_item_add">
                            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                <div class="row">
                                    
                                    <div class="fv-row col-md-9 my-2">
                                        <input type="text"  class="form-control form-control-solid" placeholder="Medicine" name="name[]" required>
                                    </div>
                                <div class="form-group col-md-3 " style="padding-top: 10px;">
                                    <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle"></i></span>
                                    <span class="btn btn-danger btn-sm removeeventmore"><i class="fa fa-minus-circle"></i></span>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </div>
            <!--end::Modal - New Faculty-->

    </div>
    <!--end::Post-->
                    
@endsection


@section('js')
<script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="/assets/js/custom/apps/user-management/users/list/table.js"></script>
<script src="/assets/js/custom/apps/subscriptions/list/export.js"></script>
<script src="/assets/js/custom/apps/subscriptions/list/list.js"></script>
<script src="/assets/js/custom/widgets.js"></script>

<script>

    $(document).ready(function(){
        var counter = 0;
        $(document).on("click",".addeventmore", function(){
            var whole_extra_item_add = $("#whole_extra_item_add").html();
            $(this).closest(".add_item").append(whole_extra_item_add);
            counter++
        });
        $(document).on("click", ".removeeventmore", function(event){
             $(this).closest(".delete_whole_extra_item_add").remove();
             counter -= 1;
        });
    });
</script>

<script>
    $(document).ready(function(){
   $('.subs').click(function(){
      const id = $(this).attr('data-id');
 
      $.ajax({
         url: 'get-data',
         type: 'GET',
         data: {
            "id": id
         },
         success: function(data){
        
            
           
            $('#get_id').val(data.id);
            $('#pname').html(data.patient.first_name+' '+data.patient.last_name);
           
           
         }
      })
   });
});
</script>
 @endsection