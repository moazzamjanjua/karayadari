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
            $table->dropColumn('best_hostel');
            $table->dropColumn('is_verified');
            $table->dropColumn('is_approved');
            $table->dropColumn('top_rated_hostel');
            $table->dropColumn('homepage');
            $table->dropColumn('featured_hostel');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hostels', function (Blueprint $table) {
            //
        });
    }
};
