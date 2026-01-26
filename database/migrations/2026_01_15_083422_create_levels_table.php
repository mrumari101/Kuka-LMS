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
        Schema::create('levels', function (Blueprint $table) {
            $table->id();

            $table->foreignId('discipline_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('name');

            // Stored as 1, 2, 3 → rendered as 01, 02, 03
            $table->unsignedTinyInteger('sequence');

            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('image')->nullable();

            $table->tinyInteger('status')->default(1);

            $table->timestamps();
            $table->softDeletes();

            // Critical constraints
            $table->unique(['discipline_id', 'sequence']);
            $table->unique(['discipline_id', 'slug']);

            $table->index('status');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('levels');
    }
};
