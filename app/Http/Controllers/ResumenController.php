<?php

namespace App\Http\Controllers;

use App\Models\Actividades;
use Illuminate\Http\Request;

class ResumenController extends Controller
{
  public function resumen(Request $request)
  {
    $ano = $request['ano'];
    $mes = $request['mes'];
    $resumen = Actividades::where("ano", "=", "{$ano}")->get();
    dd($resumen);
  }

  public function index()
  {
    return view('resumen.index');
  }
}
