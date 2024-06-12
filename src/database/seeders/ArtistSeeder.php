<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = fopen(base_path('database/seeders/data/artist.csv'), 'r');

        fgetcsv($file);

        while (($data = fgetcsv($file)) !== false) {
            Artist::create([
                'id' => $data[0],
                'name' => $data[1],
                'artist_id' => $data[2],
            ]);
        }

    }
}
