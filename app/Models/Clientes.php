<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $fillable =['razon_social','rfc','contacto','telefono','email','calle','No_exterior','No_interior','entre_calle','Y_calle','codigo_postal'];
}
