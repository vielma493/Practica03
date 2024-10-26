<?php

namespace App\Http\Controllers;

use App\Models\Reticula;
use Illuminate\Http\Request;

class ReticulaController extends Controller
{
    public $val;

    public function __construct(){
         $this->val=[
            'idreticula'=> ['required'],
            'descripcion' =>['required'],
            'fechaenvigor' => ['required'],
            'carrera_id' => ['required']

         ];
    }
    public function index()
    {
        $reticulas = Reticula::paginate(5);
       return view("reticulas/index",compact("reticulas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reticulas = Reticula::paginate(5);
        $reticula = new Reticula;
        $accion = "C";
        $des ="";
        $txtbtn = "Guardar";
        return view('reticulas.frm', compact("reticulas","reticula","accion","txtbtn","des"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate($this->val);
        Reticula::create($val);
        return redirect()->route("reticulas.index")->with("mensaje","Se inserto correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Reticula $reticula)
    {
        $reticulas = Reticula::paginate(5);
        $accion = "D";
        $des = "disabled";
        $txtbtn = "Confirmar la eliminacion";
        return view('reticulas.frm',compact('reticulas','reticula','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reticula $reticula)
    {
        $reticula = Reticula::paginate(5);
        $accion = "E";
        $txtbtn = "Actualizar";
        $des = "";
        return view('reticulas.frm',compact('reticulas','reticula','accion','txtbtn','des'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reticula $reticula)
    {
        $val = $request->validate($this->val);
        //aqui se actualizaron los datos
        $reticula->update($val);
        return redirect()->route('carreras.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reticula $reticula)
    {
        $reticula->delete();
        return redirect()->route('reticulas.index');
    }
}
