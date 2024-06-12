<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketlayananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paketlayanan', function (Blueprint $table) {
            $table->id('id_paket');
            $table->decimal('durasi', 2, 1);
            $table->decimal('tarif_paket', 6,0);
            $table->binary('status_paket');
            $table->char('nama_paketlayanan', 20)->unique();
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
        Schema::dropIfExists('paketlayanan');
    }
}
