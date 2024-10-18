<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plazas extends Model
{
    use HasFactory;

    protected $fillable = ['idplaza','nombrePlaza'];

}
