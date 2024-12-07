<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\Request;
use App\Models\GrupoHorario21359;

class GrupoHorario21359Controller extends Controller
{
    public $val;


    public function __construct(){
        $this->val=[
           'grupo21359_id'=> ['required'],
           'lugar_id' =>['required'],
           'dia' => ['required'],
           'hora' => ['required'],
        ];
   }
    public function index()
    {
        $grupoHorarios21359 = GrupoHorario21359::paginate(5);
        $lugares = Lugar::with('edificio')->get();

        // Enviar a la vista
        return view('grupoHorarios21359.index21359', compact('grupoHorarios21359','lugares'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grupoHorarios21359 = GrupoHorario21359::paginate(5);
        $grupoHorario21359 = new GrupoHorario21359();
        $lugares = Lugar::get();

        $accion = "C";
        $des ="";
        $txtbtn = "Guardar";
        return view('grupoHorarios21359.frm21359', compact("grupoHorarios21359","grupoHorario21359",'lugares',"accion","txtbtn","des"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate($this->val);
        GrupoHorario21359::create($val);
        
        return redirect()->route("grupoHorarios21359.index")->with("mensaje","Se inserto correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(GrupoHorario21359 $grupoHorario21359)
    {
        $grupoHorarios21359 = GrupoHorario21359::paginate(5);
        $lugares = Lugar::get();

        $accion = "D";
        $des = "disabled";
        $txtbtn = "Confirmar la eliminacion";
        return view('grupoHorarios21359.frm21359',compact('grupoHorarios21359','grupoHorario21359','lugares','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GrupoHorario21359 $grupoHorario21359)
    {
        $grupoHorarios21359 = GrupoHorario21359::paginate(5);
        $lugares = Lugar::get();

        $accion = "E";
        $txtbtn = "Actualizar";
        $des = "";
        return view('grupoHorarios21359.frm21359',compact('grupoHorarios21359','grupoHorario21359','lugares','accion','txtbtn','des'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GrupoHorario21359 $grupoHorario21359)
    {
        $val = $request->validate($this->val);
           //aqui se actualizaron los datos
           $grupoHorario21359->update($val);
           return redirect()->route('grupoHorarios21359.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GrupoHorario21359 $grupoHorario21359)
    {
        $grupoHorario21359->delete();

        return redirect()->route('grupoHorarios21359.index');
    }
}
