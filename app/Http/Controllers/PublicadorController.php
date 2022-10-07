<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicadorController extends Controller
{
    public function index()
    {
return view('publicadores.index');
    }
public function detalles($id) {
return view('publicadores.detalles');
}
}
