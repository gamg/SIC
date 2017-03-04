@extends('layouts.login')

@section('title')
    SIC - Reset Password
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

        <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <div class="fg-line">
                    <input type="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}" required>
                </div>
            </div>
            <button type="submit" class="btn btn-login btn-danger btn-float">
                <i class="fa fa-mail-forward"></i>
            </button>
        </form>

        <br><hr>
        <div class="btn-group-sm">
            <a href="{{ route('login') }}" class="btn bgm-lightblue">Back</a>
        </div>
    </div>
@endsection