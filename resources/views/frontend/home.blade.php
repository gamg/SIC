@extends('layouts.app')

@section('title')
    Welcome to SIC
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Thumbnail <small>Extend Bootstrap's grid system with the thumbn</small></h2>
        </div>
        <div class="card-body card-padding">
        <p class="f-500 c-black m-b-5">Custom content</p>
        <small>With a bit of extra markup, it's possible to add any kind.</small>

        <br/>
        <br/>

        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="img/300x200.gif" alt="">
                    <div class="caption">
                        <h4>Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                        <div class="m-b-5">
                            <a href="#" class="btn btn-sm btn-primary" role="button">Button</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="img/300x200.gif" alt="">
                    <div class="caption">
                        <h4>Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                        <div class="m-b-5">
                            <a href="#" class="btn btn-sm btn-primary" role="button">Button</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="img/300x200.gif" alt="">
                    <div class="caption">
                        <h4>Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                        <div class="m-b-5">
                            <a href="#" class="btn btn-sm btn-primary" role="button">Button</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="img/300x200.gif" alt="">
                    <div class="caption">
                        <h4>Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                        <div class="m-b-5">
                            <a href="#" class="btn btn-sm btn-primary" role="button">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('scripts')
    @include('partials.growl-message')
    <script src="{{asset('vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js')}}"></script>
@endsection