<!DOCTYPE html>
<html lang="es-la">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
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
  <div class="container mx-auto px-20 py-8 font-semibold w3-padding-16">
    @yield('content')
  </div>
  <br>
  <p><a href="{{route('index')}}">Volver al inicio</a></p>
</body>

</html>
