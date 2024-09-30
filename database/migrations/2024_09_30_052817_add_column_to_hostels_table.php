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
        Schema::table('hostels', function (Blueprint $table) {
            $table->boolean('is_booked')->default(false)->after('is_approved');;
            $table->integer('required_capacity')->nullable()->after('capacity');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hostel', function (Blueprint $table) {
            //
        });
    }
};
