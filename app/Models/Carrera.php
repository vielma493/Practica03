<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carrera extends Model
{
    use HasFactory;
    protected $fillable = ['idcarrera','nombrecarrera','nombremediano','nombrecorto','depto_id'];

    public function alumnos():HasMany{
    return $this->hasMany(Alumno::class);

    }

    public function periodo():HasMany{
        return $this->hasMany(Periodo::class);
    
        }

    public function depto():BelongsTo{
        return $this->belongsTo(Depto::class);
    }

    public function reticulas():HasMany{
        return $this->hasMany(Reticula::class);
    
        }



    
}
