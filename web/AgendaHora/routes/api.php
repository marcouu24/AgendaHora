<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HorasController;
use App\Http\Controllers\ServiciosController;
use App\Models\Hora;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("horas/post", [HorasController::class,"crearHora"]);
Route::post("horas/delete",[HorasController::class,"eliminarHora"]);
Route::get("horas/get",[HorasController::class,"getHoras"]);
Route::get("horas/filtrar", [HorasController::class, "filtrarHoras"]);

Route::post("servicios/post", [ServiciosController::class,"crearServicio"]);
Route::post("servicios/delete",[ServiciosController::class,"eliminarServicio"]);
Route::get("servicios/get",[ServiciosController::class,"getServicios"]);