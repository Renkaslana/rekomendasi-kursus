<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ahp_criteria_comparisons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('criteria_id_1')->constrained('ahp_criteria')->onDelete('cascade');
            $table->foreignId('criteria_id_2')->constrained('ahp_criteria')->onDelete('cascade');
            $table->decimal('value', 8, 5); // Comparison value (1/9 to 9)
            $table->timestamps();

            // Unique constraint to prevent duplicate comparisons
            $table->unique(['criteria_id_1', 'criteria_id_2']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ahp_criteria_comparisons');
    }
};
