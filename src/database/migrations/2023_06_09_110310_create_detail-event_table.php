<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_event', function (Blueprint $table) {
            $table->id();
            $table->date('open_gate');
            $table->time('open_gate_time');
            $table->string('open_gate_description');
            $table->date('opening');
            $table->time('opening_time');
            $table->string('opening_description');
            $table->date('performance');
            $table->time('performance_time');
            $table->string('performance_description');
            $table->date('closing');
            $table->time('closing_time');
            $table->string('closing_description');
        });

        Schema::table('events', function (Blueprint $table){
            $table->foreign('detail_event_id')->references('id')->on('detail_event');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
