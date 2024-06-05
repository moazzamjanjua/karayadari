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
        Schema::create('owner_register', function (Blueprint $table) {
            $table->id('owner_id');
            $table->string('owner_name');
            $table->string('owner_email');
            $table->string('owner_country');
            $table->string('owner_city' , 50)->nullable();
            $table->string('owner_number' , 50)->nullable();
            $table->string('owner_address' , 50)->nullable();
            $table->string('owner_image')->nullable();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owner_register');
    }
};