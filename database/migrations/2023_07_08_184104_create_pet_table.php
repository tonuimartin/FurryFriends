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
        Schema::create('pets', function (Blueprint $table) {
            $table->id('pet_id');
            $table->string('pet_name');
            $table->string('age');
            $table->string('pet_gender');
            $table->string('breed');
            $table->string('pet_type');
            $table->foreignId('source_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('description');
            $table->string('pet_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
