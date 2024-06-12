<?php

use Illuminate\Support\Facades\Route;

// Controler
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\FormPemesananController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UlasanController;

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


Route::get("/home", function () {
    return view("index");
})->name('home');
Route::get("/", function () {
    return view("index");
})->name('home');

Route::get("/paket", function() {
    return view("paket");
});
Route::get("/tentang-kami", function() {
    return view("tentang-kami");
});

/* Middlewere auth untuk user yang sudah login */

// Route For Login
Route::get("/login",[LoginController::class, 'index'])->middleware('guest')->name("login_home");
Route::post("/login", [LoginController::class, 'login'])->middleware('guest')->name("login");
Route::get("/logout", [LoginController::class, 'logout'])->middleware('auth')->name('logut');

// Route For Signup
Route::get("/signup", [SignupController::class, 'index'])->middleware('guest');
Route::post("/signup", [SignupController::class, 'signup'])->middleware('guest')->name('signup');

// Form Pemesanan
Route::get("/formpemesanan", [FormPemesananController::class, 'index'])->middleware('auth');
Route::post("/formpemesanan", [FormPemesananController::class, 'store'])->middleware('auth');
Route::post("/formpesanan/{id}", [FormPemesananController::class, 'produk'])->middleware('auth');
Route::post("/checkout/{id}", [FormPemesananController::class, 'checkout'])->middleware('auth');
Route::get("/formpesanan/gajadi/{id}", [FormPemesananController::class, 'gajadi'])->middleware('auth');

// Akun 
Route::get("/akun", [AkunController::class, 'index'])->middleware('auth');
Route::post("/akun/{id}", [AkunController::class, 'update'])->middleware('auth');

// Produk
Route::get("/produk", [ProdukController::class, 'index']);

// Ulasan
Route::get("/ulasan/{id}", [UlasanController::class, 'index'])->middleware('auth');
Route::post("/ulasan/{id}", [UlasanController::class, 'store'])->middleware('auth');