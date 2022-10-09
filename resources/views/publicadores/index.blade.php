@extends('layouts.app')
@section('title', 'Lista de publicadores')
    
@section('content')
<h1>Publicadores</h1>
<ul>
    @foreach ($publicadores as $pub )
        
    
    <li>Nombre: {{$pub -> nombre}} <br>
        <a href="{{ route('publicadores.detalles', ['id' => $pub -> id]) }}">Detalles</a>
    </li>
    @endforeach
</ul
@endsection