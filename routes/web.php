<?php

use App\Models\Materia;
use App\Models\Carreras;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeptoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PlazasController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarrerasController;
use App\Http\Controllers\ReticulaController;

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

Route::get('/deptos.index', [DeptoController::class, 'index'])->name('deptos.index');
Route::get('/deptos.create', [DeptoController::class, 'create'])->name('deptos.create');
Route::get('/deptos.edit/{depto}', [DeptoController::class, 'edit'])->name('deptos.edit');
Route::get('/deptos.show/{depto}', [DeptoController::class, 'show'])->name('deptos.show');
Route::post('/deptos.destroy/{depto}', [DeptoController::class, 'destroy'])->name('deptos.destroy');
Route::Post('/deptos.store', [DeptoController::class, 'store'])->name('deptos.store');
Route::post('/deptos.update/{depto}', [DeptoController::class, 'update'])->name('deptos.update');


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
