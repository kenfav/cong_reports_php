@extends('layouts.app')
@section('title', 'Detalles del publicador')
    
@section('content')
<ul>
    Publicador {{$publicador -> nombre}}
        <li>
    {{$publicador -> fecha_de_bautismo}}
        </li>
        <li>
            {{$publicador -> fecha_nacimiento}}
        </li>
    </ul
@endsection