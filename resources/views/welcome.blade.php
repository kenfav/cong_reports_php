<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>CongReports</title>

</head>

<body>
  <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <div class="grid grid-cols-1 md:grid-cols-2">
      <div class="p-6">
        <div class="flex items-center">
          <div class="ml-4 text-lg leading-7 font-semibold">
            <p><a href="{{ 'publicadores' }}" class="underline text-gray-900 dark:text-white">Ver Publicadores</a></p>
            <p><a href="{{route('publicadores.create')}}" class="underline text-gray-900 dark:text-white">Crear publicador</a></p>
          </div>
        </div>

        <div class="ml-12">
          <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
            Congregation reports made easy!
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
