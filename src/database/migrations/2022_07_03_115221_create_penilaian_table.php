<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian', function (Blueprint $table) {
            $table->id('idpenilaian');

            $table->unsignedBigInteger('user_id_user');
            $table->foreign('user_id_user')->references('id')->on('users');

            $table->unsignedBigInteger('pesanan_idpesanan');
            $table->foreign('pesanan_idpesanan')->references('id')->on('pesanan');

            $table->unsignedBigInteger('karyawan_idkaryawan_pembersih');
            $table->foreign('karyawan_idkaryawan_pembersih')->references('idkaryawan_pembersih')->on('karyawan');

            $table->integer('nilai_penilaian');

            $table->text('ulasan_penilaian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaian');
    }
}
