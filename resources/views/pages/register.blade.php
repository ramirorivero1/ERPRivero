@extends('layouts.app')

@section('title', 'Registro')

@section('content')

    <div class="register-container">
        <h2>Registro de Nuevo Usuario</h2>

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="fullname">Nombre completo</label>
                <input type="text" id="fullname" name="fullname" value="{{ old('fullname') }}" placeholder="Ingrese su nombre completo" required>
                @error('fullname') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Ingrese su correo electrónico" required>
                @error('email') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="username">Usuario</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="Ingrese un nombre de usuario" required>
                @error('username') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Ingrese una contraseña" required>
                @error('password') <div class="error">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn">Registrar</button>
        </form>

        <div class="register-footer">
            <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesión aquí</a></p>
        </div>
    </div>
@endsection
