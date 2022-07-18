@php
     $school = App\Models\School::where('id',auth()->user()->school_id)->first();
@endphp

<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="description" content="IntelliSAS is Software as a Service developed to manage schools Data so as to improve schools operations, reduce manual tasks, increase productivity, enhance parents satisfaction and engagement, generate useful reports and deliver the core functionalities that makes work and collaboration easier for stakeholders.  " />
      <meta name="author" content="intellisas.net" >
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield('PageTitle') - {{ @$school->name }}</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="/uploads/{{@$school->username}}/{{ @$school->logo }}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="/back/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="/back/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="/back/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="/back/css/responsive.css">
      {{-- <link rel="stylesheet" href="/back/npm/flatpickr/dist/flatpickr.min.css"> --}}

      {{-- my own css --}}
      <link href='/notify/toastr.min.css' rel='stylesheet' />
      <link rel="stylesheet" type="text/css" href="/tables/css/datatables.min.css">
      <link rel="stylesheet" type="text/css" href="/tables/css/dataTables.bootstrap4.min.css">

      <link rel="stylesheet" type="text/css" href="/fontawesome/css/all.css">
      <link rel="stylesheet" type="text/css" href="/fontawesome/css/fontawesome.min.css">
       {{-- Google --}}
       @yield('script')
       {{-- google --}}
   </head>
   <body>
      <!-- loader Start -->
      {{-- <div id="loading">
         <div id="loading-center">
         </div>
      </div> --}}
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         @include('layout.sidebar')
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">
                     <a href="/back/index.html" class="logo">
                     <div class="iq-light-logo">
                  <img src="/uploads/{{@$school->username}}/{{ @$school->logo }}" class="img-fluid" alt="School logo">
               </div>
               <div class="iq-dark-logo">
                  <img src="/uploads/{{@$school->username}}/{{ @$school->logo }}" class="img-fluid" alt="school logo">
               </div>
                     <span>{{ @$school->username }}</span>
                     </a>
                  </div>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="navbar-left">
                    
                     <div class="iq-search-bar d-none d-md-block">
                        <form action="#" class="searchbox">
                           <input type="text" class="text search-input" placeholder="Type here to search...">
                           <a class="search-link" href="/back/#"><i class="ri-search-line"></i></a>
                          
                        </form>
                     </div>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                        <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                       
                        <li class="nav-item">
                           <a class="search-toggle iq-waves-effect">
                              <div id="lottie-beil"></div>
                              <span class="bg-danger dots"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">0</small></h5>
                                    </div>
                                    <a class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             {{-- <img class="avatar-40 rounded" src="/back/images/user/01.jpg" alt=""> --}}
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">No new notification</h6>
                                             {{-- <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">95 MB</p> --}}
                                          </div>
                                       </div>
                                    </a>
                                  
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="search-toggle iq-waves-effect">
                              <div id="lottie-mail"></div>
                              <span class="bg-primary count-mail"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">0</small></h5>
                                    </div>
                                    <a class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             {{-- <img class="avatar-40 rounded" src="/back/images/user/01.jpg" alt=""> --}}
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">No new message</h6>
                                             {{-- <small class="float-left font-size-12">13 Jun</small> --}}
                                          </div>
                                       </div>
                                    </a>
                          
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <ul class="navbar-list">
                     <li>
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center bg-primary rounded">
                           <img @if(auth()->user()->image == 'default.png') src="/uploads/default.png" @else src="/uploads/{{$school->username}}/{{auth()->user()->image}}" @endif class="img-fluid rounded mr-3" alt="user">
                           <div class="caption">
                               <h6 class="mb-0 line-height text-white">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</h6>
                             <span class="font-size-12 text-white">

                               @if (auth()->user()->usertype == 'student')
                               {{auth()->user()->matric_number}}
                             @elseif (auth()->user()->usertype == 'applicant')
                             {{auth()->user()->applicant_login}}
                             @else
                                   {{ucfirst(auth()->user()->usertype)}}
                             @endif

                           </span>
                          </div>
                       </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">{{auth()->user()->first_name}} {{auth()->user()->middle_name}} {{auth()->user()->last_name}}</h5>
                                    <span class="text-white font-size-12">

                                     @if (auth()->user()->usertype == 'student')
                                        {{auth()->user()->matric_number}}
                                      @elseif (auth()->user()->usertype == 'applicant')
                                      {{auth()->user()->applicant_login}}
                                      @else
                                            {{auth()->user()->usertype}}
                                      @endif

                                    </span>
                                 </div>
                                 <a href="{{route('profile.edit',auth()->user()->id)}}" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">My Profile</h6>
                                          <p class="mb-0 font-size-12">View personal profile details.</p>
                                       </div>
                                    </div>
                                 </a>

                                 <a href="{{route('change.password')}}" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Change Password</h6>
                                          <p class="mb-0 font-size-12">Change your Current Password</p>
                                       </div>
                                    </div>
                                 </a>

                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="bg-primary iq-sign-btn" href="{{route('logout')}}" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         @yield('content')
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="#">IntelliSAS v1.0</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  Copyright &copy; {{date('Y')}} <a href="https://intellisas.net/{{@$school->username}}">{{ @$school->name }}.</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      {{-- <nav class="iq-float-menu">
         <input type="checkbox" href="/back/#" class="iq-float-menu-open" name="menu-open" id="menu-open">
         <label class="iq-float-menu-open-button" for="menu-open">
            <span class="lines line-1"></span>
            <span class="lines line-2"></span>
            <span class="lines line-3"></span>
         </label>
         <button class="iq-float-menu-item bg-info" data-toggle="tooltip" data-placement="top" title="Direction Mode" data-mode="rtl"><i class="ri-text-direction-r"></i></button>
         <button class="iq-float-menu-item bg-danger" data-toggle="tooltip" data-placement="top" title="Color Mode" id="dark-mode" data-active="true"><i class="ri-sun-line"></i></button>
         <button class="iq-float-menu-item bg-warning" data-toggle="tooltip" data-placement="top" title="Comming Soon"><i class="ri-palette-line"></i></button> 
      </nav> --}}
      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="/back/js/jquery.min.js"></script>
       <!-- Rtl and Darkmode -->
       <script src="/back/js/rtl.js"></script>
       <script src="/back/js/customizer.js"></script>
      <script src="/back/js/popper.min.js"></script>
      <script src="/back/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="/back/js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="/back/js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="/back/js/waypoints.min.js"></script>
      <script src="/back/js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="/back/js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="/back/js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="/back/js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="/back/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="/back/js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="/back/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="/back/js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="/back/js/lottie.js"></script>
      <!-- am core JavaScript -->
      <script src="/back/js/core.js"></script>
      <!-- am charts JavaScript -->
      <script src="/back/js/charts.js"></script>
      <!-- am animated JavaScript -->
      <script src="/back/js/animated.js"></script>
      <!-- am kelly JavaScript -->
      <script src="/back/js/kelly.js"></script>
      <!-- am maps JavaScript -->
      <script src="/back/js/maps.js"></script>
      <!-- am worldLow JavaScript -->
      <script src="/back/js/worldLow.js"></script>
      <!-- Flatpicker Js -->
      {{-- <script src="/back/../../../npm/flatpickr.js"></script> --}}
      <!-- Chart Custom JavaScript -->
      <script src="/back/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="/back/js/custom.js"></script>
      <script src="/notify/toastr.min.js"></script>
      <!-- My Own -->
      <script src="/handlebar/handlebars-v4.7.7.js"></script>
      <script src="/tables/js/datatables.min.js" type="text/javascript"></script>
     {!! Toastr::message() !!}
     @include('sweetalert::alert')
     <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
  </script>
  @yield('js')
   </body>
</html>