<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    protected $fillable = ['idpenilaian', 'user_id_user', 'pesanan_idpesanan', 'karyawan_idkaryawan_pembersih', 'nilai_penilaian', 'ulasan_penilaian'];
    protected $table = 'penilaian';

    protected $primaryKey = 'idpenilaian';
}
