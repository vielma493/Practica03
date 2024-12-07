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
        Schema::create('grupo_horario21359s', function (Blueprint $table) {
            $table->id();
            $table->foreignId("grupo21359_id",8)->constrained();
            $table->foreignId("lugar_id",8)->constrained();
            $table->string("dia",25);
            $table->string("hora");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupo_horario21359s');
    }
};
