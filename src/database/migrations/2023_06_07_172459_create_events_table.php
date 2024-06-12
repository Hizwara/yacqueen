<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->string('location');
            $table->date('date');
            $table->time('time');
            $table->text('description');
            $table->unsignedBigInteger('user_id');
            $table->decimal('price', 12, 2);
            $table->integer('capacity');
            $table->integer('pendaftar')->nullable()->default(0);
            $table->unsignedBigInteger('detail_event_id')->nullable();
            $table->timestamps();
        });

        Schema::table('events', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP FUNCTION IF EXISTS is_full');
        Schema::dropIfExists('event');
    }
};
