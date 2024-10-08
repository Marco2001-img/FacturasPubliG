<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuevoEmpleadoController extends Controller
{
    public function index()
    {
        return view("agregarEmpleado");
    }
}
