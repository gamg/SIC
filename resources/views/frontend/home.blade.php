@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Welcome to SIC</h2>
        </div>

        <div class="card-body card-padding">
            <div class="jumbotron">
                <h1>Welcome {{(Auth::check()) ? Auth::user()->name : ''}}</h1>
                @if(Auth::check())
                    <p>You can check the most expensive or cheapest products and add them to your wish list.</p>
                @else
                    <p>You must log in to see the products and add your favorites to the wishlist.</p>
                    <p>
                        <a class="btn btn-primary btn-lg" href="{{route('login')}}" role="button">Login</a>
                        <a class="btn btn-primary btn-lg" href="{{route('register')}}" role="button">Register</a>
                    </p>
                @endif
            </div>
        </div>
    </div>
@endsection