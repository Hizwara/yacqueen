<?php

namespace App\Http\Controllers\Payment;

use App\Models\Bank;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    public function index($order_code)
    {
        $banks = Bank::all();
    
        return view('payment', compact('order_code', 'banks'));
    }

    public function store(Request $request){
        $path = Storage::putFile('public/payment', $request->file('proof_of_payment'));
        $url = Storage::url($path);
        $payment_code = 'PAY' . date('Ymd') . rand(1000, 9999);
        $payment = Payment::create([
            'payment_code' => $payment_code,
            'proof_of_payment' => $url,
            'bank_id' => $request->bank_id,
            'payment_status' => 'success'
        ]);

        $order = Order::where('order_code', $request->order_code)->get();

        foreach ($order as $key => $value) {
            $value->update([
                'payment_id' => $payment->id,
            ]);
        }
        
        return redirect()->route('event')->with('success', 'Berhasil melakukan pembelian');
    }
}
