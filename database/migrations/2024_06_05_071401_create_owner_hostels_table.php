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
        Schema::create('owner_hostels', function (Blueprint $table) {
            $table->integer('owner_id')->nullable();
            $table->id('hostel_id');
            $table->string('owner_image', 255);
            $table->string('owner_name', 100);
            $table->string('owner_number', 15);
            $table->string('hostel_name', 100);
            $table->text('hostel_address');
            $table->string('city', 50);
            $table->string('hostel_location', 50)->nullable();
            $table->string('hostel_front_image', 255);
            $table->text('hostel_detail');
            $table->integer('capacity')->nullable();
            $table->string('email', 100)->nullable();
            $table->integer('num_rooms')->nullable();
            $table->text('facilities')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->boolean('is_approved')->default(false);
            $table->boolean('top_rated')->default(false);
            $table->boolean('homepage')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owner_hostels');
    }
};
