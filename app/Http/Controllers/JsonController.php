<?php

namespace App\Http\Controllers;

use App\Models\Depto;
use App\Models\Alumno;
use App\Models\Carrera;
use App\Models\Materia;
use App\Models\Periodo;
use App\Models\Edificio;
use Illuminate\Http\Request;
use App\Models\MateriaAbierta;
use Illuminate\Support\Facades\DB;

class JsonController extends Controller
{
    public function periodos(){
        $periodos = Periodo::get();
           return $periodos;
    }
    public function semestres(){
        $semestres = Materia::get();
        $semestres = DB::table('materias')
            ->select('nivel')
            ->groupBy('nivel')
            ->orderBy('nivel')
            ->get();
           return $semestres;
    }


    public function carreras(){
        $carreras = Carrera::get();
           return $carreras;
    }

    public function deptos(){
        $deptos = Depto::get();
           return $deptos;
    }

    public function alumnos(){
        $alumnos = Alumno::get();
           return $alumnos;
    }


    public function edificios(){
        $edificios = Edificio::get();
           return $edificios;
    }


    public function materiasa(string $semestre){
        $materiasa = MateriaAbierta::with('materia.reticula.carrera')
        ->whereHas('materia',function($query) use($semestre){
            $query->where('nivel',$semestre);
        })
        ->get();

        //$materias = MateriaAbierta::has('materia.nivel','1')->get();
           return $materiasa;
    }
}
