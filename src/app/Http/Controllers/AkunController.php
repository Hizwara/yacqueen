<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;
use App\Models\FormPemesanan;
use Illuminate\Support\Facades\Hash;


class AkunController extends Controller
{
    //
    public function index (){
        $id_user = auth()->id();
        $_akun = Akun::where('id', $id_user)->first();
        $_formpemesanan = FormPemesanan::where('user_id_user', $id_user)->get();

        return view('akun', ['akun' => $_akun, 'pesanan' => $_formpemesanan]);
    }

    public function update(Request $request){

        $id = $request->id;


        $akun = Akun::find($id);
        $akun->name = $request->input('name');
        $akun->email = $request->input('email');
        if ($request->input('password') != null ){
            $akun->password = Hash::make($request->input('password'));
        }
        $akun->alamat = $request->input('alamat');
        $akun->notelp = $request->input('notelp');
        // dd($akun);
        $akun->update();

        return redirect()->back()->with('status','Akun Updated Successfully');

            
        
    }


}
