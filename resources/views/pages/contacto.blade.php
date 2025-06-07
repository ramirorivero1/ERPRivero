@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
<link rel="stylesheet" href="{{ asset('css/contacto.css') }}">

<div class="contact-container">
    <h2>Contacto del Hospital</h2>
    <p>¿Tenés dudas? Podés comunicarte con nosotros a través de los siguientes medios.</p>

    <div class="contact-details">
        <p><strong>Nombre:</strong> Hospital General San Benito</p>
        <p><strong>Dirección:</strong> Av. Rivadavia 1234, CABA, Buenos Aires, Argentina</p>
        <p><strong>Teléfono:</strong> (011) 4321-5678</p>
        <p><strong>Email:</strong> contacto@sanbenitohospital.com</p>
        <p><strong>Horario de Atención:</strong> Lunes a Viernes de 8:00 a 18:00</p>
        <p><strong>CUIL:</strong> 20-12345678-9</p>
    </div>

    <div class="map-box">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.7913612474734!2d-58.41730822419243!3d-34.63420815811305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb7e1be2a1f3%3A0x2ab438dbad65c8b7!2sAv.%20Rivadavia%201234%2C%20C1033AAC%20CABA!5e0!3m2!1ses-419!2sar!4v1714860000000" 
            width="100%" 
            height="300" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>
@endsection
