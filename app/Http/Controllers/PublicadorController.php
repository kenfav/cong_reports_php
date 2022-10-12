<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePublicadorFormRequest;
use App\Models\Publicador;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class PublicadorController extends Controller
{
  protected $model;

  public function __construct(Publicador $publicador)
  {
    $this->model = $publicador;
  }

  public function index(Request $request)
  {
    $busqueda = $request->buscarpublicador;
    $publicadores = Publicador::where('nombre', 'LIKE', "%{$busqueda}%")->get();
    return view('publicadores.index', compact('publicadores'));
  }

  public function detalles($id)
  {
    if (!$publicador = Publicador::find($id))
      return redirect()->route('publicadores.index');

    return view('publicadores.detalles', ['publicador' => $publicador]);
  }

  public function edit($id)
  {
    if (!$publicador = Publicador::find($id))
      return redirect()->route('publicadores.index');

    return view('publicadores.edit', ['publicador' => $publicador]);
  }

  public function update(StoreUpdatePublicadorFormRequest $request, $id)
  {
    $data = $request->only('nombre', 'fecha_de_bautismo', 'fecha_nacimiento', 'otras_ovejas', 'anciano', 'siervo_ministerial', 'precursor');
    if (!$publicador = Publicador::find($id))
      return redirect()->route('publicadores.index');
    $publicador->update($data);
    return redirect(route('publicadores.index'));
  }

  public function create()
  {
    return view('publicadores.create');
  }

  public function store(StoreUpdatePublicadorFormRequest $request)
  {
    $data = $request->only('nombre', 'fecha_de_bautismo', 'fecha_nacimiento', 'otras_ovejas', 'anciano', 'siervo_ministerial', 'precursor');
    Publicador::create($data);
    return redirect(route('publicadores.index'));
  }

  public function delete($id)
  {
    if (!$publicador = Publicador::find($id))
      return redirect()->route('publicadores.index');
    $publicador->delete();
    return redirect()->route('publicadores.index');
  }
}
