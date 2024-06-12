<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('fasilitas')->insert([
            'nama_fasilitas' => 'Menyapu',
        ]);
        DB::table('fasilitas')->insert([
            'nama_fasilitas' => 'Mengepel',
        ]);
        DB::table('fasilitas')->insert([
            'nama_fasilitas' => 'Membersihkan Kaca',
        ]);
        DB::table('fasilitas')->insert([
            'nama_fasilitas' => 'Vacuum Karpet',
        ]);
        DB::table('fasilitas')->insert([
            'nama_fasilitas' => 'Fogging Disinfektan',
        ]);
        DB::table('fasilitas')->insert([
            'nama_fasilitas' => 'Cuci Karpet',
        ]);
        DB::table('fasilitas')->insert([
            'nama_fasilitas' => 'Memotong Rumput',
        ]);
        DB::table('fasilitas')->insert([
            'nama_fasilitas' => 'Powerwashing',
        ]);
        DB::table('fasilitas')->insert([
            'nama_fasilitas' => 'Cuci Piring',
        ]);
        DB::table('fasilitas')->insert([
            'nama_fasilitas' => 'Gardening',
        ]);
    }
}
/*
INSERT INTO `fasilitas` (nama_fasilitas) VALUES ('Powerwashing');
INSERT INTO `fasilitas` (nama_fasilitas) VALUES ('Gardening');
*/
