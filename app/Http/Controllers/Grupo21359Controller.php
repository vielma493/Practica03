<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use App\Models\Grupo21359;
use Illuminate\Http\Request;
use App\Models\MateriaAbierta;
use App\Models\Personal;

class Grupo21359Controller extends Controller
{
    public $val;

    public function __construct(){
         $this->val=[
            'grupo'=> ['required'],
            'descripcion' =>['required'],
            'max_alumnos' => ['required'],
            'periodo_id' => ['required'],
            'materia_id' => ['required'],
            'personal_id' => ['required']
         ];
    }
    public function index()
    {
        $grupos21359 = Grupo21359::with(['materiaAbierta.materia', 'personal', 'periodo'])->paginate(5);
      

        $periodos = Periodo::get();
        $personals = Personal::get();
        $materiaAbiertas = MateriaAbierta::with('materia')->get();

        return view('grupos21359.index21359', compact('grupos21359','materiaAbiertas','periodos','personals'));
    }

    public function create()
    {
        $grupos21359 = Grupo21359::paginate(5);
        $grupo21359 = new Grupo21359();
        $periodos = Periodo::get();
        $personals = Personal::get();
        $materiaAbiertas = MateriaAbierta::with('materia')->get();

        $accion = "C";
        $des ="";
        $txtbtn = "Guardar";
        return view('grupos21359.frm21359', compact("grupos21359","grupo21359",'periodos','materiaAbiertas','personals',"accion","txtbtn","des"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate($this->val);
        $grupo21359 = Grupo21359::create($val);
    
        // Redirige al formulario de edición con el grupo recién creado
        return redirect()->route("grupos21359.edit", $grupo21359->id)->with("mensaje", "Se insertó correctamente. Ahora puedes editar el grupo.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Grupo21359 $grupo21359)
    {
        $grupos21359 = Grupo21359::paginate(5);
        $periodos = Periodo::get();
        $personals = Personal::get();
        $materiaAbiertas = MateriaAbierta::with('materia')->get();

        $accion = "D";
        $des = "disabled";
        $txtbtn = "Confirmar la eliminacion";
        return view('grupos21359.frm21359',compact('grupos21359','grupo21359','periodos','personals','materiaAbiertas','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grupo21359 $grupo21359)
    {
        // Datos para el formulario de grupos21359
        $grupos21359 = Grupo21359::paginate(5);
        $periodos = Periodo::get();
        $personals = Personal::get();
        $materiaAbiertas = MateriaAbierta::with('materia')->get();
    
        // Datos para el formulario de grupoHorarios21359
        $grupoHorario21359 = new \App\Models\GrupoHorario21359(); // Modelo vacío o uno cargado si necesario
        $lugares = []; // Consulta para los lugares relacionados
    
        $accion = "E"; // Acción de edición
        $txtbtn = "Actualizar"; // Botón principal
        $des = ""; // Habilitar campos por defecto
    
        return view('grupos21359.frm21359', compact(
            'grupos21359',
            'grupo21359',
            'periodos',
            'materiaAbiertas',
            'personals',
            'accion',
            'txtbtn',
            'des',
            'grupoHorario21359',
            'lugares'
        ));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grupo21359 $grupo21359)
    {
        
        $val = $request->validate($this->val);

    // Actualiza los datos del grupo
    $grupo21359->update($val);

    // Redirige de nuevo al formulario de edición con un mensaje de éxito
    return redirect()->route("grupos21359.edit", $grupo21359->id)
        ->with("mensaje", "El grupo se actualizó correctamente y puedes seguir editando.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grupo21359 $grupo21359)
    {
        $grupo21359->delete();

        return redirect()->route('grupos21359.index');
    }
}
