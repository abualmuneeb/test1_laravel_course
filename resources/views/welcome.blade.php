<!doctype html>
<html lang="{{ app()->getLocale() }}" dir=rtl>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>test</title>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="flex-center position-ref full-height">
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                    <a href="{{ url('/admin') }}">admin</a>
                                @else
                                    <a href="{{ route('login') }}">Login</a>
                                    <a href="{{ route('register') }}">Register</a>
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>            
        <script>
            function myFunction() {
                var x = document.createElement("INPUT");
                x.setAttribute("type", "file");
                document.body.appendChild(x);
            }
        </script>
    </body>
</html>
