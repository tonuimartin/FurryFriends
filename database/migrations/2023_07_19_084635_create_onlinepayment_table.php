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
        Schema::create('onlinepayments', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('checkout_id')->unique();
            $table->string('amount');
            $table->string('phone_number');
            $table->string('mpesa_receipt_number')->nullable();
            $table->string('transaction_date')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

   
         

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('onlinepayments');
    }
};
