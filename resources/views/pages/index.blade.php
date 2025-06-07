@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<div class="inicio-container">
    <div class="inicio-content">
        <h1>Bienvenido al Sistema de Gestión Hospitalaria</h1>
        <p>Gestione sus turnos y servicios médicos de manera rápida y segura.</p>
        <a href="{{ route('turno.create') }}" class="btn-turno">Sacar Turno</a>
    </div>
</div>


<h2 class="servicios-title">Nuestros Servicios</h2>

<div class="cards-container">
    @foreach ($servicios as $servicio)
        <div class="card">
            <img src="{{ asset('img/' . $servicio->imagen) }}" alt="{{ $servicio->nombre }}">
            <h3>{{ $servicio->nombre }}</h3>
            <p>{{ $servicio->descripcion }}</p>
        </div>
    @endforeach
</div>
<div class="ver-mas-container">
    <a href="#" class="btn-ver-mas">Ver más servicios</a>
</div>

<h2 class="news-title">Últimas Novedades</h2>
<div class="news-carousel-wrapper">
    <div class="news-carousel" id="news-carousel">
        @foreach ($noticias as $noticia)
            <div class="news-slide">
                <h4>{{ $noticia->titulo }}</h4>
                <p>{{ $noticia->contenido }}</p>
            </div>
        @endforeach
    </div>
</div>

{{-- Botón sutil “Ver” --}}
<div class="news-btn-container">
    <a href="{{ route('noticias.index') }}" class="btn-news">Ver</a>
</div>


<h2 class="testimonios-title">Testimonios de nuestros pacientes</h2>

<div class="testimonios-container" id="testimonios-container">
    @foreach ($testimonios as $testimonio)
        <div class="testimonio-card">
            <p class="contenido">"{{ $testimonio->contenido }}"</p>
            <p class="autor">
                — {{ $testimonio->nombre_persona 
                     ?? ($testimonio->usuario->nombre . ' ' . $testimonio->usuario->apellido) 
                     ?? 'Anónimo' }}
            </p>
        </div>
    @endforeach
</div>

{{-- SCRIPT PARA ROTAR --}}
<script>
document.addEventListener('DOMContentLoaded', () => {
    const cards = Array.from(document.querySelectorAll('#testimonios-container .testimonio-card'));
    const total = cards.length;
    let start = 0;

    function showGroup() {
        // ocultar todas
        cards.forEach(card => card.style.display = 'none');
        // mostrar las siguientes 4
        for (let i = 0; i < 4 && i < total; i++) {
            const idx = (start + i) % total;
            cards[idx].style.display = 'block';
        }
        // rotar índice
        start = (start + 1) % total;
    }

    // primera vez
    showGroup();
    // cada 5 segundos cambian las 4
    setInterval(showGroup, 5000);
});
</script>


<h2 class="faq-title">Preguntas Frecuentes</h2>

<div class="faq-container">
    <div class="faq-item">
        <h3>¿Cómo saco un turno?</h3>
        <p>Podés hacerlo desde la sección "Sacar Turno" o acercándote a la recepción del hospital.</p>
    </div>
    <div class="faq-item">
        <h3>¿Qué documentos debo llevar?</h3>
        <p>Es necesario presentar tu DNI y, si tenés, carnet de obra social.</p>
    </div>
    <div class="faq-item">
        <h3>¿Qué especialidades ofrecen?</h3>
        <p>Contamos con clínica médica, ginecología, pediatría, cardiología, y más.</p>
    </div>
</div>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.news-slide');

    setInterval(() => {
        slides[currentSlide].classList.remove('active');
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add('active');
    }, 5000);
</script>

@endsection
