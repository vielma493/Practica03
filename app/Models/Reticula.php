<?php

namespace App\Models;

use App\Models\Carrera;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reticula extends Model
{
    /** @use HasFactory<\Database\Factories\ReticulaFactory> */
    use HasFactory;
    protected $fillable = ['idreticula','descripcion','fechaenvigor','carrera_id'];

    public function carrera(): BelongsTo{
        return $this->belongsTo(Carrera::class);
}
    public function materias(): HasMany{
    return $this->hasMany(Materia::class);
}
}
