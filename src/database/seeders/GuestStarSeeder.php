<?php

namespace Database\Seeders;

use App\Models\GuestStar;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuestStarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = fopen(base_path('database/seeders/data/guest_star.csv'), 'r');

        fgetcsv($file);

        while (($data = fgetcsv($file)) !== false) {
            
            GuestStar::create([
                'id' => $data[0],
                'artist_id' => $data[1],
                'performance_time' => $data[2],
                'performance_date' => $data[3],
                'event_id' => $data[4],
            ]);
        }

    }
}
