<?php

namespace App\Http\Controllers;

use App\Models\PersonalPlaza;
use Illuminate\Http\Request;

class PersonalPlazaController extends Controller
{
    public $val;

    public function __construct(){
         $this->val=[
            'tiponombramiento'=> ['required'],
            'puesto_id' =>['required'],
            'personal_id' => ['required']
         ];
    }
    public function index()
    {
        $personal_plazas = PersonalPlaza::paginate(5);
        return view("personal_plazas/index",compact("personal_plazas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personal_plazas = PersonalPlaza::paginate(5);
        $personal_plaza = new PersonalPlaza();
        $accion = "C";
        $des ="";
        $txtbtn = "Guardar";
        return view('personal_plazas.frm', compact("personal_plazas","personal_plaza","accion","txtbtn","des"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate($this->val);
        PersonalPlaza::create($val);
        
        return redirect()->route("personal_plaza.index")->with("mensaje","Se inserto correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(PersonalPlaza $personalPlaza)
    {
        $personal_plazas = PersonalPlaza::paginate(5);
        $accion = "D";
        $des = "disabled";
        $txtbtn = "Confirmar la eliminacion";
        return view('personal_plazas.frm',compact('personal_plazas','personal_plaza','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PersonalPlaza $personalPlaza)
    {
        $personal_plazas = PersonalPlaza::paginate(5);
        $accion = "E";
        $txtbtn = "Actualizar";
        $des = "";
        return view('personal_plazas.frm',compact('personal_plazas','personal_plaza','accion','txtbtn','des'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PersonalPlaza $personal_plaza)
    {
        $val = $request->validate($this->val);
           //aqui se actualizaron los datos
           $personal_plaza->update($val);
           return redirect()->route('personal_plazas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonalPlaza $personal_plaza)
    {
        $personal_plaza->delete();
        return redirect()->route('personal_plazas.index');
    }
}
