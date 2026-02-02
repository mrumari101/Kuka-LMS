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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();

            $table->string('question_uid')->unique(); // Q10.02.013.045.3

            $table->foreignId('chapter_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('topic_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();

            $table->unsignedSmallInteger('question_no'); // 001–999 (per chapter/topic)

                $table->foreignId('difficulty_level_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('question_type');

            $table->longText('mcq_description')->nullable();
            $table->string('mcq_file')->nullable();

            $table->longText('question_description')->nullable();
            $table->string('question_file')->nullable();

            $table->longText('solution_description')->nullable();
            $table->string('solution_file')->nullable();

            $table->tinyInteger('status')->default(1);

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['chapter_id', 'topic_id', 'question_no']);
        });



//        Schema::create('questions', function (Blueprint $table) {
//            $table->id();
//
//            $table->string('question_uid')->unique(); // Q10.01.013.00.01
//
//            $table->foreignId('discipline_id')
//                ->constrained()
//                ->cascadeOnDelete();
//
//            $table->foreignId('level_id')
//                ->constrained()
//                ->cascadeOnDelete();
//
//            $table->foreignId('chapter_id')
//                ->constrained()
//                ->cascadeOnDelete();
//
//            // NULL = full chapter → 00
//            $table->foreignId('difficulty_level_id')
//                ->nullable()
//                ->constrained()
//                ->cascadeOnDelete();
//            // RR (001–999)
//            $table->unsignedTinyInteger('question_no');
//            $table->string('type');
//            $table->longText('description')->nullable();
//            $table->string('file')->nullable();
//            $table->unsignedTinyInteger('marks')->default(1);
//            $table->tinyInteger('status')->default(1);
//            $table->string('question_status')->default('Draft');
//            $table->timestamps();
//            $table->softDeletes();
//            // Guarantees unique reading number per chapter/topic
//            $table->unique(['chapter_id', 'question_no']);
//            $table->index('status');
//        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
