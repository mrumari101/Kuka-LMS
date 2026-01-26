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
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();

            $table->foreignId('level_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('name');

            // Stored as 1 → displayed as 001
            $table->unsignedSmallInteger('sequence');

            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('image')->nullable();

            $table->tinyInteger('status')->default(1);

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['level_id', 'sequence']);
            $table->unique(['level_id', 'slug']);

            $table->index('status');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
};
