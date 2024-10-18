<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PlazasController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\ProfileController;

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


Route::get('/plazas.index', [PlazasController::class, 'index'])->name('plazas.index');
Route::get('/plazas.create', [PlazasController::class, 'create'])->name('plazas.create');
Route::get('/plazas.edit/{plaza}', [PlazasController::class, 'edit'])->name('plazas.edit');
Route::get('/plazas.show/{plaza}', [PlazasController::class, 'show'])->name('plazas.show');
Route::post('/plazas.destroy/{plaza}', [PlazasController::class, 'destroy'])->name('plazas.destroy');
Route::Post('/plazas.store', [PlazasController::class, 'store'])->name('plazas.store');
Route::post('/plazas.update/{plaza}', [PlazasController::class, 'update'])->name('plazas.update');


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
