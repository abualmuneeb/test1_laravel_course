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

        <!-- Plugin CSS -->
        <link href="{{asset('magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    
        <!-- Custom styles for this template -->
        <link href="{{asset('css/creative.min.css') }}" rel="stylesheet">
        <link href="{{asset('css/custome.css') }}" rel="stylesheet">

        <!-- WYSIWYG HTML Editor -->
        <link href="{{asset('css/froala_editor.pkgd.min.css') }}" rel="stylesheet">
        <link href="{{asset('css/froala_style.min.css') }}" rel="stylesheet">
    </head>
      
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a  class="btn btn-primary" href="{{route('home')}}">موقع التدريب</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            @guest
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger " href="/register">سجل الآن</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/login">دخــول</a>
            </li>
            @else
            <li class="nav-item">
                <a  href="{{route('profile',Auth::user()->id)}}">
                  <b class="btn btn-info circle1">الملف الشخصي</b>                  
                </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-info circle1" href="{{route('course')}}"><b>الدورات</b></a>
            </li>
            <li class="nav-item">
              <a  href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <b class="btn btn-danger circle1">تسجيل الخروج</b>
              </a>
            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            @endguest
          </ul>
        </div>
      </div>
      <b class="text-warning" >{{ Auth::user()->name }}</b>
    </nav>


      @yield('content')



    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('jquery/jquery.min.js') }}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{asset('scrollreveal/scrollreveal.min.js') }}"></script>
    <script src="{{asset('magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/creative.min.js') }}"></script>
    
    <script src="{{ asset('js/froala_editor.pkgd.min.js') }}"></script>
    <!-- WYSIWYG HTML Editor -->
    <script>
        $(function() {
          $('textarea').froalaEditor()
        });
      </script>
  </body>

</html>
