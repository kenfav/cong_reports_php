@extends('layouts.app')
@section('title', 'Nuevo Publicador')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="w3-container w3-display-container w3-padding-16 w3-card" style="max-width:600px; margin: auto;">
  <div class="w3-center">
    <h3>Insertar actividad de</h3>
    <h6>{{$publicador->nombre}}</h6>
    <hr>
  </div>
  <form action="{{route('actividad.store')}}" method="POST">
    @csrf
    @method('POST')

    <input type="hidden" name="publicador_id" value="{{$publicador->id}}">

    <p><label for="mes">Seleccione el mes: </label<br>
        <select name="mes" class="w3-select w3-border" required id="mes_id">
          <option value="1">enero</option>
          <option value="2">febrero</option>
          <option value="3">marzo</option>
          <option value="4">abril</option>
          <option value="5">mayo</option>
          <option value="6">junio</option>
          <option value="7">julio</option>
          <option value="8">agosto</option>
          <option value="9">septiembre</option>
          <option value="10">octubre</option>
          <option value="11">noviembre</option>
          <option value="12">diciembre</option>
        </select> <br><br>

        <label for="ano"> Año: </label>
        <input class="w3-input w3-border" required type="number" name="ano" id="ano_id" min="2022" max="2027" value="2022"><br>

        <label for="publicaciones"> Publicaciones: </label>
        <input class="w3-input w3-border" type="number" name="publicaciones" id="publicaciones_id" placeholder="Publicaciones:" value="{{old('publicaciones')}}"><br>

        <label for="nombreform"> Videos: </label>
        <input class="w3-input w3-border" type="number" name="videos" id="videos_id" placeholder="Videos:" value="{{old('videos')}}"><br>

        <label for="nombreform"> Horas: </label>
        <input class="w3-input w3-border" required type="number" name="horas" id="horas_id" placeholder="Horas:" value="{{old('horas')}}"><br>

        <label for="nombreform"> Revisitas: </label>
        <input class="w3-input w3-border" type="number" name="revisitas" id="revisitas_id" placeholder="Revisitas:" value="{{old('revisitas')}}"><br>

        <label for="nombreform"> Estudios Biblicos: </label>
        <input class="w3-input w3-border" type="number" name="estudios" id="estudios_id" placeholder="Estudios Biblicos:" value="{{old('estudios')}}"><br>

        <label for="nombreform"> Notas: </label>
        <input class="w3-input w3-border" type="text" name="notas" id="notas_id" placeholder="Notas:" value="{{old('notas')}}"><br>
        <div class="w3-container w3-center"><input class="w3-button w3-gray" type="submit" value="Confirmar"></div>

  </form>
</div>
@endsection
