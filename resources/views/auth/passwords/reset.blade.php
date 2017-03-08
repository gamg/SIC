@extends('layouts.login')

@section('title')
    SIC - Update Password
@endsection

@section('content')
    <div class="lc-block toggled" id="l-forget-password">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @include('partials.form_errors')

        <p class="text-left">Enter email for send password reset link.</p>

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

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
                <i class="fa fa-mail-forward"></i>
            </button>
        </form>
    </div>
@endsection