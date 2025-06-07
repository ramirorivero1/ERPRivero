<?php
// app/Models/RegistroPacienteHabitacion.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroPacienteHabitacion extends Model
{
    protected $table = 'Registro_Paciente_Habitacion';
    public $timestamps = false;
    protected $fillable = ['paciente_id','habitacion_id','fecha_entrada','fecha_salida'];
}
