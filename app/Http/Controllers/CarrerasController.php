<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarrerasController extends Controller
{
    public $val;

    public function __construct(){
         $this->val=[
            'idcarrera'=> ['required'],
            'nombrecarrera' =>['required','min:3'],
            'nombremediano' => ['required'],
            'nombrecorto' => ['required'],
            'depto_id' =>['required']

         ];
    }
    public function index()
    {
        $carreras = Carrera::paginate(5);
       return view("carreras/index",compact("carreras"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras = Carrera::paginate(5);
        $carrera = new Carrera;
        $accion = "C";
        $des ="";
        $txtbtn = "Guardar";
        return view('carreras.frm', compact("carreras","carrera","accion","txtbtn","des"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate($this->val);
        Carrera::create($val);
        return redirect()->route("carreras.index")->with("mensaje","Se inserto correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Carrera $carreras)
    {
        $carreras = Carrera::paginate(5);
        $accion = "D";
        $des = "disabled";
        $txtbtn = "Confirmar la eliminacion";
        return view('carreras.frm',compact('carreras','carrera','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrera $carrera)
    {
        $carrera = Carrera::paginate(5);
        $accion = "E";
        $txtbtn = "Actualizar";
        $des = "";
        return view('carreras.frm',compact('carreras','carrera','accion','txtbtn','des'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrera $carrera)
    {
        $val = $request->validate($this->val);
        //aqui se actualizaron los datos
        $carrera->update($val);
        return redirect()->route('carreras.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrera $carrera)
    {
        $carrera->delete();
        return redirect()->route('carreras.index');
    }
}
