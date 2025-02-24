<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_deNota',
        'contacto',
        'telefono',
        'fecha',
        'diseñadorCargo',
        'descripcion',
        'entregaEn',
        'tipopago',
        'iva',
        'total',
        'anticipo',
        'porPagar',
        'cantidad',
        'NoFactura',
        'descProducto',
        'costo',
    ];
}
