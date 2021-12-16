<!-- ======= Top Bar ======= -->
@auth
@else
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
      @if (Route::has('register'))
        <i class="icofont-user-suited"> </i><a href="">&nbsp;Doctor Sign-Up&nbsp;</a>
      @endif
      | 
      <i class="icofont-user"></i><a href="{{ route('register') }}">&nbsp;Patient Sign-Up</a>
        <!--<i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55-->
      </div>
      <!--<div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div> -->
    </div>
  </section>
  @endauth

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center" style="border-bottom: 1px ridge #ece5e5;">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="http://chatdoc.com.ng/"> <i class="icofont-stethoscope-alt"></i>Chat<span style="color:#444444;">Doc</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('index') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('index') }}#about">About</a></li>
          <li><a class="nav-link scrollto" href="{{ route('medicalDevices') }}">Devices</a></li>
          <li><a class="nav-link scrollto " href="{{ route('index') }}#howitworks">How It Works</a></li>
          <li><a class="nav-link scrollto" href="{{ route('index') }}#team">Doctors</a></li>
          <!--<li><a class="nav-link scrollto" href="#contact">Contact</a></li>-->
          <li><a class="nav-link scrollto" href="{{ route('index') }}#faq">FAQs</a></li>
          @if (Route::has('login'))
         
          @auth
          
          <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-active">
              <li><a href="{{ route('login') }}">Dashboard</a></li>
              {{-- <li><form method="POST" action="{{ route('logout') }}">
              @csrf

              <x-dropdown-link :href="route('logout')"                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form></li> --}}
            </ul>
          </li>      
                
            @else
            <li><b><a class="nav-link" href="{{ route('login') }}"><span class="icofont-ui-lock">&nbsp;Login</span> </a></b></li>
            @endauth
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->