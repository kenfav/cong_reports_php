<?php

namespace App\Http\Controllers;

use App\Models\Publicador;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class PublicadorController extends Controller
{
  public function index()
  {
    $publicadores = Publicador::get();
    return view('publicadores.index', compact('publicadores'));
  }

  public function detalles($id)
  {
    if (!$publicador = Publicador::find($id))
      return redirect()->route('publicadores.index');

    return view('publicadores.detalles', ['publicador' => $publicador]);
  }

  public function create(Request $request)
  {
    return view('publicadores.create');
  }
  public function store(Request $request)
  {
    $input = $request->collect();
    dd($input);
  }
}
