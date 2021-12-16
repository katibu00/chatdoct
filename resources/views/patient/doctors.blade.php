@extends('layouts.master')
@section('PageTitle','Doctors')

@section('css')
<link href="/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')



    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
           


            <!--begin::Followers toolbar-->
            <div class="d-flex flex-wrap flex-stack mb-6">
                <!--begin::Title-->
                <h3 class="fw-bolder my-2">Featured Doctors
                {{-- <span class="fs-6 text-gray-400 fw-bold ms-1">(29)</span></h3> --}}
                <!--end::Title-->
                <!--begin::Controls-->
                {{-- <div class="d-flex my-2">
                    <!--begin::Select-->
                    <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-white form-select-sm w-125px">
                        <option value="Active" selected="selected">Active</option>
                        <option value="Approved">In Progress</option>
                        <option value="Declined">To Do</option>
                        <option value="In Progress">Completed</option>
                    </select>
                    <!--end::Select-->
                </div> --}}
                <!--end::Controls-->
            </div>
            <!--end::Followers toolbar-->
            <!--begin::Row-->
            <div class="row g-6 mb-6 g-xl-9 mb-xl-9">
                <!--begin::Followers-->

                @foreach ($users as $user)
                <!--begin::Col-->
                <div class="col-md-6 col-xxl-4">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column p-9">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-5">
                                <img @if($user->picture == 'default.png') src="/uploads/default.png" @else src="/uploads/avatar/{{$user->picture}}" @endif alt="{{$user->first_name}} {{$user->last_name}}" class="w-100" />
                                <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-white h-15px w-15px ms-n3 mt-n3"></div>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">{{$user->first_name}} {{$user->middle_name}} {{$user->last_name}}</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="badge badge-lg badge-light-primary d-inline mb-1">{{$user->rank}}</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
                                    <div class="fs-6 fw-bolder text-gray-700">&#x20A6;{{number_format($user->price,0)}}</div>
                                    <div class="fw-bold text-gray-400">Per Hour</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
                                    <div class="fs-6 fw-bolder text-gray-700">{{$user->experience}}+</div>
                                    <div class="fw-bold text-gray-400">Work Experience</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Follow-->
                            <a href="{{route('doctors.details',$user->number)}}" class="btn btn-sm btn-light-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
                            {{-- <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="black" />
                                    <path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="black" />
                                </svg>
                            </span> --}}
                            <!--end::Svg Icon-->View Details</a>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--end::Col-->
                @endforeach

                <!--end::Followers-->
            </div>
            <!--end::Row-->
        
           
           
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->

@endsection

@section('js')
<script src="/assets/js/custom/pages/profile/connections.js"></script>
<script src="/assets/js/custom/modals/offer-a-deal.bundle.js"></script>
<script src="/assets/js/custom/widgets.js"></script>
@endsection