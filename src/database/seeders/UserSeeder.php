<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'password' => Hash::make("feijafa21"),
            'email' => 'rizkylawati@gmail.com',
            'notelp' => '08165479669',
            'alamat' => 'Sukoharjo',
            'name' => 'snow',
            'level_users' => 3,
        ]);
        DB::table('users')->insert([
            'password' => Hash::make("hz5URXDaEv"),
            'email' => 'dafa149@gmail.com',
            'notelp' => '081290693042',
            'alamat' => 'Klaten',
            'name' => 'dafa',
            'level_users' => 1,
        ]);
        DB::table('users')->insert([
            'password' => Hash::make("vJuDsZiZ4r"),
            'email' => 'arif133@gmail.com',
            'notelp' => '081119519547',
            'alamat' => 'Klaten',
            'name' => 'arif',
            'level_users' => 1,
        ]);
        DB::table('users')->insert([
            'password' => Hash::make("cqsdzawYb9"),
            'email' => 'sinta735@gmail.com',
            'notelp' => '081682961877',
            'alamat' => 'Karanganyar',
            'name' => 'sinta',
            'level_users' => 1,
        ]);
        DB::table('users')->insert([
            'password' => Hash::make("7LLRk3Im8A"),
            'email' => 'sinta2122@gmail.com',
            'notelp' => '081919163444',
            'alamat' => 'Sukoharjo',
            'name' => 'sinta2',
            'level_users' => 1,
        ]);
        DB::table('users')->insert([
            'password' => Hash::make("X5UjQ8N4Ma"),
            'email' => 'adam332@gmail.com',
            'notelp' => '081553012461',
            'alamat' => 'Sukoharjo',
            'name' => 'adam',
            'level_users' => 1,
        ]);
        DB::table('users')->insert([
            'password' => Hash::make("iTIv3eoveE"),
            'email' => 'sarah452@gmail.com',
            'notelp' => '081809456551',
            'alamat' => 'Surakarta',
            'name' => 'sarah',
            'level_users' => 1,
        ]);
        DB::table('users')->insert([
            'password' => Hash::make("22kmDVEK71"),
            'email' => 'alishernynxys889@gmail.com',
            'notelp' => '081422506113',
            'alamat' => 'Surakarta',
            'name' => 'alishernynxys',
            'level_users' => 1,
        ]);
        DB::table('users')->insert([
            'password' => Hash::make("lcm7q8zQfs"),
            'email' => 'snyxfre310@gmail.com',
            'notelp' => '081445901089',
            'alamat' => 'Surakarta',
            'name' => 'snyxfre',
            'level_users' => 1,
        ]);
    }
}
