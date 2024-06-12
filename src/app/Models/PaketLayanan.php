<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketLayanan extends Model
{
    use HasFactory;
    protected $fillable = ['id_paket', 'durasi', 'tarif_paket', 'nama_paketlayanan'];
    protected $table    = 'paketlayanan';

     protected $primaryKey = 'id_paket';
}
