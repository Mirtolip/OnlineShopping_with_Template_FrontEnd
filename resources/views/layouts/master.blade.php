
 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('temp/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('temp/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('temp/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('temp/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('temp/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('temp/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('temp/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('temp/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('temp/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('temp/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('temp/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('temp/css/style.css') }}">
  </head>
  <body class="goto-here">
        <div class="py-1 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <span class="text">+ 1235 2355 98</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <span class="text">youremail@email.com</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item" >
                                    <a class="nav-link" style="color: white;" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" style="color: white;" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white;">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="/">Vegefoods</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          
            <div class="collapse navbar-collapse" id="ftco-nav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                  <li class="nav-item"><a href="{{route('shop')}}" class="nav-link">Shop</a></li>
                  <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
                  <li class="nav-item"><a href="{{route('connect')}}" class="nav-link">Contact</a></li>
                  <li class="nav-item cta cta-colored"><a href="{{route('cart')}}" class="nav-link">
                    <span class="icon-shopping_cart"></span>
                    @if(Cart::instance('default')->count()> 0 )
                      [{{Cart::instance('default')->count()}}]
                    @endif
                  </a></li>
                </ul>
              </div>

        </div>
    </nav>
    <!-- END nav -->

    @yield('content')



    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row">
            <div class="mouse">
                        <a href="#" class="mouse-icon">
                            <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                        </a>
                    </div>
        </div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Vegefoods</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="{{route('shop')}}" class="py-2 d-block">Shop</a></li>
                <li><a href="{{route('about')}}" class="py-2 d-block">About</a></li>
                <li><a href="{{route('connect')}}" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
                  <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                    <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                    <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                  </ul>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">FAQs</a></li>
                    <li><a href="#" class="py-2 d-block">Contact</a></li>
                  </ul>
                </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Have a Questions?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('temp/js/jquery.min.js') }}"></script>
  <script src="{{ asset('temp/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('temp/js/popper.min.js') }}"></script>
  <script src="{{ asset('temp/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('temp/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('temp/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('temp/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('temp/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('temp/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('temp/js/aos.js') }}"></script>
  <script src="{{ asset('temp/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('temp/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('temp/js/scrollax.min.js') }}"></script>
  <script src="{{ asset('temp/js/google-map.js') }}"></script>
  <script src="{{ asset('temp/js/main.js') }}"></script>
    
  </body>
</html>