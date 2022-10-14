<?php

use App\Http\Controllers\{
  PublicadorController,
  ActividadesController,
  ResumenController,
};
use App\Models\Actividades;
use App\Models\Publicador;
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

Route::post('/resumen', [ResumenController::class, 'resumen'])->name('resumen.resumen');
Route::get('/resumen', [ResumenController::class, 'index'])->name('resumen.index');
Route::post('/actividades/add', [ActividadesController::class, 'store'])->name('actividad.store');
Route::get('/publicadores/{id}/actividades/add', [ActividadesController::class, 'add'])->name('actividad.add');
Route::get('/publicadores/{id}/actividades', [ActividadesController::class, 'listarPorPublicador'])->name('publicadores.actividades.list');
Route::get('/publicadores', [PublicadorController::class, 'index'])->name('publicadores.index');
Route::get('/publicadores/create', [PublicadorController::class, 'create'])->name('publicadores.create');
Route::post('/publicadores', [PublicadorController::class, 'store'])->name('publicadores.store');
Route::put('/publicadores/{id}', [PublicadorController::class, 'update'])->name('publicadores.update');
Route::get('/publicadores/{id}', [PublicadorController::class, 'detalles'])->name('publicadores.detalles');
Route::get('/publicadores/{id}/edit', [PublicadorController::class, 'edit'])->name('publicadores.edit');
Route::delete('/publicadores/{id}', [PublicadorController::class, 'delete'])->name('publicadores.delete');
Route::get('/', function () {
  return view('welcome');
})->name('index');
