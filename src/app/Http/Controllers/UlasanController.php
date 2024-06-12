<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan;
use App\Models\Karyawan;
class UlasanController extends Controller
{
    //
    public function index(Request $request){
        $id = $request->id;
        $karyawan = Karyawan::get();
        return view('ulasan', ['idpesanan' => $id, 'karyawan' => $karyawan]);
    }

    public function store(Request $request){
        $id = $request->id;
        $id_user = auth()->id();
        $pesanan = Ulasan::create([

            'user_id_user' => $id_user,
            'pesanan_idpesanan' => $id,
            'karyawan_idkaryawan_pembersih' =>$request->input('karyawan'),
            'nilai_penilaian' => $request->input('nilai'),
            'ulasan_penilaian' => $request->input('ulasan')
        ]);
        return view('index');

    }
}
