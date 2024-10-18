<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['noctrl','nombre','apellidop','apellidom','sexo','email','carrera_id'];

    public function carrera(): BelongsTo{
                   return $this->belongsTo(Carreras::class);
    }
}
