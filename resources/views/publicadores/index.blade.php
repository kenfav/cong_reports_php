<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<h1>Publicadores</h1>
<ul>
    @foreach ($publicadores as $pub )
        
    
    <li>Nombre: {{$pub -> nombre}} <br>
        <a href="{{ route('publicadores.detalles', ['id' => $pub -> id]) }}">Detalles</a>
    </li>
    @endforeach
</ul>
</body>
</html>