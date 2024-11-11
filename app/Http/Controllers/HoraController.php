<?php

namespace App\Http\Controllers;

use App\Models\Hora;
use Illuminate\Http\Request;

class HoraController extends Controller
{
    public $val;

    public function __construct(){
         $this->val=[
            'hora_ini'=> ['required'],
            'hora_fin' =>['required']
         ];
    }
    public function index()
    {
        $horas = Hora::paginate(5);
       // return view("alumnos/index",['alumnos'=>$alumnos]);
       return view("horas/index",compact("horas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $horas = Hora::paginate(5);
        $hora = new Hora;
        $accion = "C";
        $des ="";
        $txtbtn = "Guardar";
        return view('horas.frm', compact("horas","hora","accion","txtbtn","des"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate($this->val);
        Hora::create($val);
        
        return redirect()->route("horas.index")->with("mensaje","Se inserto correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Hora $hora)
    {
        $horas = Hora::paginate(5);
        $accion = "D";
        $des = "disabled";
        $txtbtn = "Confirmar la eliminacion";
        return view('horas.frm',compact('horas','hora','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hora $hora)
    {
        $horas = Hora::paginate(5);
        $accion = "E";
        $txtbtn = "Actualizar";
        $des = "";
        return view('horas.frm',compact('horas','hora','accion','txtbtn','des'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hora $hora)
    {
        $val = $request->validate($this->val);
           //aqui se actualizaron los datos
           $hora->update($val);
           return redirect()->route('horas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hora $hora)
    {
        $hora->delete();
        return redirect()->route('horas.index');
    }
}
