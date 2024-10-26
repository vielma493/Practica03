<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    public $val;

    public function __construct(){
         $this->val=[
            'idperiodo'=> ['required'],
            'periodo' =>['required'],
            'desccorta' => ['required'],
            'fechaini' => ['required'],
            'fechafin' => ['required']

         ];
    }
    public function index()
    {
        $periodos = Periodo::paginate(5);
        // return view("alumnos/index",['alumnos'=>$alumnos]);
        return view("periodos/index",compact("periodos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $periodos = Periodo::paginate(5);
        $periodo = new Periodo;
        $accion = "C";
        $des ="";
        $txtbtn = "Guardar";
        return view('periodos.frm', compact("periodos","periodo","accion","txtbtn","des"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate($this->val);
        Periodo::create($val);
        
        return redirect()->route("periodos.index")->with("mensaje","Se inserto correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Periodo $periodo)
    {
        $periodos = Periodo::paginate(5);
        $accion = "D";
        $des = "disabled";
        $txtbtn = "Confirmar la eliminacion";
        return view('periodos.frm',compact('periodos','periodo','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periodo $periodo)
    {
        $periodos = Periodo::paginate(5);
        $accion = "E";
        $txtbtn = "Actualizar";
        $des = "";
        return view('periodos.frm',compact('periodos','periodo','accion','txtbtn','des'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periodo $periodo)
    {
        $val = $request->validate($this->val);
        //aqui se actualizaron los datos
        $periodo->update($val);
        return redirect()->route('periodos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periodo $periodo)
    {
        $periodo->delete();
        return redirect()->route('periodos.index');
    }
}
