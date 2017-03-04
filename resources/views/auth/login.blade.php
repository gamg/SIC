@extends('layouts.login')

@section('title')
    SIC - Login
@endsection

@section('content')
    <div class="lc-block toggled" id="l-login">

        @include('partials.form_errors')

        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <div class="fg-line">
                    <input type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}" required>
                </div>
            </div>

            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <div class="fg-line">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <i class="input-helper"></i>
                    Keep me signed in
                </label>
            </div>

            <button type="submit" class="btn btn-login btn-danger btn-float">
                <i class="fa fa-sign-in"></i>
            </button>
        </form>

        <br><hr>
        <div class="btn-group-sm">
            <a href="{{ route('register') }}" class="btn bgm-lightblue">Register</a>
            <a href="{{ route('password.request') }}" class="btn bgm-gray">Forgot Password?</a>
        </din>
    </div>
@endsection