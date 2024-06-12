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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code');
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('detail_order_id')->nullable();
            $table->unsignedBigInteger('pre_order_id');
            $table->integer('number_of_ticket');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('payment_id')->nullable();
            $table->timestamps();
        });

        Schema::table('orders', function (Blueprint $table){
            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('pre_order_id')->references('id')->on('pre_order');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');

    }
};
