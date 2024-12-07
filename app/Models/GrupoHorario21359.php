<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoHorario21359 extends Model
{
    /** @use HasFactory<\Database\Factories\GrupoHorario21359Factory> */
    use HasFactory;
    protected $fillable = ['grupo21359_id', 'lugar_id', 'dia', 'hora']; // Campos para asignación masiva

    // Relación con Lugares
    public function lugar()
    {
        return $this->belongsTo(Lugar::class, 'lugar_id');
    }

    
    public function grupo21359()
    {
        return $this->belongsTo(Grupo21359::class, 'grupo21359_id');
    }

}
