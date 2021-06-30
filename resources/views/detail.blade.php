
@extends('master')

@section('title')
    Product Detail
@endsection

@section("content")

    <div class="container custom-detail">
        <div class="detail-wrapper">
            <a href="/">Go Back</a><br><br>
            {{-- <h1>{{$product['name']}} Details</h1><br><br> --}}
            <div class="row">
                <div class="col-md-4">
                    <img class="detail-image" src="{{$product['gallery']}}" alt="image">
                    <div class="p-5">
                        <h3>Product Name: {{$product['name']}}</h3>
                        <h4>Product Category: {{$product['category']}}</h4>
                        <p>Product Price: {{$product['price']}}</p>
                        <p>Product Description: {{$product['description']}}</p>
                        <button class="btn btn-primary">Buy Now</button>
                        <br><br>
                        <form action="/add_to_cart" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product['id']}}">
                            <button class="btn btn-success">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

