<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('karyawan')->insert([
            'nama_karyawan' => 'Yuki R',
            'ketersediaan_karyawan' => 'Y',
            'tanggal_lahir' => '1996-02-11',
            'gaji' => 1000000,
            'mulai_kerja' => '2022-06-06',
            'jabatan' => 'Admin',
            'gender' => 'P',

        ]);
        DB::table('karyawan')->insert([
            'nama_karyawan' => 'Nina Stanley',
            'ketersediaan_karyawan' => 'Y',
            'tanggal_lahir' => '1990-10-20',
            'gaji' => 2000000,
            'mulai_kerja' => '2016-11-04',
            'jabatan' => 'Pembersih',
            'gender' => 'P',
        ]);
        DB::table('karyawan')->insert([
            'nama_karyawan' => 'Terrell Jones',
            'ketersediaan_karyawan' => 'Y',
            'tanggal_lahir' => '1990-10-20',
            'gaji' => 2000000,
            'mulai_kerja' => '2016-11-04',
            'jabatan' => 'Pembersih',
            'gender' => 'P',
        ]);
        DB::table('karyawan')->insert([
            'nama_karyawan' => 'Sam Soto',
            'ketersediaan_karyawan' => 'Y',
            'tanggal_lahir' => '1987-07-22',
            'gaji' => 1500000,
            'mulai_kerja' => '2018-04-05',
            'jabatan' => 'Penyimpanan',
            'gender' => 'L',
        ]);
        DB::table('karyawan')->insert([
            'nama_karyawan' => 'Vincent Diaz',
            'ketersediaan_karyawan' => 'N',
            'tanggal_lahir' => '1997-12-11',
            'gaji' => 2000000,
            'mulai_kerja' => '2015-07-02',
            'jabatan' => 'Pembersih',
            'gender' => 'L',
        ]);
        DB::table('karyawan')->insert([
            'nama_karyawan' => 'Lorena Long',
            'ketersediaan_karyawan' => 'N',
            'tanggal_lahir' => '1988-05-12',
            'gaji' => 1500000,
            'mulai_kerja' => '2019-08-07',
            'jabatan' => 'Pembersih',
            'gender' => 'P',
        ]);
    }
}

