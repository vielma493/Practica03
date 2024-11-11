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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('RFC',13);
            $table->string('nombres',50);
            $table->string('apellidop',50);
            $table->string('apellidom',50);
            $table->string('licenciatura',200)->nullable();
            $table->string('lictit',3);
            $table->string('especializacion',200)->nullable();
            $table->string('esptit',3);
            $table->string('maestria',200)->nullable();
            $table->string('maetit',3);
            $table->string('doctorado',200)->nullable();
            $table->string('doctit',3);
            $table->date('fechaingsep');
            $table->date('fechaingins');
            $table->foreignId("depto_id",8)->constrained();
            $table->foreignId("puesto_id",8)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
