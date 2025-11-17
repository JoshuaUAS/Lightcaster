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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('author', 255)->nullable();
            $table->string('category', 100)->nullable();
            $table->json('lyrics'); // Store structured verses as JSON
            $table->foreignId('background_id')->nullable()->constrained('backgrounds')->nullOnDelete();
            $table->foreignId('theme_id')->nullable()->constrained('themes')->nullOnDelete();
            $table->timestamps();

            // Index for search
            $table->index('title');
            $table->index('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
