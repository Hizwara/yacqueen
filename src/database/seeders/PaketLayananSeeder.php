<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketLayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('paketlayanan')->insert([
            'durasi' => 1,
            'tarif_paket' => 150000,
            'status_paket' => 0,
            'nama_paketlayanan' => 'Paket Silver',
        ]);
        DB::table('paketlayanan')->insert([
            'durasi' => 2,
            'tarif_paket' => 200000,
            'status_paket' => 0,
            'nama_paketlayanan' => 'Paket Gold',
        ]);
        DB::table('paketlayanan')->insert([
            'durasi' => 2,
            'tarif_paket' => 225000,
            'status_paket' => 1,
            'nama_paketlayanan' => 'Paket Sterilisasi A',
        ]);
        DB::table('paketlayanan')->insert([
            'durasi' => 3,
            'tarif_paket' => 275000,
            'status_paket' => 1,
            'nama_paketlayanan' => 'Paket Sterilisasi B',
        ]);
        DB::table('paketlayanan')->insert([
            'durasi' => 4,
            'tarif_paket' => 350000,
            'status_paket' => 1,
            'nama_paketlayanan' => 'Paket Sterilisasi C',
        ]);

    }
}

