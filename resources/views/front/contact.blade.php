@extends('front.layouts.master')
@section('PageTitle','Contact Us')
@section('content')

<div role="main" class="main">

    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md m-0">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">Contact Us</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div id="googlemaps" class="google-map m-0"></div>

    <div class="container py-5">
        <div class="row">
            <div class="col pt-3">

                <h3 class="text-color-quaternary font-weight-bold text-capitalize mb-2">Contact Info</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>

                <div class="row text-center pb-3 pt-4">
                    <div class="col-lg-3 col-md-6 pb-4 pb-lg-0">
                        <img width="60" src="img/demos/medical-2/icons/icon-location.svg" alt="" />
                        <h4 class="m-0 pt-4 font-weight-bold">Address</h4>
                        <p class="m-0">123 Street Name, City, England</p>
                    </div>
                    <div class="col-lg-3 col-md-6 pb-4 pb-lg-0">
                        <img width="60" src="img/demos/medical-2/icons/icon-phone.svg" alt="" />
                        <h4 class="m-0 pt-4 font-weight-bold">Phone Number</h4>
                        <p class="m-0"><a href="tel:+1234567890" class="text-color-default text-color-hover-primary">(800) 123-4567</a></p>
                    </div>
                    <div class="col-lg-3 col-md-6 pb-4 pb-md-0">
                        <img width="60" src="img/demos/medical-2/icons/icon-envelope.svg" alt="" />
                        <h4 class="m-0 pt-4 font-weight-bold">E-mail Address</h4>
                        <p class="m-0"><a href="mailto:mail@domain.com" class="text-default text-hover-primary">mail@example.com</a></p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <img width="60" src="img/demos/medical-2/icons/icon-calendar.svg" alt="" />
                        <h4 class="m-0 pt-4 font-weight-bold">Working Days/Hours</h4>
                        <p class="m-0">Mon - Sun / 9:00AM - 8:00PM</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <hr class="my-5">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3 class="text-color-quaternary font-weight-bold text-capitalize mb-2">Send a Message</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>

                <form class="contact-form custom-form-style-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100" action="php/contact-form.php" method="POST">
                    <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <input placeholder="Subject" type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <textarea placeholder="Your Message..." maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <input type="submit" value="Send Message" class="btn btn-primary px-4 py-3 text-center text-uppercase font-weight-semibold" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
