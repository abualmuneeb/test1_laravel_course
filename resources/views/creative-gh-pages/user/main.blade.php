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
      

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="">موقع التدريب</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#page-top">الرئيسية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#register">سجل الآن</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#signin">دخــول</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>موقع التدريب</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">دورات متواصلة طوال العام في مختلف العلوم التي تنمي احتياجات الفرد</p>
            <a class="btn btn-info btn-xl js-scroll-trigger" href="#signin"> دخــول </a>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#register">سجل الآن</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-success" id="signin">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">مرحبك بك معنا</h2>
            <hr class="light my-4">
            
            <div class="service-box mt-5 mx-auto">
                <i class="fa fa-4x fa-sign-in text-white mb-3 sr-icons"></i>
                <h3 class="mb-3">نافذة الدخول هنا</h3>
              <p class="text-white mb-0">ضع بيانات الدخول في الحقول ثم اضغط دخول</p>
            
            </div>

            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input placeholder="الايميل" type="email" class="form-control" name="email" required >
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input placeholder="الرقم السري" type="password" class="form-control" name="password" required>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> تذكرني في المرة القادمة
                            </label>
                        </div>
                    </div>
                </div>
              <button type="submit" class="btn btn-light btn-xl js-scroll-trigger" >دخـــــــــــول</button>
            </form>
            
          </div>
        </div>
      </div>
    </section>

    <section id="register">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">المعلومات المطلوبة لكي تكون معنا</h2>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">الإسم</h3>
              <p class="text-muted mb-0">الإسم سيكون محفوظ في الملف الشخصي ولا يظهر للكل</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
              <div class="service-box mt-5 mx-auto">
                <i class="fa fa-4x fa-users text-primary mb-3 sr-icons"></i>
                <h3 class="mb-3">الاسم المستعار </h3>
                <p class="text-muted mb-0">سيتم عرض الاسم المستعار للكل لكي يسهل التواصل معك</p>
              </div>
            </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-envelope text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">البريد الالكتروني</h3>
              <p class="text-muted mb-0">عن طريق البريد اإلكتروني تستطيع ان تفعل حسابك كذلك تستطيع ان تسترجع كلمة المرور</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-lock text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">الرمز السري</h3>
              <p class="text-muted mb-0">يمكنك ان تختار الرمز الذي يناسبك لكن لا بد ان لا يكون اقل من 6 احرف</p>
            </div>
          </div>

        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <form action="{{route('register')}}" method="post">
              {{csrf_field()}}
              <div class="form-group">
                  <input type="text" name="name" placeholder="الاسم" class="form-control">
              </div>
              <div class="form-group">
                  <input type="text" name="username" placeholder="الاسم المستعار" class="form-control">
              </div>
              <div class="form-group">
                <input type="text" name="email" placeholder="الايميل" class="form-control">
              </div>
              <div class="form-group">
                <input type="text" name="password" placeholder="الرمز السري" class="form-control">
              </div>
              <div class="form-group">
                <input type="text" name="password_confirmation" placeholder="الرمز السري مرة اخرى" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary btn-xl js-scroll-trigger" >تـســـجـــيــل</button>
            </form>
          </div>
        </div>
      </div>
    </section>

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