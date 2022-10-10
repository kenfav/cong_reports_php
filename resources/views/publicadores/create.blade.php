@extends('layouts.app')
@section('title', 'Nuevo Publicador')

@section('content')
<h1>Crear nuevo publicador:</h1>
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<form action="{{route('publicadores.store')}}" method="POST">
  @csrf


  <label for="nombreform"> Nombre del Publicador: </label>
  <input type="text" name="nombre" id="nombreform" placeholder="Digite el nombre:"><br>

  <label for="dateformibaut">Fecha de bautismo:</label>
  <input type="date" name="fecha_de_bautismo" id="dateformibaut" placeholder="Fecha de bautismo:"><br>

  <label for="dateformnac">Fecha de nacimiento:</label>
  <input type="date" name="fecha_nacimiento" id="dateformibaut" placeholder="Fecha de nacimiento"><br><br>

  <label>Ungido o Otras ovejas</label><br>
  <label for="otrasovejas">Otras ovejas</label>
  <input type="radio" id="otrasovejas" name="otras_ovejas" value="1">

  <label for="ungido" name="ungido" value="Ungido">Ungido</label>
  <input type="radio" id="ungido" name="otras_ovejas" value="0"><br><br>

  <label>Anciano:</label><br>
  <label for="anc_si">Si</label>
  <input type="radio" id="anc_si" name="anciano" value="1">

  <label for="anc_no" name="anciano" value="Ungido">No</label>
  <input type="radio" id="anc_no" name="anciano" value="0"><br><br>

  <label>Siervo miniterial:</label><br>
  <label for="sm_si">Si</label>
  <input type="radio" id="sm_si" name="siervo_ministerial" value="1">

  <label for="sm_no" name="anciano" value="siervo_ministerial">No</label>
  <input type="radio" id="sm_no" name="siervo_ministerial" value="0"><br><br>

  <label>Precursor Regular:</label><br>
  <label for="pr_si">Si</label>
  <input type="radio" id="pr_si" name="precursor" value="1">

  <label for="pr_no" name="pr_no" value="0">No</label>
  <input type="radio" id="pr_no" name="precursor" value="0"><br><br>

  <input type="submit" value="Submit">
</form>

@endsection
