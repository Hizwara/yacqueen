<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    protected $fillable = ['payment_code', 'proof_of_payment', 'bank_id', 'payment_status'];

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}
