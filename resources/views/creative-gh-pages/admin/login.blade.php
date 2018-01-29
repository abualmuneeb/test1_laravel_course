@extends('creative-gh-pages.admin.master')
@section('content')
<div class="service-box mt-5 mx-auto">
    <i class="fa fa-4x fa-sign-in text-white mb-3 sr-icons"></i>
</div>

<form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
        {{ csrf_field() }}
    
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input placeholder="الايميل" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input placeholder="الرقم السري" type="password" class="form-control" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> تذكرني
                    </label>
                </div>
            </div>
        </div>

    <button type="submit" class="btn btn-light btn-xl js-scroll-trigger" >دخـــــــــــول</button>

</form>
@endsection