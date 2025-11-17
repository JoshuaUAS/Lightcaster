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
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('font_family', 100);
            $table->integer('font_size');
            $table->string('text_color', 20);
            $table->string('background_color', 20)->nullable();
            $table->enum('text_align', ['left', 'center', 'right'])->default('center');
            $table->boolean('has_shadow')->default(true);
            $table->boolean('has_outline')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};
