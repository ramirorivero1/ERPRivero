@extends('layouts.app')

@section('title', "Tracking – $remito")

@section('content')
  <link rel="stylesheet" href="{{ asset('css/tracking.css') }}">

  <div class="tracking-container">
    {{-- Header con remito, fecha y destino --}}
    <div class="tracking-header">
      <div class="tracking-code">
        <strong>Remito:</strong> {{ $remito }}
      </div>
      <div class="tracking-meta">
        <div class="tracking-date">
          <strong>Fecha:</strong> {{ now()->format('Y-m-d') }}
        </div>
        <div class="tracking-destino">
          <strong>Destino:</strong> {{ $movimientos->first()->destino ?? '—' }}
        </div>
      </div>
    </div>

    {{-- Tabla de items --}}
    <div class="tracking-items">
    <table class="tracking-table tracking-items">
  <thead>
    <tr>
      <th class="col-codigo">Código</th>
      <th>Descripción</th>
      <th class="col-cantidad">Cantidad</th>
    </tr>
  </thead>
  <tbody>
    @foreach($movimientos as $mov)
      <tr>
        <td class="col-codigo">{{ $mov->insumo->codigo ?? '—' }}</td>
        <td>{{ $mov->insumo->descripcion ?? '—' }}</td>
        <td class="col-cantidad">{{ $mov->cantidad }}</td>
      </tr>
    @endforeach
  </tbody>
</table>


    </div>

    {{-- Footer para firma, aclaración, fecha y sello --}}
    <div class="tracking-footer">
      <div class="footer-field">
        <label>Firma:</label>
        <div class="footer-line"></div>
      </div>
      <div class="footer-field">
        <label>Aclaración:</label>
        <div class="footer-line"></div>
      </div>
      <div class="footer-field">
        <label>Fecha:</label>
        <div class="footer-line"></div>
      </div>
      <div class="footer-field">
        <label>Sello:</label>
        <div class="footer-line"></div>
      </div>
    </div>
  </div>
@endsection
