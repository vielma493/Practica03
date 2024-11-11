<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Puesto extends Model
{
    use HasFactory;

    protected $fillable = ['idpuesto','nombrePuesto','tipo'];

    public function personal(): HasMany{
        return $this->hasMany(Personal::class);
    }
}
