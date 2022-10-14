@extends('layouts.app')
@section('title', 'Lista de publicadores')

@section('content')

<div class="w3-container w3-card w3-padding-16" style="max-width: 600px; margin: auto;">

  <h3 class="w3-center">Publicadores</h3>
  <form action="{{ route('publicadores.index') }}" method="GET">

    <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><button class="w3-button" type="submit"><i class="fa fa-search"></i></button></div>
      <div class="w3-rest">
        <input class="w3-input w3-border" type="text" name="buscarpublicador" id="buscar" placeholder="Buscar">
      </div>


  </form>
</div>

@foreach ($publicadores as $pub )
<ul class="w3-ul ">
  <div class="w3-row w3-section">
    <li>
      <div class="w3-col w3-dropdown-hover" style="width: 0.3em; height: 0.3em;">
        <button class="w3-button"><i class="fa fa-bars"></i></button>
        <div class="w3-dropdown-content w3-bar-block w3-border">
          <a href="{{ route('publicadores.detalles', ['id' => $pub -> id]) }}" class="w3-bar-item w3-button">Ver detalles</a>
          <a href="{{ route('actividad.add', ['id' => $pub -> id]) }}" class="w3-bar-item w3-button">Agregar informe</a>
          <a href="{{ route('publicadores.actividades.list', ['id'=>$pub->id]) }}" class="w3-bar-item w3-button">Ver informes</a>
          <a href="{{ route('publicadores.edit', ['id' => $pub -> id]) }}" class="w3-bar-item w3-button">Editar</a>
        </div>
      </div>

      <div class="w3-rest w3-cell-middle" style="vertical-align: middle; display: inline-block; margin-left: 3em;">
        <strong> {{$pub -> nombre}} </strong>
      </div>
    </li>

  </div>
</ul>

@endforeach

<h6 class="w3-padding-16">
  <a class=" w3-button w3-center" href="http://127.0.0.1:8989/publicadores/create" style="margin: auto; display: block;">Añadir publicador
  </a>
</h6>
@endsection
