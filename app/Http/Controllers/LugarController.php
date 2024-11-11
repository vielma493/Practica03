<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\Request;

class LugarController extends Controller
{
    public $val;

    public function __construct(){
         $this->val=[
            'nombrelugar'=> ['required'],
            'nombrecorto' =>['required'],
            'edificio_id' =>['required']

         ];
    }
    public function index()
    {
        $lugars = Lugar::paginate(5);
       // return view("alumnos/index",['alumnos'=>$alumnos]);
       return view("lugars/index",compact("lugars"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lugars = Lugar::paginate(5);
        $lugar = new Lugar;
        $accion = "C";
        $des ="";
        $txtbtn = "Guardar";
        return view('lugars.frm', compact("lugars","lugar","accion","txtbtn","des"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate($this->val);
        Lugar::create($val);
        
        return redirect()->route("lugars.index")->with("mensaje","Se inserto correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Lugar $lugar)
    {
        $lugars = Lugar::paginate(5);
        $accion = "D";
        $des = "disabled";
        $txtbtn = "Confirmar la eliminacion";
        return view('lugars.frm',compact('lugars','lugar','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lugar $lugar)
    {
        $lugars = Lugar::paginate(5);
        $accion = "E";
        $txtbtn = "Actualizar";
        $des = "";
        return view('lugars.frm',compact('lugars','lugar','accion','txtbtn','des'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lugar $lugar)
    {
        $val = $request->validate($this->val);
           //aqui se actualizaron los datos
           $lugar->update($val);
           return redirect()->route('lugars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lugar $lugar)
    {
        $lugar->delete();
        return redirect()->route('lugars.index');
    }
}
