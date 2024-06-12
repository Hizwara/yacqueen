<?php

namespace App\Http\Controllers\Cart;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\Checkout;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Cart\Service;

class CartController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index (){
        $user_id = Auth::user()->id;
        $pre_order = $this->service->getPreOrderByUserId($user_id, 'pending');
        return view('cart', compact('pre_order'));
    }

    public function addKeranjang($id)
    {
        $user_id = Auth::user()->id;
        try {
            $this->service->storePreOrder($id, $user_id);
            User::find(Auth::user()->id)->notify(new Checkout($id));

            return redirect()->route('event')->with('success', 'Berhasil menambahkan ke keranjang');
        } catch (\Throwable $th) {
            return redirect()->route('event.detail', $id)->with('error', 'Gagal menambahkan ke keranjang');
        }
    }

    public function removeKeranjang($id)
    {
        try {
            $this->service->deletePreOrder($id);
            return redirect()->route('cart')->with('success', 'Berhasil menghapus dari keranjang');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->route('cart')->with('error', 'Gagal menghapus dari keranjang');
        }
    }

    public function store(Request $request){
        $user_id = Auth::user()->id;
        $order_code = $this->service->storeOrder($user_id, $request->all());
        
        // Read notification
        $user = User::find(Auth::user()->id);
        foreach ($user->unreadNotifications as $notification) {
            $notification->markAsRead();
        }
        return redirect()->route('personal-information', $order_code)->with('success', 'Berhasil checkout');
    }
}
