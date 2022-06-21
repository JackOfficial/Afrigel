<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/logo/Logo.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TutoHub') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


 {{-- <!-- Laravel bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script> --}}


  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


 <style>
     .outline-btn:hover{
         background-color: #30c8d6;
         color: white;
     }
 </style>
 
<script type="text/javascript">
window.$crisp=[];window.CRISP_WEBSITE_ID="a99fbf6a-a546-4a95-bea4-d07ba31ac843";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();
</script>

</head>

<body>
    <div id="app">
      <nav class="navbar navbar-light navbar-expand-md shadow-sm">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">
            <img src="{{ asset('images/logo/TutoHub_Logo.png') }}" class="img img-responsive" style="width: 125px; height: auto;"></img>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                      <a class="nav-link mr-2" href="">See Tutors</a>
                  </li>
                  
                  <li class="nav-item">
                      <a class="nav-link mr-2" href="">Find Tutors</a>
                  </li>

                    <li class="nav-item">
                      <a class="nav-link mr-2" href="">Subjects</a>
                  </li>

                     <li class="nav-item">
                                <a class="nav-link mr-2" href="">Contact Us</a>
                            </li>


                              <li class="nav-item">
                                <a class="nav-link mr-2" href="{{ url('/about') }}">About Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mr-2" href="{{ url('tutoringJob') }}">Become a Tutor</a>
                            </li>


                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link btn border-rounded mr-2 ml-2 mb-sm-2 outline-btn" style="border-color: #30c8d6;" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link btn border-rounded" style="background-color: #30c8d6; color:white;" href="{{ route('register') }}">{{ __('Sign up') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                              @if(Auth::user()->role==1)
                              <a class="dropdown-item" href="{{ url('/student-dashboard') }}">
                                {{ __('My TutoHub') }}
                            </a>
                              @else
                              <a class="dropdown-item" href="">
                                {{ __('My TutoHub') }}
                            </a>
                              @endif

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

        
            @yield('content')

<!-- Footer -->
<footer class="page-footer font-small bg-light">

  <div style="background-color: #2b546a; color:white;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0 text-white">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f text-white mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter text-white mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g text-white mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in text-white mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram text-white"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold ">
                <a href="{{ url('/') }}" style="text-decoration: none;">
                    <span style="color:#2b546a;">Tuto</span><span style="color:#30c8d6;">Hub</span></a></h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; border-color:#30c8d6;">
            <p>
             Study Beyond the classroom
            </p>
    
          </div>
      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful Links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; border-color:#30c8d6;">
        <p>
          <a href="" class="link text-decoration-none" style="color:#30c8d6;"><i class="fas fa-check"></i> Our Subjects</a>
        </p>
        <p>
          <a href="" class="link text-decoration-none" style="color:#30c8d6;"><i class="fas fa-check"></i> Find a Tutor</a>
        </p>
        <p>
          <a href="" class="link text-decoration-none" style="color:#30c8d6;"><i class="fas fa-check"></i> Become a Tutor</a>
        </p>

      </div>
      <!-- Grid column -->

            <!-- Grid column -->
     

      
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Subscribe Newsletter</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; border-color:#30c8d6;">
        <p>
            <form method="POST" action="">
                @csrf
             <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email here ..." name="email" aria-label="Username" aria-describedby="basic-addon1" required autocomplete="email">
              </div>
              @error('email')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
       </span>
@enderror


              <div class="form-group">
                <input type="submit" style="background-color:#30c8d6; color:white;" class="btn form-controll btn-block" value="Subscribe">
 </div>   
            </form>
            
        </p>
       

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; border-color:#30c8d6;">
        <p>
          <i class="fas fa-home mr-3"></i> Kigali, Kg 303 Str, Rwanda</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> support@tutohub.rw</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + (250) 784315067</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center text-white-50 py-3" style="background-color:#2b546a;">© {{ date('Y') }} Copyright:
    <a class="text-white" href="https://TutoHub.rw"> TutoHub.rw</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

   
    </div>
</body>
</html>