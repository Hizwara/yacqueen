<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = ['event_id',
                 'detail_order_id',
                 'pre_order_id',
                 'number_of_ticket', 
                 'user_id',
                  'status', 'order_code', 'payment_id'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function detail_order()
    {
        return $this->belongsTo(Detail_Order::class);
    }

    public function pre_order()
    {
        return $this->belongsTo(Pre_Order::class);
    }
}
