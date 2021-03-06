<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view("barberos","barberos")->name("barberos");


Route::view("","welcome")->name("welcome");
Route::view("AgendarHora","agendar_hora")->name("agendar_hora");
Route::view("Servicios","servicios")->name("servicios");
Route::view("VerHoras","ver_horas")->name("ver_horas");
Route::view("CRUDServicios","crud_servicios")->name("crud_servicios");