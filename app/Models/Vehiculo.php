<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $table = 'vehiculos';
    protected $fillable = ['Nombres','Apellidos','DNI','placa','Tipo_v','Fecha_e','Fecha_s','H_Entrada','H_Salida','p_p'];
}
