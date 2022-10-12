@extends('layouts.app')
@section('title', 'Nuevo Publicador')

@section('content')
<h3 class="w3-center">Crear nuevo publicador:</h3>
@if ($errors->any())
<div class="w3-panel w3-yellow" style="max-width: 600px; margin: auto;">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<div class="w3-modal-content w3-card-4 w3-container" style="max-width:600px; margin: auto;">
  <form class="w3-container" action="{{route('publicadores.store')}}" method="POST">
    @csrf
    <div class="w3-section">


      <label for="nombreform"> Nombre del Publicador: </label> <br>
      <input class="w3-input w3-border w3-margin-bottom" type="text" name="nombre" id="nombreform" placeholder="Digite el nombre:" value="{{old('nombre')}}"><br>

      <label for="dateformibaut">Fecha de bautismo:</label><br>
      <input class="w3-input w3-border w3-margin-bottom" type="date" name="fecha_de_bautismo" id="dateformibaut" placeholder="Fecha de bautismo:" value="{{old('fecha_de_bautismo')}}"><br>

      <label for="dateformnac">Fecha de nacimiento:</label><br>
      <input class="w3-input w3-border w3-margin-bottom" type="date" name="fecha_nacimiento" id="dateformibaut" placeholder="Fecha de nacimiento" value="{{old('fecha_nacimiento')}}"><br>

      <label>Ungido o Otras ovejas</label><br>
      <input type="radio" id="otrasovejas" name="otras_ovejas" value="1" checked>
      <label for="otrasovejas">Otras ovejas</label><br>

      <input type="radio" id="ungido" name="otras_ovejas" value="0">
      <label for="ungido" name="ungido" value="Ungido">Ungido</label><br><br>

      <label>Anciano:</label><br>
      <input type="radio" id="anc_si" name="anciano" value="1">
      <label for="anc_si">Si</label><br>

      <input type="radio" id="anc_no" name="anciano" value="0" checked>
      <label for="anc_no" name="anciano" value="Ungido">No</label><br><br>

      <label>Siervo miniterial:</label><br>
      <input type="radio" id="sm_si" name="siervo_ministerial" value="1">
      <label for="sm_si">Si</label><br>

      <input type="radio" id="sm_no" name="siervo_ministerial" value="0" checked>
      <label for="sm_no" name="anciano" value="siervo_ministerial">No</label><br><br>

      <label>Precursor Regular:</label><br>
      <input type="radio" id="pr_si" name="precursor" value="1">
      <label for="pr_si">Si</label><br>

      <input type="radio" id="pr_no" name="precursor" value="0" checked>
      <label for="pr_no" name="pr_no" value="0">No</label><br><br>
      <div class="w3-center">
        <input class="w3-button w3-gray" type="submit" value="Confirmar">
      </div>
  </form>
</div>
</div>

@endsection
