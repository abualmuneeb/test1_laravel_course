<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir=rtl>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{asset('magnific-popup/magnific-popup.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/creative.min.css') }}" rel="stylesheet">

  </head>

  <body>
  
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        @guest
        <span class="text-white" href=""> يجب عليك تسجيل الدخول</span>
        @else
        <a class="navbar-brand " href="">{{ Auth::user()->name }}</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-danger"   href="{{ route('logout') }}"
                  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  تسجيل الخروج
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{route('newcourse')}}" class="text-warning">  اضافة دورة جديدة </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="" class="text-warning">  الدورات </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="" class="text-warning">  الدورات </a>
            </li>
          </ul>
        </div>
        @endguest
      </div>
    </nav>

    <header class="masthead text-center text-white ">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto text-center">
            <div class="my-5"  ></div>
            <h2 class="section-heading text-white">موقع التدريب</h2>
            <hr class="light my-2">
            
            @yield('content')
          </div> 
        </div>
      </div>
    </header>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('jquery/jquery.min.js') }}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{asset('scrollreveal/scrollreveal.min.js') }}"></script>
    <script src="{{asset('magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/creative.min.js') }}"></script>

  </body>

</html>
