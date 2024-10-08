<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuevaNotaController extends Controller
{
    public function index()
    {
        return view("crearNota");
    }

}
