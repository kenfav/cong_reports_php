<?php

namespace App\Http\Controllers;

use App\Models\Actividades;
use App\Models\Publicador;
use Illuminate\Http\Request;

class ActividadesController extends Controller
{

  protected $model;

  public function __construct(Actividades $actividades)
  {
    $this->model = $actividades;
  }

  public function index()
  {
    return view('publicadores.actividades.index');
  }

  public function add($publicadorId)
  {
    if (!$publicador = Publicador::find($publicadorId))
      return redirect()->route('publicadores.index');
    return view('publicadores.actividades.add_activity', ['publicador' => $publicador]);
  }

  public function store(Request $request)
  {
    $actividad = $request->only(
      'mes',
      'ano',
      'publicaciones',
      'videos',
      'horas',
      'revisitas',
      'estudios',
      'notas',
      'publicador_id'
    );
    Actividades::create($actividad);
    return redirect()->route('publicadores.index');
  }

  public function update($actividad_id)
  {
    //
  }

  public function delete($actividad_id)
  {
    //
  }
}
