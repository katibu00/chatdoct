@extends('layouts.master')
@section('PageTitle','My Reservations')

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
                <h3 class="fw-bolder my-2">My Bookings
                <span class="fs-6 text-gray-400 fw-bold ms-1">Active</span></h3>
                <!--end::Heading-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Row-->
            <div class="row g-6 g-xl-9">

                @foreach ($doctors as $doctor)
                    
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
                                    <img @if($doctor['book']['picture'] == 'default.png') src="/uploads/default.png" @else src="/uploads/avatar/{{$doctor['book']['picture']}}" @endif alt="" class="w-100" />
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
                            <div class="fs-3 fw-bolder text-dark">Dr. {{$doctor['book']['first_name']}}  {{$doctor['book']['middle_name']}}  {{$doctor['book']['last_name']}}</div>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">Booked {{$doctor->created_at->diffForHumans()}}</p>
                            <!--end::Description-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap mb-5">
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
                               
                            </div>
                            <!--end::Info-->
                      
                            <!--begin::Users-->
                            <div class="symbol-group symbol-hover">
                                <!--begin::User-->
                                <div class="" data-bs-toggle="tooltip" title="Fill out the pre-consultation">
                                   <a class="btn btn-sm  btn-bg-info btn-active-color-info text-white doctor" data-bs-toggle="modal" data-bs-target="#form" data-id="{{$doctor->id}}">Fill Form</a>
                                </div>
                                <!--begin::User-->
                                <!--begin::User-->
                                <div class="ml-2" data-bs-toggle="tooltip" title="Open Chat with Doctor">
                                  <a  href="{{route('chats')}}" class="btn btn-sm  btn-bg-light btn-active-color-primary">Go to Chat</a>
                                </div>
                                <!--begin::User-->
                               
                            </div>
                            <!--end::Users-->
                        </div>
                        <!--end:: Card body-->
                    </span>
                    <!--end::Card-->
                </div>
                <!--end::Col-->

                @endforeach
           
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->


        <!--begin::Modal - New faculty-->
        <div class="modal fade" id="form" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <form class="form" action="{{route('reservations')}}" id="kt_modal_new_address_form" method="post">
                    @csrf
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_new_address_header">
                    <!--begin::Modal title-->
                    <h2>Pre-Consultation Form</h2>
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
                        <div class="mb-15 fv-row">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack">
                                <!--begin::Label-->
                                <div class="fw-bold me-5">
                                    <label class="fs-6">Patient</label>
                                    {{-- <div class="fs-7 text-muted">Who's </div> --}}
                                </div>
                                <!--end::Label-->
                                <!--begin::Checkboxes-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input class="h-20px w-20px mx-2" type="radio" onclick="javascript:personCheck();" name="person" value="self" id="myself" checked="checked" />
                                        <span class="form-check-label fw-bold">Myself</span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="h-20px w-20px ml-1" type="radio" onclick="javascript:personCheck();" name="person" value="someone" id="someone" />
                                        <span class="form-check-label fw-bold mx-2">Someone</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                <!--end::Checkboxes-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-5" id="issomeone1" style="display: none;">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-bold mb-2">Person Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="name" id="name"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-5" id="issomeone2" style="display: none;">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-bold mb-2">Person Age</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="age" id="age"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-bold mb-2">Person Sex</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" id="se" data-placeholder="Select gender" name="sex">
                                    <option value=""></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>       
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-bold mb-2">Complains</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea name="complain" id="complain" class="form-control form-control-lg form-control-solid"></textarea>
                            <input type="hidden" name="get_id" id="get_id" />
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-5">
                                <!--begin::Col-->
                                <label class="fs-5 fw-bold mb-2">Vital Signs (if available)</label>
                                <div class="col-md-4 fv-row">
                                    <!--begin::Label-->
                                    <label class="fw-bold mb-2">Body Temperature (&deg;C)</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" step="0.01" class="form-control form-control-solid" placeholder="" name="temperature" id="temperature" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <div class="col-md-4 fv-row">
                                    <!--begin::Label-->
                                    <label class="fw-bold mb-2">Pulse rate (B/min)</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" step="0.01" class="form-control form-control-solid" placeholder="" name="pulse" id="pulse" />    
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <div class="col-md-4 fv-row">
                                    <!--begin::Label-->
                                    <label class="fw-bold mb-2">Blood Pressure (mmHg)</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" step="0.01" class="form-control form-control-solid" placeholder="" name="bp" id="bp" />    
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <div class="col-md-4 fv-row">
                                    <!--begin::Label-->
                                    <label class="fw-bold mb-2">Respiratory rate (C/min)</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" step="0.01" class="form-control form-control-solid" placeholder="" name="respiratory" id="respiratory" />    
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <div class="col-md-4 fv-row">
                                    <!--begin::Label-->
                                    <label class="fw-bold mb-2">Blood Sugar (mmol/L)</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" step="0.01" class="form-control form-control-solid" placeholder="" name="sugar" id="sugar" />    
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <div class="col-md-4 fv-row">
                                    <!--begin::Label-->
                                    <label class="fw-bold mb-2">Weight (Kg)</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" step="0.01" class="form-control form-control-solid" placeholder="" name="weight" id="weight" />    
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-5">
                                <!--begin::Col-->
                                <div class="col-md-12 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-5 fw-bold mb-2">Medical History</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea name="history" id="history" class="form-control form-control-lg form-control-solid"></textarea>
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


    </div>
    <!--end::Post-->
                    
@endsection

@section('js2')


<script>
function personCheck() {
  
    if (document.getElementById('myself').checked) {
        document.getElementById('issomeone1').style.display = 'none';
        document.getElementById('issomeone2').style.display = 'none';
    } 
    if (document.getElementById('someone').checked) {
        document.getElementById('issomeone1').style.display = '';
        document.getElementById('issomeone2').style.display = '';
    } 

    }
</script>
@endsection


@section('js')
<script>
    $(document).ready(function(){
   $('.doctor').click(function(){
      const id = $(this).attr('data-id');
    
      $.ajax({
         url: 'get-data',
         type: 'GET',
         data: {
            "id": id
         },
         success: function(data){
        
            if(data.person === 'self'){
                $('#myself').attr('checked',true);
                $('#someone').attr('checked',false);
                document.getElementById('issomeone1').style.display = 'none';
                 document.getElementById('issomeone2').style.display = 'none';
            }
            if(data.person === 'someone'){
                $('#someone').attr('checked',true);
                document.getElementById('issomeone1').style.display = '';
                document.getElementById('issomeone2').style.display = '';
            }
            $('#sex option[value="Male"]').attr("selected", "selected");

            $('#get_id').val(data.id);
            $('#name').val(data.name);
            $('#age').val(data.age);
            $('#sex').val(data.sex);
            $('#complain').val(data.complain);
            $('#temperature').val(data.temperature);
            $('#pulse').val(data.pulse);
            $('#bp').val(data.bp);
            $('#respiratory').val(data.respiratory);
            $('#sugar').val(data.sugar);
            $('#weight').val(data.weight);
            $('#history').val(data.history);
           
         }
      })
   });
});
</script>
@endsection