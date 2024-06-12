<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public function index(){
        $produk = Produk::get();

        return view('produk', ['produk' =>  $produk, 'idpesanan' => -1]);
    }
}
