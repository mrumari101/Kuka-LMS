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
        Schema::create('readings', function (Blueprint $table) {
            $table->id();

            $table->string('reading_uid')->unique(); // R10.01.013.00.01

            $table->foreignId('chapter_id')
                ->constrained()
                ->cascadeOnDelete();

            // NULL = full chapter → 00
            $table->foreignId('topic_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();

            // RR (01–99)
            $table->unsignedTinyInteger('reading_no');

            $table->string('name');
            $table->string('slug');

            $table->longText('description')->nullable();
            $table->string('file')->nullable();

            $table->tinyInteger('status')->default(1);

            $table->timestamps();
            $table->softDeletes();

            // Guarantees unique reading number per chapter/topic
            $table->unique(['chapter_id', 'topic_id', 'reading_no']);
            $table->unique(['chapter_id', 'slug']);

            $table->index('status');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reading_builders');
    }
};
