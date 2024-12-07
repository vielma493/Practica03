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
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->string('grupo',15)->unique();
            $table->string('descripcion',35);
            $table->string('max_alumnos',60);
            $table->foreignId("periodo_id",8)->constrained();
            $table->foreignId("materia_id",8)->constrained();
            $table->foreignId("personal_id",8)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
