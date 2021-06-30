<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    {{-- JQUERY CDN --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .slider-img{
        height: 400px !important;
    }
    .custom-product{
        padding: 0;
        margin: 0;
        width: 100%;
    }
    .slider-text{
        background: rgba(0,0,0,.6);
    }
    .trending-wrapper{
        text-align: center;
        padding: 20px;
    }
    .trending-image{
        height: 100px;
    }
    .order-image{
        height: 50px;
    }
    .detail-image{
        height: 200px;
    }
    .search-wrapper{
        /* text-align: center; */
        padding: 20px;
    }
    .searched-item{
        padding: 10px 50px;
    }
    .cart-item{
        border-bottom: 1px solid black;
        padding: 10px 50px;
    }
    .custom-login{
        padding-top: 100px;
    }
    .custom-footer{
        /* position: fixed;
        bottom: 0; */
        margin-top: 20px;
        width: 100%;
    }
</style>
</html>