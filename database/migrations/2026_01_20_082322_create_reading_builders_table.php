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
        Schema::create('reading_builders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('topic_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->longText('description')->nullable(); // Rich text editor
            $table->string('file')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->foreign('topic_id')
                ->references('id')
                ->on('topics') // make sure your topics table exists
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
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
