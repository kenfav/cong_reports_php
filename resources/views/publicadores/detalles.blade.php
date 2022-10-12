@extends('layouts.app')
@section('title', 'Detalles del publicador')

@section('content')
<h3 class="w3-center">Publicador: {{$publicador -> nombre}}</h3>
<div class="w3-card w3-container w3-padding" style="max-width: 600px; margin: auto;">
  <ul class="w3-ul">
    <li>
      Fecha de nacimiento: {{$publicador -> fecha_nacimiento}}
    </li>
    <li>
      Fecha de bautismo: {{$publicador -> fecha_de_bautismo}}
    </li>
  </ul>
  <form action="{{ route('publicadores.delete', $publicador -> id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar</button>
  </form>
</div>
@endsection
