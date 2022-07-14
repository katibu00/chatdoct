@extends('layouts.master')
@section('PageTitle','Doctor Dashboard')
@section('content')

<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">

      		<!--begin::Row-->
              <div class="row g-5 g-xl-8">
                <div class="col-xl-4">
                    <!--begin::Statistics Widget 4-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <div class="d-flex flex-stack card-p flex-grow-1">
                                <span class="symbol symbol-50px me-2">
                                    <span class="symbol-label bg-light-info">
                                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                        <span class="svg-icon svg-icon-2x svg-icon-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
                                                <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
                                                <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <div class="d-flex flex-column text-end">
                                    <span class="text-dark fw-bolder fs-2">5</span>
                                    <span class="text-muted fw-bold mt-1">Patients Consulted</span>
                                </div>
                            </div>
                            <div class="statistics-widget-4-chart card-rounded-bottom" data-kt-chart-color="info" style="height: 150px"></div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 4-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Statistics Widget 4-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <div class="d-flex flex-stack card-p flex-grow-1">
                                <span class="symbol symbol-50px me-2">
                                    <span class="symbol-label bg-light-success">
                                        <!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
                                        <span class="svg-icon svg-icon-2x svg-icon-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="black" />
                                                <path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <div class="d-flex flex-column text-end">
                                    <span class="text-dark fw-bolder fs-2">75</span>
                                    <span class="text-muted fw-bold mt-1">Active Patients</span>
                                </div>
                            </div>
                            <div class="statistics-widget-4-chart card-rounded-bottom" data-kt-chart-color="success" style="height: 150px"></div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 4-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Statistics Widget 4-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <div class="d-flex flex-stack card-p flex-grow-1">
                                <span class="symbol symbol-50px me-2">
                                    <span class="symbol-label bg-light-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                        <span class="svg-icon svg-icon-2x svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
                                                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <div class="d-flex flex-column text-end">
                                    <span class="text-dark fw-bolder fs-2">&#x20A6;{{number_format(Auth::user()->balance,0)}}</span>
                                    <span class="text-muted fw-bold mt-1">Balance</span>
                                </div>
                            </div>
                            <div class="statistics-widget-4-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px"></div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 4-->
                </div>
            </div>
            <!--end::Row-->

    </div>

    <!--end::Container-->
</div>
@endsection
