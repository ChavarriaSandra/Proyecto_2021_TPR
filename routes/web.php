<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DatosController;

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

/*Route::get('/', function () {
    return view('welcome');
    return "Bienvenido a la paniga Principal";
});
Route::get('datos', function () {
    return "Bienvenido aqui puedes crear un cita";
});
*/
Route::get('/',HomeController::class);
Route::get('datos',[DatosController::class,'index']);
Route::get('datos/create',[DatosController::class,'create']);
Route::get('datos/{dato}',[DatosController::class,'show']);