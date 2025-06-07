@extends('layouts.app')

@section('title', 'Noticias')

@section('content')
<link rel="stylesheet" href="{{ asset('css/noticias.css') }}">

<div class="noticias-container">
    <h1 class="noticias-title">Todas las Noticias</h1>

    @forelse($noticias as $noticia)
    <article class="noticia-card">
        @if ($noticia->imagen)
            <img src="{{ asset('img/noticias/' . $noticia->imagen) }}" alt="{{ $noticia->titulo }}" class="noticia-img">
        @endif
        <h2>{{ $noticia->titulo }}</h2>
        <p>{{ $noticia->contenido }}</p>
        <span class="noticia-fecha">{{ $noticia->created_at->format('Y-m-d') }}</span>
    </article>
@empty
    <p>No hay noticias publicadas todavía.</p>
@endforelse

</div>
@endsection
