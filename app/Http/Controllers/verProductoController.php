<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class verProductoController extends Controller
{
    public function index()
    {
        return view("verProducto");
    }
}
