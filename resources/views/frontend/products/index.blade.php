@extends('layouts.app')

@section('title')
    Products - SIC
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h2> {{$title}} </h2>
        </div>
        <div class="card-body card-padding">
            <div class="row">
                @if(isset($data))
                    @foreach($data as $product)
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="{{ $product['image_url'] }}" alt="{{ $product['name'] }}">
                                <div class="caption">
                                    <h4>{{ $product['name'] }}</h4>
                                    <h5>{{ $product['price'] }}</h5>
                                    <div class="m-b-5">
                                        <a href="{{ $product['product_url'] }}"
                                           class="btn btn-sm btn-primary" role="button"
                                           title="Go to Product" target="_blank">
                                            <i class="fa fa-eye"></i></a>
                                        <a href="#" class="btn btn-sm btn-success add-wishlist"
                                           role="button" title="Add to Wishlist"
                                           data-name="{{$product['name']}}"
                                           data-url="{{$product['product_url']}}">
                                            <i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            @include('frontend.products.form')
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('a.add-wishlist').on("click", function(event){
                event.preventDefault();
                $("#form-add-wishlist input#form-user").val({{Auth::user()->id}});
                $("#form-add-wishlist input#form-name").val($(this).data('name'));
                $("#form-add-wishlist input#form-url").val($(this).data('url'));
                var data = $("#form-add-wishlist").serialize();
                var route = $("#form-add-wishlist").attr("action");
                $.ajax({
                    type: 'POST',
                    url: route,
                    data: data,
                    success: function(data)
                    {
                        $.growl({ message: data.message }, { type: data.type, delay: 3500});
                    },
                    error: function(data){
                        $.growl({ message: 'Error, try later' }, { type: 'danger', delay: 3500});
                    }
                });
            });
        });
    </script>
@endsection