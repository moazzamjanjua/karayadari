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
            $table->string('owner_number')->nullable()->after('owner_id');
            $table->string('owner_email')->nullable()->after('owner_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hostels', function (Blueprint $table) {
            // Drop the columns when rolling back the migration
            $table->dropColumn('owner_number');
            $table->dropColumn('owner_email');
        });
    }
};
