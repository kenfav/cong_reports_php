@extends('layouts.app')
@section('title', 'Lista de publicadores')

@section('content')


<h1 class="w3-center">Ver resumen:</h1>

<form class="w3-input" action="{{route('resumen.resumen','mes','ano')}}" method="POST">
  @csrf
  @method('POST')
  <label for="mes">Mes:</label>
  <input type="number" id="mes" name="mes" min="1" max="12">
  <label for="ano">Año:</label>
  <input type="number" id="ano" name="ano" min="2022" max="2025">
  <input type="submit" value="Mostrar">
</form>

@endsection
