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
        Schema::table('owner_register', function (Blueprint $table) {
            $table->string('city' , 50)->nullable()->after('country');
            $table->string('phone' , 50)->nullable()->after('name');
            $table->string('permanent_address' , 50)->nullable()->after('email');
            $table->string('owner_image')->nullable()->after('permanent_address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('owner_register', function (Blueprint $table) {
            //
        });
    }
};
