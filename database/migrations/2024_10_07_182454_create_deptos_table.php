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
        Schema::create('deptos', function (Blueprint $table) {
            $table->id();
            $table->string('iddepto',2);
            $table->string("nombredepto",100)->unique();
            $table->string("nombremediano",30)->unique();
            $table->string("nombrecorto",15)->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('deptos');
    }
};
