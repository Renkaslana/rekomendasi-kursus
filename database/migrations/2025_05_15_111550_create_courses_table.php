<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('instructor');
            $table->integer('duration_hours');
            $table->decimal('price', 10, 2);
            $table->string('difficulty_level'); // beginner, intermediate, advanced
            $table->string('image_url')->nullable();
            $table->string('course_url');
            $table->json('keywords')->nullable(); // For content-based filtering
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
