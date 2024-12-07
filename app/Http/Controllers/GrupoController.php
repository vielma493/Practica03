<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\Carrera;
use App\Models\Materia;
use App\Models\Periodo;
use Illuminate\Http\Request;
use App\Models\MateriaAbierta;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $nivel = $request->input('nivel'); // Obtén el semestre seleccionado
        $materias = [];

        if ($nivel) {
            $materias = MateriaAbierta::join('materias', 'materias.id', '=', 'materia_abiertas.materia_id')
                ->where('materias.nivel', $nivel)
                ->select('materias.id', 'materias.nombremateria')
                ->get();
        }


        $grupos = Grupo::get();
        $periodos = Periodo::get();
        $carreras = Carrera::get();


       // return view("alumnos/index",['alumnos'=>$alumnos]);
       return view("grupos.index",compact("grupos","periodos","carreras",'materias', 'nivel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Grupo $grupo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grupo $grupo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grupo $grupo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grupo $grupo)
    {
        //
    }
}
