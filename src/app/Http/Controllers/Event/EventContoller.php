<?php

namespace App\Http\Controllers\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Event\Service;
use Illuminate\Support\Facades\Auth;

class EventContoller extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $events = $this->service->getUpcomingEvent($request);
        $search = $request->search;
        return view('event', compact('events', 'search'));
    }

    public function detail($id)
    {
        $upcoming = $this->service->getEventById($id);
        $guest_star = $this->service->getGuestStarById($id);
        $timeline = $this->service->getTimelineById($id);

        $user_id = Auth::user()->id;

        $pre_order = $this->service->getPreOrderByUserId($id, $user_id);

        $event = [
            'event' => $upcoming,
            'guest_star' => $guest_star,
            'timeline' => $timeline,
        ];


        return view('detail', compact('event', 'pre_order'));
    }

}
