
@extends('master')

@section('title')
    Products Filter
@endsection

@section("content")

    <div class="container custom-product">
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-4">
            <div class="search-wrapper">
                <h4>Results for Products</h4>
                @foreach ($products as $item)
                    <div class="searched-item">
                        <a href="detail/{{$item['id']}}">
                            <img class="trending-image" src="{{$item['gallery']}}" alt="image">
                            <div class="p-5">
                                <h2>{{$item['name']}}</h2>
                                <h4>{{$item['description']}}</h4>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        
    </div>

@endsection

