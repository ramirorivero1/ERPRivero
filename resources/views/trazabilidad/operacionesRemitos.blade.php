{{-- resources/views/trazabilidad/operacionesRemitos.blade.php --}}
@extends('layouts.app')

@section('title', 'Operaciones de Remitos')

@section('content')
<link rel="stylesheet" href="{{ asset('css/trazabilidad.css') }}">

<div class="remitos-container">
    <h1>Operaciones de Remitos</h1>

    {{-- DEBUG: muestra un array con todos los atributos del primer remito --}}
    @if($remitos->isNotEmpty())
        @php
            dd($remitos->first()->toArray());
        @endphp
    @endif

    <table class="remitos-table">
    <thead>
  <tr>
    <th>Código de Remito</th>
    <th>Hora</th>
    <th>Estado</th>
    <th>Destino</th>
    <th>Ítems</th>
  </tr>
</thead>
<tbody>
  @forelse($remitos as $r)
    <tr onclick="window.location='{{ route('trazabilidad.tracking', ['remito' => $r->codigoRemito]) }}'">
      <td>{{ $r->codigoRemito }}</td>  {{-- ← aquí --}}
      <td>{{ \Carbon\Carbon::parse($r->hora)->format('Y-m-d H:i') }}</td>
      <td>{{ $r->estado }}</td>
      <td>{{ $r->destino }}</td>
      <td>{{ $r->items }}</td>
    </tr>
  @empty
    <tr>
      <td colspan="5" class="text-center">No hay operaciones de remitos.</td>
    </tr>
  @endforelse
</tbody>

    </table>

    <div class="pagination-wrapper">
        {{ $remitos->links() }}
    </div>
</div>
@endsection
