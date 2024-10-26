<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    public $val;

    public function __construct(){
         $this->val=[
            'idpuesto'=> ['required'],
            'nombrePuesto' =>['required','min:3'],
            'tipo' => ['required']
         ];
    }
    public function index()
    {
        $puestos = Puesto::paginate(5);
       // return view("alumnos/index",['alumnos'=>$alumnos]);
       return view("puestos/index",compact("puestos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $puestos = Puesto::paginate(5);
        $puesto = new Puesto;
        $accion = "C";
        $des ="";
        $txtbtn = "Guardar";
        return view('puestos.frm', compact("puestos","puesto","accion","txtbtn","des"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //aun no grabamos
        $val = $request->validate($this->val);
        Puesto::create($val);
        
        return redirect()->route("puestos.index")->with("mensaje","Se inserto correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Puesto $puesto)
    {
        $puestos = Puesto::paginate(5);
        $accion = "D";
        $des = "disabled";
        $txtbtn = "Confirmar la eliminacion";
        return view('puestos.frm',compact('puestos','puesto','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Puesto $puesto)
    {
        $puestos = Puesto::paginate(5);
        $accion = "E";
        $txtbtn = "Actualizar";
        $des = "";
        return view('puestos.frm',compact('puestos','puesto','accion','txtbtn','des'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Puesto $puesto)
    {
           //aun no grabamos
           $val = $request->validate($this->val);
           //aqui se actualizaron los datos
           $puesto->update($val);
           return redirect()->route('puestos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Puesto $puesto)
    {
        $puesto->delete();
        return redirect()->route('puestos.index');
    }
}
