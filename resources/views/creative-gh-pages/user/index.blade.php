@extends('creative-gh-pages.user.master')
@section('content')
<header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h3 class="text-uppercase">
                <strong>مرحبا بك</strong>
                {{Auth::user()->name}}
                </h3>
                <hr>
            </div>
            <div class="col-lg-8 mx-auto">
                <a class="btn btn-sm btn-danger" href="{{route('course')}}">الدورات</a>
            </div>
        </div>
    </div>
</header>
@endsection