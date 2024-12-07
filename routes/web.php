<?php

use App\Models\Materia;
use App\Models\Periodo;
use App\Models\Carreras;
use App\Models\Grupo21359;
use App\Models\PersonalPlaza;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HoraController;
use App\Http\Controllers\DeptoController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\LugarController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PlazasController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TutoriaController;
use App\Http\Controllers\CarrerasController;
use App\Http\Controllers\EdificioController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ReticulaController;
use App\Http\Controllers\Grupo21359Controller;
use App\Http\Controllers\PersonalPlazaController;
use App\Http\Controllers\MateriaAbiertaController;
use App\Http\Controllers\GrupoHorario21359Controller;

Route::get('/alumnos.index', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/alumnos.create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::get('/alumnos.edit/{alumno}', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::get('/alumnos.show/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');
Route::post('/alumnos.destroy/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
Route::Post('/alumnos.store', [AlumnoController::class, 'store'])->name('alumnos.store');
Route::post('/alumnos.update/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');


Route::get('/puestos.index', [PuestoController::class, 'index'])->name('puestos.index');
Route::get('/puestos.create', [PuestoController::class, 'create'])->name('puestos.create');
Route::get('/puestos.edit/{puesto}', [PuestoController::class, 'edit'])->name('puestos.edit');
Route::get('/puestos.show/{puesto}', [PuestoController::class, 'show'])->name('puestos.show');
Route::post('/puestos.destroy/{puesto}', [PuestoController::class, 'destroy'])->name('puestos.destroy');
Route::Post('/puestos.store', [PuestoController::class, 'store'])->name('puestos.store');
Route::post('/puestos.update/{puesto}', [PuestoController::class, 'update'])->name('puestos.update');

Route::get('/materiasa.index', [MateriaAbiertaController::class, 'index'])->name('materiasa.index');
Route::post('/materiasa.store', [MateriaAbiertaController::class, 'store'])->name('materiasa.store');


Route::get('/deptos.index', [DeptoController::class, 'index'])->name('deptos.index');
Route::get('/deptos.create', [DeptoController::class, 'create'])->name('deptos.create');
Route::get('/deptos.edit/{depto}', [DeptoController::class, 'edit'])->name('deptos.edit');
Route::get('/deptos.show/{depto}', [DeptoController::class, 'show'])->name('deptos.show');
Route::post('/deptos.destroy/{depto}', [DeptoController::class, 'destroy'])->name('deptos.destroy');
Route::Post('/deptos.store', [DeptoController::class, 'store'])->name('deptos.store');
Route::post('/deptos.update/{depto}', [DeptoController::class, 'update'])->name('deptos.update');

Route::get('/edificios.index', [EdificioController::class, 'index'])->name('edificios.index');
Route::get('/edificios.create', [EdificioController::class, 'create'])->name('edificios.create');
Route::get('/edificios.edit/{edificio}', [EdificioController::class, 'edit'])->name('edificios.edit');
Route::get('/edificios.show/{edificio}', [EdificioController::class, 'show'])->name('edificios.show');
Route::post('/edificios.destroy/{edificio}', [EdificioController::class, 'destroy'])->name('edificios.destroy');
Route::Post('/edificios.store', [EdificioController::class, 'store'])->name('edificios.store');
Route::post('/edificios.update/{edificio}', [EdificioController::class, 'update'])->name('edificios.update');

Route::get('/lugars.index', [LugarController::class, 'index'])->name('lugars.index');
Route::get('/lugars.create', [LugarController::class, 'create'])->name('lugars.create');
Route::get('/lugars.edit/{lugar}', [LugarController::class, 'edit'])->name('lugars.edit');
Route::get('/lugars.show/{lugar}', [LugarController::class, 'show'])->name('lugars.show');
Route::post('/lugars.destroy/{lugar}', [LugarController::class, 'destroy'])->name('lugars.destroy');
Route::Post('/lugars.store', [LugarController::class, 'store'])->name('lugars.store');
Route::post('/lugars.update/{lugar}', [LugarController::class, 'update'])->name('lugars.update');

Route::get('/horas.index', [HoraController::class, 'index'])->name('horas.index');
Route::get('/horas.create', [HoraController::class, 'create'])->name('horas.create');
Route::get('/horas.edit/{hora}', [HoraController::class, 'edit'])->name('horas.edit');
Route::get('/horas.show/{hora}', [HoraController::class, 'show'])->name('horas.show');
Route::post('/horas.destroy/{hora}', [HoraController::class, 'destroy'])->name('horas.destroy');
Route::Post('/horas.store', [HoraController::class, 'store'])->name('horas.store');
Route::post('/horas.update/{hora}', [HoraController::class, 'update'])->name('horas.update');


Route::get('/personals.index', [PersonalController::class, 'index'])->name('personals.index');
Route::get('/personals.create', [PersonalController::class, 'create'])->name('personals.create');
Route::get('/personals.edit/{personal}', [PersonalController::class, 'edit'])->name('personals.edit');
Route::get('/personals.show/{personal}', [PersonalController::class, 'show'])->name('personals.show');
Route::post('/personals.destroy/{personal}', [PersonalController::class, 'destroy'])->name('personals.destroy');
Route::Post('/personals.store', [PersonalController::class, 'store'])->name('personals.store');
Route::post('/personals.update/{personal}', [PersonalController::class, 'update'])->name('personals.update');

Route::get('/personal_plazas.index', [PersonalPlazaController::class, 'index'])->name('personal_plazas.index');
Route::get('/personal_plazas.create', [PersonalPlazaController::class, 'create'])->name('personal_plazas.create');
Route::get('/personal_plazas.edit/{personal_plaza}', [PersonalPlazaController::class, 'edit'])->name('personal_plazas.edit');
Route::get('/personal_plazas.show/{personal_plaza}', [PersonalPlazaController::class, 'show'])->name('personal_plazas.show');
Route::post('/personal_plazas.destroy/{personal_plaza}', [PersonalPlazaController::class, 'destroy'])->name('personal_plazas.destroy');
Route::Post('/personal_plazas.store', [PersonalPlazaController::class, 'store'])->name('personal_plazas.store');
Route::post('/personal_plazas.update/{personal_plaza}', [PersonalPlazaController::class, 'update'])->name('personal_plazas.update');

Route::get('/materias.index', [MateriaController::class, 'index'])->name('materias.index');
Route::get('/materias.create', [MateriaController::class, 'create'])->name('materias.create');
Route::get('/materias.edit/{materia}', [MateriaController::class, 'edit'])->name('materias.edit');
Route::get('/materias.show/{materia}', [MateriaController::class, 'show'])->name('materias.show');
Route::post('/materias.destroy/{materia}', [MateriaController::class, 'destroy'])->name('materias.destroy');
Route::Post('/materias.store', [MateriaController::class, 'store'])->name('materias.store');
Route::post('/materias.update/{materia}', [MateriaController::class, 'update'])->name('materias.update');


Route::get('/reticulas.index', [ReticulaController::class, 'index'])->name('reticulas.index');
Route::get('/reticulas.create', [ReticulaController::class, 'create'])->name('reticulas.create');
Route::get('/reticulas.edit/{reticula}', [ReticulaController::class, 'edit'])->name('reticulas.edit');
Route::get('/reticulas.show/{reticula}', [ReticulaController::class, 'show'])->name('reticulas.show');
Route::post('/reticulas.destroy/{reticula}', [ReticulaController::class, 'destroy'])->name('reticulas.destroy');
Route::Post('/reticulas.store', [ReticulaController::class, 'store'])->name('reticulas.store');
Route::post('/reticulas.update/{reticula}', [ReticulaController::class, 'update'])->name('reticulas.update');

Route::get('/grupos.index', [GrupoController::class, 'index'])->name('grupos.index');


Route::get('/grupos21359.index', [Grupo21359Controller::class, 'index'])->name('grupos21359.index');
Route::get('/grupos21359.create', [Grupo21359Controller::class, 'create'])->name('grupos21359.create');
Route::get('/grupos21359.edit/{grupo21359}', [Grupo21359Controller::class, 'edit'])->name('grupos21359.edit');
Route::get('/grupos21359.show/{grupo21359}', [Grupo21359Controller::class, 'show'])->name('grupos21359.show');
Route::post('/grupos21359.destroy/{grupo21359}', [Grupo21359Controller::class, 'destroy'])->name('grupos21359.destroy');
Route::Post('/grupos21359.store', [Grupo21359Controller::class, 'store'])->name('grupos21359.store');
Route::post('/grupos21359.update/{grupo21359}', [Grupo21359Controller::class, 'update'])->name('grupos21359.update');


Route::get('/grupos.index', [GrupoController::class, 'index'])->name('grupos.index');


Route::middleware('auth')->group(function () {
    Route::get('/tutorias', action: [TutoriaController::class, 'index'])->name('tutorias');

    Route::get('/tutorias.index', [TutoriaController::class, 'index'])->name('tutorias.index');
    Route::get('/tutorias.create', [TutoriaController::class, 'create'])->name('tutorias.create');
    Route::post('/tutorias.store', [TutoriaController::class, 'store'])->name('tutorias.store');
    Route::get('/tutorias.show/{tutoria}', [TutoriaController::class, 'show'])->name('tutorias.show');
    Route::get('/tutorias.edit/{tutoria}', [TutoriaController::class, 'edit'])->name('tutorias.edit');
    Route::post('/tutorias.update/{tutoria}', [TutoriaController::class, 'update'])->name('tutorias.update');
    Route::get('/tutorias/eliminar/{tutoria}', [TutoriaController::class, 'eliminar'])->name('tutorias.eliminar');
    Route::delete('/tutorias/{tutoria}', [TutoriaController::class, 'destroy'])->name('tutorias.destroy');
});
Route::get('/rendimientos', action: [TutoriaController::class, 'index'])->name('rendimientos');


Route::get('/grupoHorarios21359.index', [GrupoHorario21359Controller::class, 'index'])->name('grupoHorarios21359.index');
Route::get('/grupoHorarios21359.create', [GrupoHorario21359Controller::class, 'create'])->name('grupoHorarios21359.create');
Route::get('/grupoHorarios21359.edit/{grupoHorario21359}', [GrupoHorario21359Controller::class, 'edit'])->name('grupoHorarios21359.edit');
Route::get('/grupoHorarios21359.show/{grupoHorario21359}', [GrupoHorario21359Controller::class, 'show'])->name('grupoHorarios21359.show');
Route::post('/grupoHorarios21359.destroy/{grupoHorario21359}', [GrupoHorario21359Controller::class, 'destroy'])->name('grupoHorarios21359.destroy');
Route::Post('/grupoHorarios21359.store', [GrupoHorario21359Controller::class, 'store'])->name('grupoHorarios21359.store');
Route::post('/grupoHorarios21359.update/{grupoHorario21359}', [GrupoHorario21359Controller::class, 'update'])->name('grupoHorarios21359.update');


Route::get('/periodos.index', [PeriodoController::class, 'index'])->name('periodos.index');
Route::get('/periodos.create', [PeriodoController::class, 'create'])->name('periodos.create');
Route::get('/periodos.edit/{periodo}', [PeriodoController::class, 'edit'])->name('periodos.edit');
Route::get('/periodos.show/{periodo}', [PeriodoController::class, 'show'])->name('periodos.show');
Route::post('/periodos.destroy/{periodo}', [PeriodoController::class, 'destroy'])->name('periodos.destroy');
Route::Post('/periodos.store', [PeriodoController::class, 'store'])->name('periodos.store');
Route::post('/periodos.update/{periodo}', [PeriodoController::class, 'update'])->name('periodos.update');


Route::get('/plazas.index', [PlazasController::class, 'index'])->name('plazas.index');
Route::get('/plazas.create', [PlazasController::class, 'create'])->name('plazas.create');
Route::get('/plazas.edit/{plaza}', [PlazasController::class, 'edit'])->name('plazas.edit');
Route::get('/plazas.show/{plaza}', [PlazasController::class, 'show'])->name('plazas.show');
Route::post('/plazas.destroy/{plaza}', [PlazasController::class, 'destroy'])->name('plazas.destroy');
Route::Post('/plazas.store', [PlazasController::class, 'store'])->name('plazas.store');
Route::post('/plazas.update/{plaza}', [PlazasController::class, 'update'])->name('plazas.update');


Route::get('/carreras.index', [CarrerasController::class, 'index'])->name('carreras.index');
Route::get('/carreras.create', [CarrerasController::class, 'create'])->name('carreras.create');
Route::get('/carreras.edit/{carrera}', [CarrerasController::class, 'edit'])->name('carreras.edit');
Route::get('/carreras.show/{carrera}', [CarrerasController::class, 'show'])->name('carreras.show');
Route::post('/carreras.destroy/{carrera}', [CarrerasController::class, 'destroy'])->name('carreras.destroy');
Route::Post('/carreras.store', [CarrerasController::class, 'store'])->name('carreras.store');
Route::post('/carreras.update/{carrera}', [CarrerasController::class, 'update'])->name('carreras.update');



Route::get('/', function () {
    return view('inicio');
});

Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/menu1', function () {
    return view('menu1');
});

Route::get('/menu2', function () {
    return view('menu2');
})->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
