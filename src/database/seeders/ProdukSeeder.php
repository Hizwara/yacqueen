<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('produk')->insert([
            'nama_produk' => 'Pembersih lantai 2L',
            'hargaproduk' => '15000',
            'jumlahproduk' => '36',
        ]);
        DB::table('produk')->insert([
            'nama_produk' => 'Pembersih lantai 5L',
            'hargaproduk' => '35000',
            'jumlahproduk' => '36',
        ]);
        DB::table('produk')->insert([
            'nama_produk' => 'Pembersih Kaca 1 L',
            'hargaproduk' => '12500',
            'jumlahproduk' => '14',
        ]);
        DB::table('produk')->insert([
            'nama_produk' => 'Disinfektan 500ML',
            'hargaproduk' => '8000',
            'jumlahproduk' => '5',
        ]);
        DB::table('produk')->insert([
            'nama_produk' => 'Pembersih Lantai Ruangan 3L',
            'hargaproduk' => '21000',
            'jumlahproduk' => '14',
        ]);
        DB::table('produk')->insert([
            'nama_produk' => 'Sabun cuci piring 1L',
            'hargaproduk' => '17000',
            'jumlahproduk' => '0',
        ]);
        DB::table('produk')->insert([
            'nama_produk' => 'Pewangi pakaian 2L',
            'hargaproduk' => '28000',
            'jumlahproduk' => '0',
        ]);
    }
}

