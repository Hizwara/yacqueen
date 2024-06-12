<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get CSV from /data/bank.csv
        $file = fopen(base_path('database/seeders/data/bank.csv'), 'r');

        // Skip the first line
        fgetcsv($file);

        while (($row = fgetcsv($file)) !== false) {
            $bank = [
                'bank_code' => $row[1],
                'bank_name' => $row[0],
            ];

            Bank::create($bank);
        }
    }
}
