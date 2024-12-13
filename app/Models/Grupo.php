<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    /** @use HasFactory<\Database\Factories\GrupoFactory> */
    use HasFactory;
    protected $fillable = [
        'grupo',          // Código del grupo
        'descripcion',    // Descripción del grupo
        'max_alumnos',    // Número máximo de alumnos
    ];
}
