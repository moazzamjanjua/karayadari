<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelRoomsTable extends Migration
{
    public function up()
    {
        Schema::create('hostel_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hostel_id')->constrained('hostels')->onDelete('cascade');
            $table->foreignId('owner_id')->constrained('owners')->onDelete('cascade');
            $table->json('room_images')->nullable();
            $table->string('room_type');
            $table->string('floor_number');
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
            $table->string('washroom');
            $table->text('room_detail')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hostel_rooms');
    }
}
