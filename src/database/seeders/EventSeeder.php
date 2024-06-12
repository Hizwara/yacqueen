<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = fopen(base_path('database/seeders/data/events.csv'), 'r');

        fgetcsv($file);

        while (($data = fgetcsv($file)) !== false) {
            Event::create([
                'id' => $data[0],
                'event_name' => $data[1],
                'location' => $data[2],
                'date' => $data[3],
                'price' => $data[4],
                'description' => $data[5],
                'capacity' => $data[6],
                'time' => $data[7],
                'user_id' => $data[8],
            ]);
        }

    }
}
