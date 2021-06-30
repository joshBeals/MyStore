
@extends('master')

@section('title')
    Cart List
@endsection

@section("content")

    <div class="container custom-product">
       <div class="col-sm-10">
            <div style="padding: 20px;">
                <h2>Cart Items</h2>
                <a href="/ordernow" class="btn btn-success">Order Now</a><br><br>
            </div>
            <div class="cart-wrapper">
                @foreach ($products as $item)
                    <div class="row cart-item">
                        <div class="col-sm-3">
                            <a href="">
                                <img class="trending-image" src="{{$item->gallery}}" alt="image">
                                <div class="p-5">
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <div class="p-5">
                                <h4>{{$item->name}}</h4>
                                <p>{{$item->category}}</p>
                                <h4>{{$item->price}}</h4>
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove Item</a>
                        </div>
                    </div>
                @endforeach
            </div>
       </div>
    </div>

@endsection

