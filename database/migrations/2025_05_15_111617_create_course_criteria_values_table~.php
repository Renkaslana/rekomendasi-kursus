<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course_criteria_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->foreignId('criteria_id')->constrained('ahp_criteria')->onDelete('cascade');
            $table->decimal('value', 8, 5); // Normalized value (0-1)
            $table->timestamps();

            // Unique constraint to prevent duplicate values
            $table->unique(['course_id', 'criteria_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_criteria_values');
    }
};
