<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\Historial_ParticularController;
use App\Http\Controllers\Historia_PreviaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\AgendaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
   
});/*
Route::get('datos', function () {
    return "Bienvenido aqui puedes crear un cita";
});

Route::get('/',HomeController::class);
Route::get('datos',[DatosController::class,'index']);
Route::get('datos/create',[DatosController::class,'create']);
Route::get('datos/{dato}',[DatosController::class,'show']);*/
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('user',UserController::class);
Route::resource('paciente',PacienteController::class);
Route::resource('personal',PersonalController::class);
Route::resource('paciente',PacienteController::class);
Route::resource('cargo',CargoController::class);
Route::resource('historial_particular',Historial_ParticularController::class);
Route::resource('historia_previa',Historia_PreviaController::class);
Route::resource('cita',CitaController::class);
Route::resource('agenda',AgendaController::class);