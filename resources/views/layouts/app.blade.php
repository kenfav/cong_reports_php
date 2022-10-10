<!DOCTYPE html>
<html lang="es-la">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>@yield('title') - CongReports</title>
  <!-- Fonts -->
</head>

<body class="antialiased">
  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @yield('content')
  </div>
  <br>
  <br>
  <p><a href="{{route('index')}}">Volver al inicio</a></p>
</body>

</html>
