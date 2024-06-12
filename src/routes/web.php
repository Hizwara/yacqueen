<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Event\EventContoller;
use App\Http\Controllers\Event\EventDetailController;
use App\Http\Controllers\Payment\PaymentController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get ('/', [HomeController::class, 'index'])->name('welcome');
Route::get ('/home', [HomeController::class, 'index'])->name('home');

Route::get('/event', [EventContoller::class, 'index'])->name('event');
Route::get('/event/{id}', [EventContoller::class, 'detail'])->name('event.detail')->middleware('auth');

Route::get('/add_cart/{id}', [CartController::class, 'addKeranjang'])->name('add_cart')->middleware('auth');
Route::get('/cart', [CartController::class, 'index'])->name('cart')->middleware('auth');
Route::get('remove_cart/{id}', [CartController::class, 'removeKeranjang'])->name('remove_cart')->middleware('auth');
Route::post('/cart/store', [CartController::class, 'store'])->name('cart.store');



Route::post('/personal-information', [EventDetailController::class, 'store'])->name('personal-information.store')->middleware('auth');
Route::get('/personal-information/{order_code}', [EventDetailController::class, 'index'])->name('personal-information')->middleware('auth');


Route::post('/payment', [PaymentController::class, 'store'])->name('payment.store');
Route::get('/payment/{order_code}', [PaymentController::class, 'index'])->name('payment');

Route::get('/myticket', [HomeController::class, 'myticket'])->name('myticket')->middleware('auth');

Route::get('/detail', function () {
    return view ('detail');
})->name('detail');


Route::get('/keranjang', function () {
    return view ('keranjang');
})->name('keranjang');


Route::get('/favorite', function () {
    return view('favorite');
});

// Login & Register
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');
Route::get ('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.store');

// Order

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');