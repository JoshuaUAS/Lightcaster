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
        Schema::create('bible_books', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('abbreviation', 10);
            $table->integer('book_number');
            $table->enum('testament', ['Old', 'New']);
            $table->integer('chapter_count');
            $table->timestamps();

            // Indexes
            $table->unique('book_number');
            $table->index('testament');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bible_books');
    }
};
