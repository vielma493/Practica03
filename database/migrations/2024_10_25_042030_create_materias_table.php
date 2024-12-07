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
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('idmateria',10);
            $table->string('nombremateria',100)->unique();
            $table->string('nivel',1);
            $table->string('nombremediano',40)->unique();
            $table->string('nombrecorto',20)->unique();
            $table->string('modalidad',15);
            $table->foreignId("reticula_id",8)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
