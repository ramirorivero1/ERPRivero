<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\TrazabilidadInsumoController;

// Agrega estos modelos:
use App\Models\Servicio;
use App\Models\Noticia;
use App\Models\Testimonio;

/*
|--------------------------------------------------------------------------
| Rutas públicas del sistema
|--------------------------------------------------------------------------
*/

// Home: carga servicios, noticias y testimonios
Route::get('/', function () {
    $servicios    = Servicio::all();
    $noticias     = Noticia::latest()->take(5)->get();
    $testimonios  = Testimonio::with('usuario')->get();

    return view('pages.index', compact('servicios', 'noticias', 'testimonios'));
})->name('home');

// Otras páginas
Route::get('/servicios', [IndexController::class, 'verServicios'])
     ->name('servicios');
Route::view('/contacto', 'pages.contacto')
     ->name('contacto');
     
// Lista todas las noticias
Route::get('/noticias', [NoticiaController::class, 'index'])
     ->name('noticias.index');


// Turnos
Route::get('/sacar-turno', [TurnoController::class, 'create'])
     ->name('turno.create');
Route::post('/guardar-turno', [TurnoController::class, 'store'])
     ->name('guardar.turno');

// Auth views
Route::view('/login',    'pages.login')->name('login');
Route::view('/register', 'pages.register')->name('register');

// Paciente
Route::get('/search-patient', [PatientController::class, 'search'])
     ->name('search.patient');

// CRUD Noticias (solo index, create, store)
Route::resource('noticias', NoticiaController::class)
     ->only(['index','create','store'])
     ->names([
         'index'  => 'noticias.index',
         'create' => 'noticias.create',
         'store'  => 'noticias.store',
     ]);

    // Rutas de trazabilidad
Route::prefix('trazabilidad')->group(function () {
     // Listado de operaciones de remitos
     Route::get('operacionesRemitos', [TrazabilidadInsumoController::class, 'indexRemitos'])
          ->name('trazabilidad.operacionesRemitos');
 
     // Tracking (detalle) sigue igual
     Route::get('tracking/{remito?}', [TrazabilidadInsumoController::class, 'showByRemito'])
          ->name('trazabilidad.tracking');
 });
 
 