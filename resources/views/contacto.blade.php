<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
</head>
<body>
    <h1>Página de Contacto</h1>
    <ul>
        <li>
            <a href="{{route("info")}}">Informacion</a>
        </li>
        <li>
            <a href="{{route("contacto")}}">Contacto</a>
        </li>
    </ul>

    <form action="" method="POST">
        <label for="correo">Correo</label><br>
        <input type="text" name="correo">
        <br>
        <label for="comentario">Comentario</label><br>
        <textarea name="comentario" id="comentario" cols="30" rows="5"></textarea>
        <br>
        <label for="telefono">Telefon</label><br>
        <input type="text" name="telefono" id="telefono">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>