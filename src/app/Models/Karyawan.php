<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = ['idkaryawan_pembersih','nama_karyawan', 'ketersediaan_karyawan', 'tanggal_lahir'];

    protected $table = 'karyawan';

    protected $primaryKey = 'idkaryawan_pembersih';

}
