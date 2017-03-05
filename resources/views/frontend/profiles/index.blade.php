@extends('layouts.app')

@section('title')
    Profile - {{Auth::user()->name}}
@endsection

@section('content')
    <div class="card" id="profile-main">
        <div class="pm-overview c-overflow">
            <div class="pmo-pic">
                <div class="p-relative">
                    <a href="">
                        <img class="img-responsive" src="{{asset('img/profile-pics/'.Auth::user()->avatar)}}" alt="">
                    </a>
                </div>
                <div class="pmo-stat">
                    <h2 class="m-0 c-white">{{Auth::user()->name}}</h2>
                </div>
            </div>

            <div class="pmo-block pmo-contact hidden-xs">
                <h2>Contact</h2>
                <ul>
                    <li><i class="fa fa-phone"></i> 00971 12345678 9</li>
                    <li><i class="fa fa-envelope"></i> {{Auth::user()->email}}</li>
                    <li><i class="fa fa-facebook"></i> example.example</li>
                    <li><i class="fa fa-twitter"></i> @gamg_ (twitter.com/gamg_)</li>
                    <li>
                        <i class="fa fa-building"></i>
                        <address class="m-b-0">
                            10098 ABC Towers, <br/>
                            Dubai Silicon Oasis, Dubai, <br/>
                            United Arab Emirates
                        </address>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pm-body clearfix">
            <ul class="tab-nav tn-justified">
                <li class="active waves-effect"><a href="profile-about.html">Edit your profile</a></li>
            </ul>

            <div class="card-body card-padding">
                @include('partials.form_errors')
                <form role="form" method="POST" action="{{ route('profiles.save') }}">
                    {{ csrf_field() }}
                    <div class="form-group fg-line">
                        <label for="inputName">Email address</label>
                        <input type="text" name="name" class="form-control input-sm" id="inputName"
                               placeholder="Enter name"
                               value="{{(old('name')) ? old('name') : Auth::user()->name}}">
                    </div>
                    <div class="form-group fg-line">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control input-sm" id="exampleInputEmail1"
                               placeholder="Enter email"
                               value="{{(old('email')) ? old('email') : Auth::user()->email}}">
                    </div>
                    <p><strong>You can change the password here:</strong></p>
                    <div class="form-group fg-line">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control input-sm"
                               id="exampleInputPassword1" placeholder="Enter new password">
                    </div>
                    <div class="form-group fg-line">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password_confirmation" class="form-control input-sm"
                               id="exampleInputPassword1" placeholder="Confirm new password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm m-t-10">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @include('partials.growl-message')
@endsection

