@extends('front.layouts.master')
@section('PageTitle','About Us')
@section('content')


<div role="main" class="main">

    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md m-0">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">About Us</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                        <li><a href="#">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <div class="col">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semr vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col">
                <div class="cards custom-cards h-auto mt-4 mb-xl-4">
                    <div class="cards-container row justify-content-center justify-content-xl-between p-relative top-0 z-index-2">
                        <div class="col-xs-12 col-lg-6 col-xl-4 mb-4 mb-xl-0 pb-2 pb-xl-0">
                            <div class="card border-radius-0 bg-color-light border-0 box-shadow-1 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                                <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                                    <img src="/front/img/demos/medical-2/icons/icon-healthcare-center.png" alt="Healthcare Center">
                                    <h4 class="card-title mb-1 font-weight-bold">Healthcare Center</h4>
                                    <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
                                    <a href="#" class="font-weight-bold text-uppercase text-decoration-none">read more +</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-6 col-xl-4 mb-4 mb-xl-0 pb-2 pb-xl-0">
                            <div class="card border-radius-0 bg-color-light border-0 box-shadow-1 appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100">
                                <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                                    <img src="/front/img/demos/medical-2/icons/icon-immediate-center.png" alt="Immediate Center">
                                    <h4 class="card-title mb-1 font-weight-bold">Immediate Center</h4>
                                    <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
                                    <a href="#" class="font-weight-bold text-uppercase text-decoration-none">read more +</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-6 col-xl-4 mb-4 mb-xl-0 pb-2 pb-xl-0">
                            <div class="card border-radius-0 bg-color-light border-0 box-shadow-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                                    <img src="/front/img/demos/medical-2/icons/icon-diagnostic-center.png" alt="Diagnostic Center">
                                    <h4 class="card-title mb-1 font-weight-bold">Diagnostic Center</h4>
                                    <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
                                    <a href="#" class="font-weight-bold text-uppercase text-decoration-none">read more +</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="more-about lazyload my-2" data-bg-src="/front//front/img/demos/medical-2/bg/bg-1.png">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-6 p-relative overflow-hidden col-cuttin-more-about"></div>
                <div class="col-xs-12 col-lg-6 p-relative pt-5 py-lg-5 bg-color-light z-index-1 ps-lg-5 ps-xl-0">
                    <p class="text-uppercase mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">Who We Are</p>
                    <h3 class="text-color-quaternary font-weight-bold text-capitalize mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">More About Porto Medical</h3>
                    <p class="font-weight-semibold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut tellus ante. Nam suscipit urna risus, fermentum commodo ipsum porta id.</p>
                    <p class="mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>
                    <div class="row counters mb-4 flex-nowrap flex-sm-wrap">
                        <div class="col-xs-4 col-sm-4 col-lg-4 mb-0 d-flex">
                            <div class="counter counter-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
                                <strong class="number-counter text-10" data-to="35" data-append="+">0</strong>
                                <label class="number-counter-text text-4 text-color-primary font-weight-semibold negative-ls-1">Business Year</label>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-lg-4 mb-0 d-flex">
                            <div class="counter counter-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750">
                                <strong class="number-counter text-10" data-to="50" data-append="+">0</strong>
                                <label class="number-counter-text text-4 text-color-primary font-weight-semibold negative-ls-1">Specialist Doctors</label>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-lg-4 mb-0 d-flex justify-content-center">
                            <div class="counter counter-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000">
                                <strong class="number-counter text-10" data-to="200" data-append="+">0</strong>
                                <label class="number-counter-text text-4 text-color-primary font-weight-semibold negative-ls-1">Modern Rooms</label>
                            </div>
                        </div>
                    </div>
                    <p class="mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum, blandit id faucibus ac.</p>
                    <div class="d-flex justify-content-start flex-column flex-xl-row">
                        <ul class="list list-icons list-icons-style-2 list-icons-sm custom-list-icons mb-1 mb-xl-3">
                            <li class="text-color-quaternary font-weight-bold mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100"><i class="fas fa-check text-color-quaternary"></i>Pellentesque ultricies nibh</li>
                            <li class="text-color-quaternary font-weight-bold mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><i class="fas fa-check text-color-quaternary"></i>Ultricies nibh pellen</li>
                            <li class="text-color-quaternary font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"><i class="fas fa-check text-color-quaternary"></i>Pellentesque ultricies nibh</li>
                        </ul>
                        <ul class="list list-icons list-icons-style-2 list-icons-sm custom-list-icons">
                            <li class="text-color-quaternary font-weight-bold mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"><i class="fas fa-check text-color-quaternary"></i>Ultricies nibh pellen</li>
                            <li class="text-color-quaternary font-weight-bold mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"><i class="fas fa-check text-color-quaternary"></i>Pellentesque ultricies nibh</li>
                            <li class="text-color-quaternary font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"><i class="fas fa-check text-color-quaternary"></i>Ultricies nibh pellen</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container pb-5 py-lg-5">
        <div class="row">
            <div class="col">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semr vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semr vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>

        <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
            <div class="row pt-4 pb-4">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card border-0 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                        <div class="card-body p-3 z-index-1">
                            <a href="img/demos/medical-2/gallery/gallery-1.jpg">
                                <img class="card-img-top border-radius-0" src="/front/img/demos/medical-2/gallery/gallery-1.jpg" alt="Card Image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card border-0 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                        <div class="card-body p-3 z-index-1">
                            <a href="img/demos/medical-2/gallery/gallery-2.jpg">
                                <img class="card-img-top border-radius-0" src="/front/img/demos/medical-2/gallery/gallery-2.jpg" alt="Card Image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                        <div class="card-body p-3 z-index-1">
                            <a href="img/demos/medical-2/gallery/gallery-3.jpg">
                                <img class="card-img-top border-radius-0" src="/front/img/demos/medical-2/gallery/gallery-3.jpg" alt="Card Image">
                            </a>
                        </div>
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
