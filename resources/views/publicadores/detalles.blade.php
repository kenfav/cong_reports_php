@extends('layouts.app')
@section('title', 'Detalles del publicador')

@section('content')
<ul>
  Publicador: {{$publicador -> nombre}}
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
@endsection
