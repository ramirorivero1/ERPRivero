{{-- resources/views/partials/footer.blade.php --}}
<footer id="site-footer" class="footer">
  <div class="footer-container">
    <div class="footer-section">
      <h3>Hospital Rivero</h3>
      <p>Av. Siempre Viva 1234, Buenos Aires</p>
      <p>Teléfono: (011) 1234-5678</p>
      <p>Email: contacto@hospitalrivero.com</p>
    </div>

    <div class="footer-section">
      <h3>Enlaces Rápidos</h3>
      <a href="{{ route('home') }}">Inicio</a>
      <a href="{{ route('turno.create') }}">Sacar Turno</a>
      <a href="{{ route('contacto') }}">Contacto</a>
      <a href="{{ route('servicios') }}">Servicios</a>
    </div>

    <div class="footer-section">
      <h3>Síguenos</h3>
      <a href="#" target="_blank">Facebook</a>
      <a href="#" target="_blank">Instagram</a>
      <a href="#" target="_blank">LinkedIn</a>
    </div>
  </div>

  <div class="footer-bottom">
    <p>© {{ date('Y') }} Hospital Rivero. Todos los derechos reservados.</p>
    <div class="footer-policies">
      <a href="#">Política de Privacidad</a>
      <a href="#">Términos y Condiciones</a>
    </div>
  </div>
</footer>
