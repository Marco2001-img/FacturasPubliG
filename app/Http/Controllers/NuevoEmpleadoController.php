<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuevoEmpleadoController extends Controller
{
    public function index()
    {
        return view("agregarEmpleado");
    }

    public function store(Request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'nombre_empleado' => 'required|string|max:40',
            

        ]);


    }
}
