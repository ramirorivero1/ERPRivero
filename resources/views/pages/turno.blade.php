@extends('layouts.app')

@section('title', 'Sacar Turno')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/turno.css') }}">

    <div class="container">
        {{-- Aviso de login/register --}}
        @guest
            <div class="alert-info">
                Necesitás una cuenta para sacar turno.
                <a href="{{ route('login') }}" class="alert-link">Iniciar sesión</a>
                o
                <a href="{{ route('register') }}" class="alert-link">Crear usuario</a>.
            </div>
        @endguest

        <h1 style="text-align: center; color: #007BFF;">Sacar Turno</h1>

        <form action="{{ route('guardar.turno') }}" method="POST">
            @csrf
            {{-- Honeypot anti-bots --}}
            <input type="hidden" name="honeypot" value="">

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
            @error('nombre') <div class="error">{{ $message }}</div> @enderror

            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" value="{{ old('apellido') }}" required>
            @error('apellido') <div class="error">{{ $message }}</div> @enderror

            <label for="dni">DNI</label>
            <input type="number" id="dni" name="dni" value="{{ old('dni') }}" required>
            @error('dni') <div class="error">{{ $message }}</div> @enderror

            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="tu@correo.com" required>
            <small class="hint">Te confirmaremos por este mail</small>
            @error('email') <div class="error">{{ $message }}</div> @enderror

            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}" placeholder="11 1234-5678" required>
            <small class="hint">Ej: 11 1234-5678</small>
            @error('telefono') <div class="error">{{ $message }}</div> @enderror

            <label for="horario">Prefiero turno</label>
            <select id="horario" name="horario" required>
                <option value="">--Seleccioná--</option>
                <option value="mañana" {{ old('horario')=='mañana'?'selected':'' }}>Mañana</option>
                <option value="tarde"  {{ old('horario')=='tarde'?'selected':'' }}>Tarde</option>
            </select>
            @error('horario') <div class="error">{{ $message }}</div> @enderror

            <label for="sintomas">Síntomas</label>
            <textarea id="sintomas" name="sintomas" rows="4" required>{{ old('sintomas') }}</textarea>
            @error('sintomas') <div class="error">{{ $message }}</div> @enderror

            {{-- Botón condicionado a login --}}
            @guest
                <button type="submit" disabled class="btn-disabled">Enviar (debes iniciar sesión)</button>
            @else
                <button type="submit">Enviar</button>
            @endguest

            {{-- Enlaces de login/register dentro del form --}}
            <div style="margin-top: 10px; display: flex; justify-content: flex-end; gap: 10px;">
                <a href="{{ route('login') }}" class="btn-link">Iniciar Sesión</a>
                <a href="{{ route('register') }}" class="btn-link">Crear Usuario</a>
            </div>
        </form>

        {{-- Contacto 24 hs --}}
        <div class="contacto-24hs">
            <strong>Contacto 24 hs:</strong>
            <a href="tel:08001234567">0800-123-4567</a> – 
            <a href="mailto:urgencias@hospital.com">urgencias@hospital.com</a>
        </div>
    </div>
@endsection
