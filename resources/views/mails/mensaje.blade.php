
@component('mail::message')
#Mensaje Scort

Hola recibiste un mensaje enviado desde la plataforma, <br>
Nombre: {{ $nombre }}, <br>
Correo: {{ $email }},<br>
Mensaje: {{$mensaje}} 

<br>
{{ config('app.name') }}
@endcomponent