<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Periodo extends Model
{
    /** @use HasFactory<\Database\Factories\PeriodoFactory> */
    use HasFactory;
    protected $fillable = ['idperiodo','periodo','desccorta','fechaini','fechafin'];


    public function MateriasAbierta():HasMany{
        return $this->hasMany(MateriaAbierta::class);
    }
    

    public function grupos21359()
    {
        return $this->hasMany(Grupo21359::class, 'periodo_id');
    }

}
