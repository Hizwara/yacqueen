<?php

namespace App\Http\Controllers\Event;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Event\Service;

class EventDetailController extends Controller
{
    protected $service;
    public function __construct(Service $service)
    {
        $this->middleware('auth');
        $this->service = $service;
        
    }
    
    public function index($order_code){
        $order = Order::where('order_code', $order_code)->first();

        if ($order->detail_order_id == null) {
            return view('personal-information', compact('order_code'));
        }
        
        return view('payment', compact('order_code'));
    }

    public function store(Request $request){
        
        $data = $request->all();
        $this->service->storeDetailOrder($data);
        return redirect()->route('payment', $request->order_code)->with('success', 'Berhasil checkout');
    }
}
