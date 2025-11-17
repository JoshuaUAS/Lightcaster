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
        Schema::create('bible_verses', function (Blueprint $table) {
            $table->id();
            $table->string('translation', 10);
            $table->string('book', 50);
            $table->integer('book_number');
            $table->integer('chapter');
            $table->integer('verse');
            $table->text('text');
            $table->timestamps();

            // Indexes
            $table->index(['translation', 'book', 'chapter', 'verse']);
            $table->index('translation');
            $table->index('book_number');

            // FULLTEXT index for verse searching
            $table->fullText('text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bible_verses');
    }
};
