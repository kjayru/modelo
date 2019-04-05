<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido a modelos Peru</title>
</head>

<body>
 Hola {{ $nombre }}, {{ $mensaje }}, para iniciar  dirijase a esta url para acceder y cargar su información<br>
    <a href="{{env('APP_URL')}}" class="link">{{env('APP_URL')}}</a><br>
    Sus credenciales de acceso es su email y su clave de acceso es  <strong>{{ $password }}<strong>.
<br/>
<p> Saludos</p>
</body>

</html>