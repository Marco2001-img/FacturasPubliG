<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuevoPagoController extends Controller
{
    public function index()
    {
        return view("nuevoPago");
    }
}
