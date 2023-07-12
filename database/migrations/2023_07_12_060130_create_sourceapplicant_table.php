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
        Schema::create('sourceapplicants', function (Blueprint $table) {
            $table->id();
            $table->string('source_name');
            $table->string('location');
            $table->string('source_type');
            $table->string('source_description');
            $table->string('source_certification');
            $table->string('source_image');
            $table->string('email');
            $table->string('password');

           // $table->foreignId('source_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sourceapplicants');
    }
};
