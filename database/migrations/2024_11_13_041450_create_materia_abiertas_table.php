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
        Schema::create('materia_abiertas', function (Blueprint $table) {
            $table->id();
            $table->foreignId("materia_id",8)->constrained();
            $table->foreignId("periodo_id",8)->constrained();
            $table->foreignId("carrera_id",8)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materia_abiertas');
    }
};
