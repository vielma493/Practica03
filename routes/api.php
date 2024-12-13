<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsonController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('periodos',[JsonController::class, 'periodos']);

Route::get('carreras',[JsonController::class, 'carreras']);

Route::get('lugars',[JsonController::class, 'lugars']);


Route::get('personals',[JsonController::class, 'personals']);


Route::get('semestres',[JsonController::class, 'semestres']);

Route::get('deptos',[JsonController::class, 'deptos']);

Route::get('edificios',[JsonController::class, 'edificios']);

Route::get('materiasa',[JsonController::class, 'materiasa']);


Route::get('alumnos',[JsonController::class, 'alumnos']);

Route::post('/asignar-horarios', [JsonController::class, 'asignarHorarios']);
Route::delete('/asignar-horarios', [JsonController::class, 'eliminarHorario']);


Route::get('/grupos', [JsonController::class, 'grupos']);
Route::get('/grupo_horarios', [JsonController::class, 'grupo_horarios']);



Route::post('/grupos', [JsonController::class, 'insertarGrupo']);
