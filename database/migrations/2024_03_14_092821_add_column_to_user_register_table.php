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
        Schema::table('user_register', function (Blueprint $table) {
            $table->string('address' , 50)->nullable()->after('email');
            $table->string('city' , 50)->nullable()->after('email');
            $table->string('postal/zipcode' , 50)->nullable()->after('email');
            $table->string('phone' , 50)->nullable()->after('email');
            $table->string('country' , 50)->nullable()->after('email');
            $table->string('user_image' , 50)->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_register', function (Blueprint $table) {
         
        });
    }
};
