@component('mail::message')

#Mensaje desde Anunciante

Hola recibiste un mensaje desde la sección anunciante, <br>
Nombre: {{ $name }}, <br>
Correo: {{ $phone }},<br>
Teléfono: {{ $phone }},<br>
Mensaje: {{$message}} 



Thanks,<br>
{{ config('app.name') }}
@endcomponent
