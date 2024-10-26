<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public $val;

    public function __construct(){
         $this->val=[
            'idmateria'=> ['required'],
            'nombremateria' =>['required'],
            'nivel' => ['required'],
            'nombremediano' => ['required'],
            'nombrecorto' => ['required'],
            'modalidad' => ['required'],
            'reticula_id' => ['required']
         ];
    }
    public function index()
    {
        $materias = Materia::paginate(5);
       // return view("alumnos/index",['alumnos'=>$alumnos]);
       return view("materias/index",compact("materias"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $materias = Materia::paginate(5);
        $materia = new Materia;
        $accion = "C";
        $des ="";
        $txtbtn = "Guardar";
        return view('materias.frm', compact("materias","materia","accion","txtbtn","des"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate($this->val);
        Materia::create($val);
        
        return redirect()->route("materias.index")->with("mensaje","Se inserto correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Materia $materia)
    {
        $materias = Materia::paginate(5);
        $accion = "D";
        $des = "disabled";
        $txtbtn = "Confirmar la eliminacion";
        return view('materias.frm',compact('materias','materia','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materia $materia)
    {
        $materias = Materia::paginate(5);
        $accion = "E";
        $txtbtn = "Actualizar";
        $des = "";
        return view('materias.frm',compact('materias','materia','accion','txtbtn','des'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materia $materia)
    {
        $val = $request->validate($this->val);
        //aqui se actualizaron los datos
        $materia->update($val);
        return redirect()->route('materias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();
        return redirect()->route('materias.index');
    }
}
