@extends('front.layouts.master')
@section('PageTitle','Featured Doctors')
@section('content')

<div role="main" class="main">

    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md m-0">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">Our Doctors</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                        <li><a href="#">Home</a></li>
                        <li class="active">Our Doctors</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <div class="col-xs-12 col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                <h3 class="text-color-quaternary mb-3 font-weight-semibold text-capitalize pe-5">The Highest Standard Of Health Care Medical Clinic</h3>
                <p class="text-uppercase mb-3">John Doe - Main Doctor</p>
                <img src="/front/img/demos/medical-2/others/signature.png" alt="Signature">
            </div>
            <div class="col-xs-12 col-lg-8 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum, blandit id faucibus ac, finibus vitae dui.</p>
                <p>Ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum.</p>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-4 col-md-6 pb-2">
                <div class="card border-0 mb-4 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                    <div class="card-body p-3 z-index-1 text-center">
                        <a href="demo-medical-2-our-doctors-detail.html" class="d-block text-center bg-color-grey">
                            <img alt="Doctor" class="img-fluid rounded" src="/front/img/demos/medical-2/doctors/doctor-1.png">
                        </a>
                        <strong class="font-weight-bold text-dark d-block text-5 mt-4 mb-0">
                            <a href="demo-medical-2-our-doctors-detail.html" class="text-dark">
                                John Smith
                            </a>
                        </strong>
                        <span class="text-uppercase d-block text-default font-weight-semibold text-1 p-relative bottom-4 mb-0">Cardiology</span>
                        <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
                        <a href="demo-medical-2-our-doctors-detail.html" class="btn btn-outline btn-light bg-hover-light text-dark text-hover-primary border-color-grey border-color-active-primary border-color-hover-primary text-uppercase rounded-0 px-4 py-2 mb-4 text-2">View More +</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-2">
                <div class="card border-0 mb-4 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="card-body p-3 z-index-1 text-center">
                        <a href="demo-medical-2-our-doctors-detail.html" class="d-block text-center bg-color-grey">
                            <img alt="Doctor" class="img-fluid rounded" src="/front/img/demos/medical-2/doctors/doctor-2.png">
                        </a>
                        <strong class="font-weight-bold text-dark d-block text-5 mt-4 mb-0">
                            <a href="demo-medical-2-our-doctors-detail.html" class="text-dark">
                                Robert Smith
                            </a>
                        </strong>
                        <span class="text-uppercase d-block text-default font-weight-semibold text-1 p-relative bottom-4 mb-0">Gastroenterology</span>
                        <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
                        <a href="demo-medical-2-our-doctors-detail.html" class="btn btn-outline btn-light bg-hover-light text-dark text-hover-primary border-color-grey border-color-active-primary border-color-hover-primary text-uppercase rounded-0 px-4 py-2 mb-4 text-2">View More +</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-2">
                <div class="card border-0 mb-4 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                    <div class="card-body p-3 z-index-1 text-center">
                        <a href="demo-medical-2-our-doctors-detail.html" class="d-block text-center bg-color-grey">
                            <img alt="Doctor" class="img-fluid rounded" src="/front/img/demos/medical-2/doctors/doctor-3.png">
                        </a>
                        <strong class="font-weight-bold text-dark d-block text-5 mt-4 mb-0">
                            <a href="demo-medical-2-our-doctors-detail.html" class="text-dark">
                                Jessica Smith
                            </a>
                        </strong>
                        <span class="text-uppercase d-block text-default font-weight-semibold text-1 p-relative bottom-4 mb-0">Pulmonology</span>
                        <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
                        <a href="demo-medical-2-our-doctors-detail.html" class="btn btn-outline btn-light bg-hover-light text-dark text-hover-primary border-color-grey border-color-active-primary border-color-hover-primary text-uppercase rounded-0 px-4 py-2 mb-4 text-2">View More +</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-2">
                <div class="card border-0 mb-4 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <div class="card-body p-3 z-index-1 text-center">
                        <a href="demo-medical-2-our-doctors-detail.html" class="d-block text-center bg-color-grey">
                            <img alt="Doctor" class="img-fluid rounded" src="/front/img/demos/medical-2/doctors/doctor-4.png">
                        </a>
                        <strong class="font-weight-bold text-dark d-block text-5 mt-4 mb-0">
                            <a href="demo-medical-2-our-doctors-detail.html" class="text-dark">
                                Janice Smith
                            </a>
                        </strong>
                        <span class="text-uppercase d-block text-default font-weight-semibold text-1 p-relative bottom-4 mb-0">Dental Care</span>
                        <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
                        <a href="demo-medical-2-our-doctors-detail.html" class="btn btn-outline btn-light bg-hover-light text-dark text-hover-primary border-color-grey border-color-active-primary border-color-hover-primary text-uppercase rounded-0 px-4 py-2 mb-4 text-2">View More +</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-2">
                <div class="card border-0 mb-4 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                    <div class="card-body p-3 z-index-1 text-center">
                        <a href="demo-medical-2-our-doctors-detail.html" class="d-block text-center bg-color-grey">
                            <img alt="Doctor" class="img-fluid rounded" src="/front/img/demos/medical-2/doctors/doctor-5.png">
                        </a>
                        <strong class="font-weight-bold text-dark d-block text-5 mt-4 mb-0">
                            <a href="demo-medical-2-our-doctors-detail.html" class="text-dark">
                                Judie Smith
                            </a>
                        </strong>
                        <span class="text-uppercase d-block text-default font-weight-semibold text-1 p-relative bottom-4 mb-0">Gynecology</span>
                        <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
                        <a href="demo-medical-2-our-doctors-detail.html" class="btn btn-outline btn-light bg-hover-light text-dark text-hover-primary border-color-grey border-color-active-primary border-color-hover-primary text-uppercase rounded-0 px-4 py-2 mb-4 text-2">View More +</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-2">
                <div class="card border-0 mb-4 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                    <div class="card-body p-3 z-index-1 text-center">
                        <a href="demo-medical-2-our-doctors-detail.html" class="d-block text-center bg-color-grey">
                            <img alt="Doctor" class="img-fluid rounded" src="/front/img/demos/medical-2/doctors/doctor-6.png">
                        </a>
                        <strong class="font-weight-bold text-dark d-block text-5 mt-4 mb-0">
                            <a href="demo-medical-2-our-doctors-detail.html" class="text-dark">
                                Josh Smith
                            </a>
                        </strong>
                        <span class="text-uppercase d-block text-default font-weight-semibold text-1 p-relative bottom-4 mb-0">Hepatology</span>
                        <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
                        <a href="demo-medical-2-our-doctors-detail.html" class="btn btn-outline btn-light bg-hover-light text-dark text-hover-primary border-color-grey border-color-active-primary border-color-hover-primary text-uppercase rounded-0 px-4 py-2 mb-4 text-2">View More +</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-color-primary">
        <div class="container">
            <div class="row py-2">
                <div class="col py-5 text-center text-color-light">
                    <p class="text-uppercase text-color-light d-block mb-0 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Need a Speciallist?</p>
                    <h3 class="text-color-quaternary mb-4 text-color-light d-block text-center font-weight-semibold text-capitalize appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Get Better Now! Just Make An Appointment</h3>
                    <a href="demo-medical-2-contact-us.html" class="btn btn-outline btn-light bg-hover-light text-hover-dark text-color-light border-color-light text-uppercase rounded-0 px-5 py-3 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">make an appointment</a>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-top-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-xl-4 p-4 bg-color-secondary d-flex align-items-center justify-content-between">
                    <div class="footer-top-info-detail">
                        <h4 class="text-color-light mb-1 d-block font-weight-semibold text-capitalize appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">Emergency Cases</h4>
                        <p class="d-block m-0 footer-top-info-desc appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <a href="#" type="button" class="btn btn-outline btn-footer-top-info btn-light rounded-0 d-block text-color-light border-color-primary text-uppercase text-center p-0 custom-btn-footer-top-info bg-transparent-hover appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">view more +</a>
                </div>
                <div class="col-xs-12 col-xl-4 p-4 bg-color-tertiary d-flex align-items-center justify-content-between">
                    <div class="footer-top-info-detail">
                        <h4 class="text-color-light mb-1 d-block font-weight-semibold text-capitalize appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">Doctors Timetable</h4>
                        <p class="d-block m-0 footer-top-info-desc appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <a href="#" type="button" class="btn btn-outline btn-footer-top-info btn-light rounded-0 d-block text-color-light border-color-primary text-uppercase text-center p-0 custom-btn-footer-top-info bg-transparent-hover appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">view more +</a>
                </div>
                <div class="col-xs-12 col-xl-4 p-4 bg-color-secondary d-flex align-items-center justify-content-between">
                    <div class="footer-top-info-detail">
                        <h4 class="text-color-light mb-1 d-block font-weight-semibold text-capitalize appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="700">Find Us On Map</h4>
                        <p class="d-block m-0 footer-top-info-desc appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <a href="#" type="button" class="btn btn-outline btn-footer-top-info btn-light rounded-0 d-block text-color-light border-color-primary text-uppercase text-center p-0 custom-btn-footer-top-info bg-transparent-hover appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="900">view more +</a>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
