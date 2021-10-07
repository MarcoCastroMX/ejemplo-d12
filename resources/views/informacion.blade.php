<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
</head>
<body>
    <h1>PAGINA DE INFORMACION</h1>
    <ul>
        <li>
            <a href="{{action([App\Http\Controllers\PaginasController::class, 'informacion'])}}">Informacion</a>
        </li>
        <li>
            <a href="{{action([App\Http\Controllers\PaginasController::class, 'contacto'])}}">Contacto</a>
        </li>
    </ul>
    {{--
    @if ($nombre == "Marco")
        Hola {{$nombre}}
    @else
        Hola Extraño
    @endif
    <br>
    Hola {{$nombre_completo}}
    --}}
    
</body>
</html>
