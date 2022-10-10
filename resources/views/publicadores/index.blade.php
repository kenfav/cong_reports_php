@extends('layouts.app')
@section('title', 'Lista de publicadores')

@section('content')
<h1>Publicadores</h1>
<form action="{{ route('publicadores.index') }}" method="GET">
  <input type="text" name="buscarpublicador" id="buscar" placeholder="Buscar">
  <button type="submit">Buscar</button>
</form>
<ul>
  @foreach ($publicadores as $pub )


  <li>Nombre: {{$pub -> nombre}} <br>
    <a href="{{ route('publicadores.detalles', ['id' => $pub -> id]) }}">Detalles</a> | <a href="{{ route('publicadores.edit', ['id' => $pub -> id]) }}">Editar</a>
  </li>
  @endforeach
</ul @endsection
