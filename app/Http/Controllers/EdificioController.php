<?php

namespace App\Http\Controllers;

use App\Models\Edificio;
use Illuminate\Http\Request;

class EdificioController extends Controller
{
    public $val;

    public function __construct(){
         $this->val=[
            'nombreedificio'=> ['required'],
            'nombrecorto' =>['required']
         ];
    }
    public function index()
    {
        $edificios = Edificio::paginate(5);
       // return view("alumnos/index",['alumnos'=>$alumnos]);
       return view("edificios/index",compact("edificios"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edificios = Edificio::paginate(5);
        $edificio = new Edificio;
        $accion = "C";
        $des ="";
        $txtbtn = "Guardar";
        return view('edificios.frm', compact("edificios","edificio","accion","txtbtn","des"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate($this->val);
        Edificio::create($val);
        
        return redirect()->route("edificios.index")->with("mensaje","Se inserto correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Edificio $edificio)
    {
        $edificios = Edificio::paginate(5);
        $accion = "D";
        $des = "disabled";
        $txtbtn = "Confirmar la eliminacion";
        return view('edificios.frm',compact('edificios','edificio','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Edificio $edificio)
    {
        $edificios = Edificio::paginate(5);
        $accion = "E";
        $txtbtn = "Actualizar";
        $des = "";
        return view('edificios.frm',compact('edificios','edificio','accion','txtbtn','des'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Edificio $edificio)
    {
        $val = $request->validate($this->val);
           //aqui se actualizaron los datos
           $edificio->update($val);
           return redirect()->route('edificios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Edificio $edificio)
    {
        $edificio->delete();
        return redirect()->route('edificios.index');
    }
}
