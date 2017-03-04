@extends('layouts.login')

@section('title')
    SIC - Register
@endsection

@section('content')
    <div class="lc-block toggled" id="l-register">

        @include('partials.form_errors')

        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <div class="fg-line">
                    <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required>
                </div>
            </div>

            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <div class="fg-line">
                    <input type="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}" required>
                </div>
            </div>

            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <div class="fg-line">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
            </div>

            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <div class="fg-line">
                    <input type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required>
                </div>
            </div>

            <button type="submit" class="btn btn-login btn-danger btn-float">
                <i class="fa fa-sign-in"></i>
            </button>
        </form>

        <br><hr>
        <div class="btn-group-sm">
            <a href="{{ route('login') }}" class="btn bgm-lightblue">Login</a>
        </din>
    </div>
@endsection