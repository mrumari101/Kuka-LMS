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
        Schema::create('difficulty_levels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Stored as 1–99 → rendered as 01–99
            $table->unsignedTinyInteger('sequence');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('difficulty_levels');
    }
};
