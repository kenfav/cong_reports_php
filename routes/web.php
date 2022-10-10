<?php

use App\Http\Controllers\{
  PublicadorController
};
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

Route::get('/publicadores', [PublicadorController::class, 'index'])->name('publicadores.index');

Route::get('/publicadores/create', [PublicadorController::class, 'create'])->name('publicadores.create');
Route::post('/publicadores/create', [PublicadorController::class, 'store'])->name('publicadores.store');

Route::get('/publicadores/{id}', [PublicadorController::class, 'detalles'])->name('publicadores.detalles');
Route::get('/', function () {
  return view('welcome');
});
