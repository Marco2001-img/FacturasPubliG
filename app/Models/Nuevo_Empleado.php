<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nuevo_Empleado extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_empleado','apellido_materno','apellido_paterno','nombre_banco','numero_cuenta','alias_banco','salario','cargo'];
}
