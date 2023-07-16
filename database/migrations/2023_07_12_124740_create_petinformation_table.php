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
        Schema::create('petinformations', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('source_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title');
            $table->string('info_description');
            $table->string('pet_information_image');           
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('petinformations');
    }

};