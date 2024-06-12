<?php

namespace App\Http\Controllers\Home;

use App\Models\GuestStar;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Service
{
    public function getPopularArtist()
    {
        $popular = DB::table('guest_star')
            ->join('artists', 'guest_star.artist_id', '=', 'artists.id')
            ->select('artists.name', 'artists.artist_id', DB::raw('COUNT(guest_star.artist_id) as total'))
            ->where('guest_star.performance_date', '>=', date('Y-m-d'))
            ->groupBy('artists.name', 'artists.artist_id')
            ->orderByRaw('total DESC')
            ->limit(5)
            ->get();

        $artist_populer = [];

       

        $artis_populer = [
            [
                'name' => 'Ariana Grande',
                'artist_id' => 1,
                'total' => 5,
                'event' => [
                    [
                        'event_name' => 'Ariana Grande Concert',
                        'location' => 'Jakarta',
                        'date' => '2023-06-10',
                        'time' => '19:00:00',
                        'description' => 'Ariana Grande Concert',
                        'price' => 1000000,
                        'capacity' => 1000
                    ],
                    [
                        'event_name' => 'Ariana Grande Concert',
                        'location' => 'Jakarta',
                        'date' => '2023-06-10',
                        'time' => '19:00:00',
                        'description' => 'Ariana Grande Concert',
                        'price' => 1000000,
                        'capacity' => 1000
                    ],
                    [
                        'event_name' => 'Ariana Grande Concert',
                        'location' => 'Jakarta',
                        'date' => '2023-06-10',
                        'time' => '19:00:00',
                        'description' => 'Ariana Grande Concert',
                        'price' => 1000000,
                        'capacity' => 1000
                    ],
                    [
                        'event_name' => 'Ariana Grande Concert',
                        'location' => 'Jakarta',
                        'date' => '2023-06-10',
                        'time' => '19:00:00',
                        'description' => 'Ariana Grande Concert',
                        'price' => 1000000,
                        'capacity' => 1000
                    ]
                ]
            ],
            [
                'name' => 'Taylor Swift',
                'artist_id' => 2,
                'total' => 4,
                'event' => [
                    [
                        'event_name' => 'Taylor Swift Concert',
                        'location' => 'Jakarta',
                        'date' => '2023-06-10',
                        'time' => '19:00:00',
                        'description' => 'Taylor Swift Concert',
                        'price' => 1000000,
                        'capacity' => 1000
                    ],
                ]
            ],
        ];
        
        // Mocking data
        return $artis_populer;
    }

    public function getUpcomingEvent()
    {
        $upcoming = DB::table('events')
            ->select('event_name', 'location', 'date', 'time', 'description', 'price', 'capacity', 'id')
            ->where('date', '>=', date('Y-m-d'))
            ->orderBy('date', 'asc')
            ->limit(5)
            ->get();

        return $upcoming;
    }

    public function getOrderByUserId($user_id, $status){
        $order = Order::where('user_id', $user_id)
            ->where('status', $status)
            ->get();

        return $order;
    }
}