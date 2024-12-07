<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class MateriaAbierta extends Model
{

    use HasFactory;

    protected $fillable = [
        'materia_id',
        'periodo_id',
        'carrera_id',
    ];

    public function materia(): BelongsTo{
        return $this->belongsTo(Materia::class, 'materia_id');
}
    public function periodo(): BelongsTo{
    return $this->belongsTo(Periodo::class);
}

}
