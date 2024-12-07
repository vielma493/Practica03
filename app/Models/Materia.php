<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Materia extends Model
{
    /** @use HasFactory<\Database\Factories\MateriaFactory> */
    use HasFactory;

    public function materiasAbierta()
    {
        return $this->hasMany(MateriaAbierta::class, 'materia_id');
    }

    public function reticula(): BelongsTo{
        return $this->belongsTo(Reticula::class);
}


}
