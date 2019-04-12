@component('mail::message')
#Mensaje desde Contacto

Hola recibiste un mensaje desde contactos, <br>
Nombre: {{ $name }}, <br>
Correo: {{ $phone }},<br>
Teléfono: {{ $phone }},<br>
Asunto: {{ $subject }},<br>
Mensaje: {{$message}} 

<br>

@endcomponent