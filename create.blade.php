@extends('layouts.app')
@section('title', 'Nuevo Publicador')

@section('content')
<h1>Crear nuevo publicador:</h1>
<form action="#" method="post">
  <input type="text" name="nombre" placeholder="Nombre del publicador:">
  <input type="date" name="fecha_de_bautismo" placeholder="Fecha de bautismo:">
  <input type="date" name="fecha_nacimiento" placeholder="Fecha de nacimiento">
  <input type="radio" id="otrasovejas" name="otras_ovejas" value="Otras ovejas">
  <input type="radio" id="ungido" name="otras_ovejas" value="Ungido">
