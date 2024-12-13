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
        Schema::create('grupo__horarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId("grupo_id",8)->constrained();
            $table->foreignId("lugar_id",8)->constrained();
            $table->foreignId("materia_id",8)->nullable()->constrained();
            $table->foreignId("personal_id",8)->nullable()->constrained();
            $table->foreignId("periodo_id",8)->constrained();
            $table->string("dia",25);
            $table->time("hora");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupo__horarios');
    }
};
