@extends('layouts.app')

@section('title', 'Servicios')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/servicios.css') }}">
@endpush

@section('content')
<div class="servicios-container">
    <h1 class="titulo">Todos nuestros servicios</h1>
    <p class="descripcion">
        Explora nuestra amplia gama de servicios médicos y administrativos.
    </p>

    {{-- Buscador en vivo --}}
    <div class="filtros">
        <input
            type="text"
            id="search-input"
            placeholder="Buscar servicio..."
        >
    </div>

    {{-- Cards sin imagen --}}
    <div class="cards-servicios" id="cards-container">
        @foreach ($servicios as $servicio)
            <div class="card-servicio">
                <h3 class="card-title">{{ $servicio->titulo }}</h3>
                <p>{{ $servicio->descripcion }}</p>
            </div>
        @endforeach
    </div>

    {{-- Paginación --}}
    <div class="pagination-wrapper">
        {{ $servicios->appends(request()->query())->links() }}
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const input = document.getElementById('search-input');
    const cards = Array.from(document.querySelectorAll('.card-servicio'));
    const pagination = document.querySelector('.pagination-wrapper');
    let noResultsEl;

    input.addEventListener('input', () => {
        const filtro = input.value.trim().toLowerCase();
        let anyVisible = false;

        cards.forEach(card => {
            const title = card.querySelector('.card-title').textContent.toLowerCase();
            const match = title.includes(filtro);
            card.style.display = match ? 'block' : 'none';
            if (match) anyVisible = true;
        });

        // Oculta paginación si hay filtro activo
        pagination.style.display = filtro ? 'none' : '';

        // Mensaje "sin resultados"
        if (!noResultsEl) {
            noResultsEl = document.createElement('p');
            noResultsEl.id = 'no-results';
            noResultsEl.textContent = 'No se encontraron servicios.';
            noResultsEl.style.textAlign = 'center';
            noResultsEl.style.margin = '20px 0';
            document.querySelector('.servicios-container').append(noResultsEl);
        }
        noResultsEl.style.display = anyVisible || !filtro ? 'none' : 'block';
    });
});
</script>
@endpush
