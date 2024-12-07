<?php

namespace App\Models;

use App\Models\Periodo;
use App\Models\Personal;
use App\Models\MateriaAbierta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grupo21359 extends Model
{
    /** @use HasFactory<\Database\Factories\Grupo21359Factory> */
    use HasFactory;
    protected $fillable = [
        'grupo',          // Código del grupo
        'descripcion',    // Descripción del grupo
        'max_alumnos',    // Número máximo de alumnos
        'materia_id',     // FK de la materia abierta
        'personal_id',    // FK del personal
        'periodo_id',     // FK del periodo
    ];

    public function materiaAbierta()
    {
        return $this->belongsTo(MateriaAbierta::class, 'materia_id');
    }

    public function personal()
    {
        return $this->belongsTo(Personal::class, 'personal_id');
    }

    public function periodo()
    {
        return $this->belongsTo(Periodo::class, 'periodo_id');
    }
}
