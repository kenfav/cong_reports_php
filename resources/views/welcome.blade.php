@extends('layouts.app')
@section('title', 'CongReports')
@section('content')

</head>

<body class="bg-gray-50">
  <!-- Header -->
  <header class="w3-container w3-center w3-padding-32">
    <h1><b>Bienvenido a CongReports</b></h1>
    <p>Facilitando la vida del secretario!
    </p>
  </header>
  <h1></h1>
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4><a href="{{ 'publicadores' }}" class="underline text-gray-900 dark:text-white">Publicadores</a></h4>
    </div>
    <div class="w3-container w3-padding">
      <h4><a href="{{route('publicadores.create')}}" class="underline text-gray-900 dark:text-white">Crear publicador</a></h4>
    </div>
  </div>
  <hr>
  <p></p>
  <p></p>
  </div>
  </div>

  @endsection
