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
        if (!Schema::hasTable('blogs')) { // Check if the table exists
            Schema::create('blogs', function (Blueprint $table) {
                $table->id();
                $table->string('blog_title');
                $table->string('blog_slug')->nullable()->unique();
                $table->text('blog_content');
                $table->string('blog_image')->nullable(); // Optional field for the image
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('blogs')) { // Check if the table exists before dropping
            Schema::dropIfExists('blogs');
        }
    }
};
