@extends('layouts.app')
@section('title', 'Lista de publicadores')

@section('content')

<div class="w3-container w3-display-container w3-padding-16 w3-center" style="max-width: 600px; margin: auto;">

  <h3 class="w3-center">Publicadores</h3>
  <div class="w3-card w3-container w3-padding-16">
    <ul class="w3-ul">

      <form action="{{ route('publicadores.index') }}" method="GET">
        <input type="text" name="buscarpublicador" id="buscar" placeholder="Buscar">
        <button type="submit">Buscar</button>
      </form>
      @foreach ($publicadores as $pub )

      <li>
        <div>
          <strong> {{$pub -> nombre}} </strong><br>
          <a href="{{ route('publicadores.detalles', ['id' => $pub -> id]) }}">Detalles</a> | <a href="{{ route('publicadores.edit', ['id' => $pub -> id]) }}">Editar</a> | <a href="{{ route('actividad.add', ['id' => $pub -> id]) }}">Insertar actividad</a>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</div>
</div>
@endsection
