<?php

namespace App\Http\Controllers;
use App\Models\PaketLayanan;
use App\Models\Akun;
use App\Models\FormPemesanan;
use App\Models\Produk;
use Illuminate\Http\Request;

class FormPemesananController extends Controller
{
   
    public function index(){
        $paket = PaketLayanan::get();
        $id_user = auth()->id();
        $akun = Akun::where('id', $id_user)->first();
        return view('formpemesanan', ['paket' => $paket, 'akun' => $akun]);
    }

    public function store(Request $request){

        $id =  auth()->id();
        date_default_timezone_set('Asia/Jakarta');
        // dd($request->input('alamat'));
        $pesanan = FormPemesanan::create([
            'user_id_user' => $id,
            'paket_layanan_id_paket' => $request->input('paket'),
            'waktu_pemesanan' => date('Y-m-d H:i:s'),
            'alamat' => $request->input('alamat'),
            'status_pesanan' => 'N',
        ]);
        

        $produk = Produk::get();
        if($pesanan){
            return view('produk', ['produk'=> $produk, 'idpesanan' => $pesanan->id]);
        }
    }

    public function produk(Request $request){
        $id = $request->id;
        $id_user = auth()->id();
        $akun = Akun::find($id_user);

        $pesanan = FormPemesanan::find($id);
        // dd($pesanan); 
        
        $pesanan->produk_idproduk = $request->produk1;
        $pesanan->jumlah_produk_pesanan = $request->produk1jumlah;
        
        // dd($pesanan->layanan->nama_paketlayanan);
        // Calculate Harga
        
        $harga = 0;
        $harga += $pesanan->layanan->tarif_paket;
        if($pesanan->jumlah_produk_pesanan != null){
            $harga += ($pesanan->produk->hargaproduk * $pesanan->jumlah_produk_pesanan);
        }
        $pesanan->total_pembayaran = $harga;
        $pesanan->update();
        // dd($harga);
        $currentPesanan = FormPemesanan::find($id);
        return view('checkout', ['pesanan' => $currentPesanan, 'akun' => $akun, 'harga' =>$harga, 'idpesanan' => $id]);
    }

    public function checkout(Request $request){
        $id = $request->id;
        $pesanan = FormPemesanan::find($id);
        $pesanan->cara_pembayaran = $request->input('pembayaran');
        $pesanan->status_pesanan = 'Y';
        $pesanan->update();

        return view('index');
    }

    public function gajadi(Request $request){
        $id = $request->id;
        $pesanan = FormPemesanan::find($id);
        $pesanan->delete();
        return view('index');
    }
}

