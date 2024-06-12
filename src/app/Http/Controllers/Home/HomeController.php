<?php

namespace App\Http\Controllers\Home;

use App\Models\GuestStar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $popular = $this->service->getPopularArtist();
        $upcoming = $this->service->getUpcomingEvent();

        return view('welcome', compact('popular', 'upcoming'));
    }

    public function myticket(){
        $user_id = Auth::user()->id;
        $order = $this->service->getOrderByUserId($user_id, 'success');
        return view('myticket', compact('order'));
    }
}
