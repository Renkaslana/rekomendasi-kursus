<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ahp_criteria', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->decimal('weight', 8, 5)->default(0); // Calculated weight from AHP
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ahp_criteria');
    }
};
