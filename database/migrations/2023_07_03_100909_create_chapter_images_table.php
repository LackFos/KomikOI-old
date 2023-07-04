<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chapter_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chapter_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->integer('page_number');
            $table->string('url')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapter_images');
    }
};