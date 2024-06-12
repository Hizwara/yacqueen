<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = fopen(base_path('database/seeders/data/user.csv'), 'r');
        fgetcsv($file);

        while (($data = fgetcsv($file)) !== false) {
            User::create([
                'id' => $data[0],
                'first_name' => $data[1],
                'last_name' => $data[2],
                'phone_number' => $data[3],
                'role_id' => $data[4],
                'email' => $data[5],
                'password' => bcrypt('password123'),
            ]);
        }

    }
}
