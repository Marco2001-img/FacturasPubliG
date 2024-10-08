<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgregarProductoController extends Controller
{
    public function index()
    {
        return view("agregarProducto");
    }
}
