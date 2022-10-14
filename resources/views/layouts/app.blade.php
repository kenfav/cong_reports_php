<!DOCTYPE html>
<html lang="es-la">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
      font-family: "Raleway", sans-serif
    }
  </style>
</head>

<body class="w3-light-grey">
  <div class="container mx-auto px-20 py-8 font-semibold w3-padding-16" style="margin: auto;">
    @yield('content')
  </div>
  <br>
  <div class="w3-container">

  </div>
  <div class="w3-container" style="max-width: 600px; margin: auto;">
    <div class="w3-bar">
      <a href="{{ URL::previous() }}"><button class="w3-bar-item w3-button w3-black w3-border" style="width:50%">Volver</button>
      </a>
      <a href="{{route('index')}}"><button class="w3-bar-item w3-button w3-black w3-border" style="width:50%">Inicio</button>
    </div>
  </div>
</body>

</html>
