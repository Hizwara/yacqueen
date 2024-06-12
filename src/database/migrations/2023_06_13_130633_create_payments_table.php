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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('payment_code');
            $table->string('proof_of_payment');
            $table->unsignedBigInteger('bank_id');
            $table->enum('payment_status', ['success', 'pending']);
            $table->timestamps();
        });

        Schema::table('payments', function (Blueprint $table){
            $table->foreign('bank_id')->references('id')->on('banks');
        });

        Schema::table('orders', function (Blueprint $table){
            $table->foreign('payment_id')->references('id')->on('payments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
