<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id('idkaryawan_pembersih');
            $table->string('nama_karyawan');
            $table->binary('ketersediaan_karyawan')->nullable();
            $table->date('tanggal_lahir');
            $table->decimal('gaji', 7, 0)->nullable();
            $table->date('mulai_kerja')->nullable();
            $table->string('jabatan', 45);
            $table->enum('gender', ['L', 'P']);
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
        Schema::dropIfExists('karyawan');
    }
}
