<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public $val;

    public function __construct(){
         $this->val=[
            'RFC'=> ['required'],
            'nombres' =>['required'],
            'apellidop' => ['required'],
            'apellidom' => ['required'],
            'lictit' => ['required'],
            'esptit' => ['required'],
            'maetit' => ['required'],
            'doctit' => ['required'],
            'fechaingsep' => ['required'],
            'fechaingins' => ['required'],
            'depto_id' => ['required'],
            'puesto_id' => ['required'],




         ];
    }
    public function index()
    {
        $personals = Personal::paginate(5);
       return view("personals/index",compact("personals"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personals = Personal::paginate(5);
        $personal = new Personal;
        $accion = "C";
        $des ="";
        $txtbtn = "Guardar";
        return view('personals.frm', compact("personals","personal","accion","txtbtn","des"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate($this->val);
        Personal::create($val);
        
        return redirect()->route("personals.index")->with("mensaje","Se inserto correctamente");
    }

   
    public function show(Personal $personal)
    {
        $personals = Personal::paginate(5);
        $accion = "D";
        $des = "disabled";
        $txtbtn = "Confirmar la eliminacion";
        return view('personals.frm',compact('personals','personal','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personal $personal)
    {
        $personals = Personal::paginate(5);
        $accion = "E";
        $txtbtn = "Actualizar";
        $des = "";
        return view('personals.frm',compact('personals','personal','accion','txtbtn','des'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personal $personal)
    {
        $val = $request->validate($this->val);
        //aqui se actualizaron los datos
        $personal->update($val);
        return redirect()->route('personals.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personal $personal)
    {
        $personal->delete();
        return redirect()->route('personals.index');
    }
}
