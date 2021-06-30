<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Login Routes
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [UserController::class, 'login']);

// Registeration Routes
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [UserController::class, 'register']);

// Logout Route
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

// Main Shop Routes
Route::get('/', [ProductController::class, 'index']);
Route::get('detail/{id}', [ProductController::class, 'detail']);
Route::get('/search', [ProductController::class, 'search']);

// Cart Routes
Route::post('/add_to_cart', [ProductController::class, 'addToCart']);
Route::get('/cart', [ProductController::class, 'showCart']);
Route::get('/removecart/{id}', [ProductController::class, 'removeCart']);

// Order Route
Route::get('/orders', [ProductController::class, 'showOrders']);
Route::get('/ordernow', [ProductController::class, 'orderNow']);
Route::post('/placeorder', [ProductController::class, 'placeOrder']);
