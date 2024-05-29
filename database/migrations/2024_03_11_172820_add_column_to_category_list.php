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
        Schema::table('category_list', function (Blueprint $table) {
            $table->string('category_image')->nullable()->after('category_name');
            $table->string('category_description')->nullable()->after('category_image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('category_list', function (Blueprint $table) {
            //
        });
    }
};
