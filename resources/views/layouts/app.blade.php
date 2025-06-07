<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
  
  {{-- Tus CSS --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link rel="stylesheet" href="{{ asset('css/turno.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <link rel="stylesheet" href="{{ asset('css/servicios.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <title>@yield('title', 'Sistema de Gestión Hospitalaria')</title>
</head>
<body>

  {{-- Navbar --}}
  <nav class="navbar">
    <div class="nav-links">
      <a href="{{ route('home') }}">Inicio</a>
      <a href="{{ route('servicios') }}">Servicios</a>
      <a href="{{ route('contacto') }}">Contacto</a>
      <a href="{{ route('turno.create') }}">Sacar Turno</a>
    </div>
    <div class="nav-auth">
      <a href="{{ route('login') }}" class="btn-turno">Iniciar Sesión</a>
      <a href="{{ route('register') }}" class="btn-turno">Crear Usuario</a>
    </div>
  </nav>

  {{-- Contenido --}}
  <main class="main-content">
    @yield('content')
  </main>

  {{-- Botones sociales fijos --}}
  <div class="social-buttons">
    <a href="https://wa.me/541112345678" target="_blank" aria-label="WhatsApp">
      <img src="{{ asset('img/whatsapp-icon.png') }}" alt="WhatsApp">
    </a>
    <a href="https://instagram.com/tu_hospital" target="_blank" aria-label="Instagram">
      <img src="{{ asset('img/instagram-icon.png') }}" alt="Instagram">
    </a>
  </div>

  {{-- Footer --}}
  @include('partials.footer')

  {{-- Script para ocultar los botones al llegar al footer --}}
  <script>
    document.addEventListener('scroll', () => {
      const footer = document.getElementById('site-footer');
      const social = document.querySelector('.social-buttons');
      if (!footer || !social) return;
      const footerTop = footer.getBoundingClientRect().top;
      const viewportHeight = window.innerHeight;
      if (footerTop < viewportHeight) {
        social.style.opacity = '0';
        social.style.pointerEvents = 'none';
      } else {
        social.style.opacity = '1';
        social.style.pointerEvents = 'auto';
      }
    });
  </script>

</body>
</html>
