@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<div class="login-container">
    <h2>Iniciar Sesión</h2>

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="username">Usuario</label>
            <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="Ingrese su usuario" required>
            @error('username') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" required>
            @error('password') <div class="error">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn">Ingresar</button>
    </form>

    <div class="login-footer">
        <p>¿No tenés una cuenta? <a href="{{ route('register') }}">Registrate aquí</a></p>
    </div>
</div>
@endsection
