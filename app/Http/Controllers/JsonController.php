<?php

namespace App\Http\Controllers;

use App\Models\Depto;
use App\Models\Grupo;
use App\Models\Alumno;
use App\Models\Carrera;
use App\Models\Materia;
use App\Models\Periodo;
use App\Models\Edificio;
use App\Models\Grupo_Horario;
use App\Models\Lugar;
use App\Models\Personal;
use Illuminate\Http\Request;
use App\Models\MateriaAbierta;
use Illuminate\Support\Facades\DB;

class JsonController extends Controller
{
    public function periodos(){
        $periodos = Periodo::get();
           return $periodos;
    }

    public function personals(){
        $personals = Personal::get();
           return $personals;
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

    public function grupos(){
        $grupos = Grupo::get();
           return $grupos;
    }

    public function grupo_horarios(){
        $grupoHorarios = Grupo_Horario::get();
           return $grupoHorarios;
    }

    public function lugars(){
        $lugars = Lugar::get();
           return $lugars;
    }



    public function materiasa(){
        $materiasa = MateriaAbierta::with('materia.reticula.carrera')
        
        ->get();

        //$materias = MateriaAbierta::has('materia.nivel','1')->get();
           return $materiasa;
    }



    public function insertarGrupo(Request $request)
{
    // Validación de los datos
    $validatedData = $request->validate([
        'grupo' => 'required|string',
        'descripcion' => 'required|string|min:5',
        'max_alumnos' => 'required|string|min:1',
    ]);

    // Verificar si ya existe un grupo con el mismo nombre
    $grupoExistente = Grupo::where('grupo', $validatedData['grupo'])->first();

    try {
        if ($grupoExistente) {
            // Si el grupo ya existe, actualizamos los datos
            $grupoExistente->update($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Grupo ya existente, actualizado correctamente',
                'grupo' => $grupoExistente
            ], 200); // Código HTTP 200 para éxito en actualización
        } else {
            // Si no existe, creamos el grupo
            $grupo = Grupo::create($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Grupo creado exitosamente',
                'grupo' => $grupo
            ], 201); // Código HTTP 201 para éxito en creación
        }
    } catch (\Exception $e) {
        // Error al procesar el grupo
        return response()->json([
            'success' => false,
            'message' => 'Error al procesar el grupo',
            'error' => $e->getMessage()
        ], 500); // Código HTTP 500 para errores internos
    }
}

public function asignarHorarios(Request $request)
{

    $request->merge(['grupo_id' => $request->input('grupo')]);


    $validated = $request->validate([
        'grupo_id' => 'required|exists:grupos,id',
        'periodo_id' => 'required|exists:periodos,id',
        'materia_id' => 'required|exists:materias,id',
        'personal_id' => 'required|exists:personals,id',
        'lugar_id' => 'required|exists:lugars,id',
        'dia' => 'required|string',
        'hora' => 'required|string',
    ]);

    DB::table('grupo_horarios')->insert([
        'grupo_id' => $validated['grupo_id'],
        'periodo_id' => $validated['periodo_id'],
        'materia_id' => $validated['materia_id'],
        'personal_id' => $validated['personal_id'],
        'lugar_id' => $validated['lugar_id'],
        'dia' => $validated['dia'],
        'hora' => $validated['hora'],
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return response()->json(['message' => 'Horario asignado correctamente'], 200);
}


public function eliminarHorario(Request $request)
{
    $validated = $request->validate([
        'grupo_id' => 'required|exists:grupos,id',
        'periodo_id' => 'required|exists:periodos,id',
        'materia_id' => 'required|exists:materias,id',
        'personal_id' => 'required|exists:personals,id',
        'lugar_id' => 'required|exists:lugars,id',
        'dia' => 'required|string',
        'hora' => 'required|string',
    ]);

    DB::table('grupo_horarios')
        ->where([
            'grupo_id' => $validated['grupo_id'],
            'periodo_id' => $validated['periodo_id'],
            'materia_id' => $validated['materia_id'],
            'personal_id' => $validated['personal_id'],
            'lugar_id' => $validated['lugar_id'],
            'dia' => $validated['dia'],
            'hora' => $validated['hora'],
        ])
        ->delete();

    return response()->json(['message' => 'Horario eliminado correctamente'], 200);
}




}
