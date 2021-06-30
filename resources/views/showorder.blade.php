
@extends('master')

@section('title')
    Order List
@endsection

@section("content")

    <div class="container custom-product">
        <div class="col-sm-10">
            <h3>Order Table</h3>
            <table class="table">
                <tbody>
                    <thead>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Product Category</th>
                        <th>Product Price</th>
                        <th>Order Status</th>
                        <th>Payment Method</th>
                        <th>Payment Status</th>
                        <th>Order Date</th>
                    </thead>
                    @foreach ($products as $item)
                        <tr>
                            <td><img class="order-image" src="{{$item->gallery}}" alt="image"></td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->category}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->payment_method}}</td>
                            <td>{{$item->payment_status}}</td>
                            <td>{{$item->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>

@endsection

