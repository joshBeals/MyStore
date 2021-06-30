
@extends('master')

@section('title')
    Order Now
@endsection

@section("content")

    <div class="container custom-product">
        <div class="col-sm-10">
            <h3>Order Table</h3>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>$ {{$total}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$ 0</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>$ 10</td>
                    </tr>
                    <tr>
                        <td>Total AMount</td>
                        <td>$ {{$total + 10}}</td>
                    </tr>
                </tbody>
              </table>
              <div>
                <form action="/placeorder" method="POST">
                    <div class="form-group">
                        @csrf
                        <textarea name="address" id="address" placeholder="Enter your address" class="form-control"></textarea>
                        {{-- <input type="email" name="email" class="form-control"> --}}
                    </div>
                    <div class="form-group">
                        <label>Payment Method</label><br>
                        <input type="radio" value="cash" name="payment"> <span>Online Payment</span><br>
                        <input type="radio" value="cash" name="payment"> <span>EMI Payment</span><br>
                        <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span>
                    </div>
                    <button type="submit" class="btn btn-primary">Order Now</button>
                </form>
              </div>
        </div>
    </div>

@endsection

