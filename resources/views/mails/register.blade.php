@component('mail::message')
#Bienvenido a modelos Peru

Hola {{ $nombre }}, {{ $mensaje }}, para iniciar  dirijase a esta url para acceder y cargar su información<br>

@component('mail::button', ['url' => 'http://escort.com.pe/admin'])
Ingresar
@endcomponent

Sus credenciales de acceso es su email y su clave de acceso es  <strong>{{ $password }}<strong>.
<br/>
<p> Saludos</p>

<br>
{{ config('app.name') }}
@endcomponent
