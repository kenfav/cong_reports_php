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
  <title>CongReports</title>
</head>

<body class="w3-light-grey w3-center">
  <div class="container mx-auto px-20 py-8 font-semibold w3-padding-16 w3-center" style="max-width: 600px; margin: auto;">

    <header class="w3-container w3-center w3-padding-32">
      <h1><b>Bienvenido a CongReports</b></h1>
      <p>Facilitando la vida del secretario!
      </p>
    </header>
    <h1></h1>
    <div class="w3-container" style="margin: 0;">
      <div class="w3-panel">

        <h4><a href="{{ 'publicadores' }}"><button class="w3-button w3-block w3-gray w3-border">Publicadores</button></a></h4>


        <h4><a href="{{route('publicadores.create')}}"><button class="w3-button w3-block w3-gray w3-border">Crear publicador</button>
          </a></h4>


      </div>
    </div>
    <hr>
    <p></p>
    <p></p>
  </div>
  <br>

</body>

</html>
