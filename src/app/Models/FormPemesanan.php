<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPemesanan extends Model
{
    use HasFactory;
    protected $fillable = ['idpesanan', 'user_id_user', 'paket_layanan_id_paket', 
                            'produk_idproduk', 'jumlah_produk_pesanan', 'status_pesanan', 'total_pembayaran',
                            'status_pembayaran', 'waktu_pemesanan', 'alamat'];
    protected $table = 'pesanan';

    public function layanan(){
        return $this->belongsTo(PaketLayanan::class, 'paket_layanan_id_paket');
    }


    public function produk(){
        return $this->belongsTo(Produk::class, 'produk_idproduk');
    }
}
