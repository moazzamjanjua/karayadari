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
        Schema::create('owner_rooms', function (Blueprint $table) {
            $table->integer('owner_id')->nullable();
            $table->integer('hostel_id')->nullable();
            $table->id('room_id');
            $table->json('room_images'); // Store images as JSON array
            $table->enum('room_type', ['single_bed', 'double_bed', 'carpeted']);
            $table->enum('floor_number', ['ground_floor', 'first_floor', 'second_floor', 'third_floor']);
            $table->integer('room_size');
            $table->integer('current_occupancy');
            $table->integer('required_occupancy');
            $table->boolean('wifi')->default(false);
            $table->boolean('filter_water')->default(false);
            $table->boolean('gas')->default(false);
            $table->boolean('chair')->default(false);
            $table->boolean('almaira')->default(false);
            $table->boolean('table')->default(false);
            $table->boolean('fan')->default(false);
            $table->boolean('ac')->default(false);
            $table->boolean('geyser')->default(false);
            $table->enum('washroom', ['private', 'share']);
            $table->text('room_detail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owner_rooms');
    }
};
