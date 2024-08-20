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
        Schema::create('hostels', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('owner_id');
        $table->string('hostel_name');
       
        $table->text('hostel_address');
        $table->string('city');
        $table->string('hostel_location')->nullable();
        $table->string('hostel_front_image')->nullable();
        $table->text('hostel_detail');
        $table->integer('capacity')->nullable();
        $table->string('email')->nullable();
        $table->integer('num_rooms')->nullable();
        $table->string('wifi');
        $table->string('security');
        $table->string('water_supply');
        $table->timestamps();

        $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hostels');
    }
};
