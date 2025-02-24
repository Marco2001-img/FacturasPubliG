<?php

namespace App\Http\Controllers;

use App\Models\NuevoPago;
use Illuminate\Http\Request;

class NuevoPagoController extends Controller
{
    public function index()
    {
        return view("nuevoPago");
    }

    public function store(Request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha' => 'required|date',
            'precio' => 'required|numeric|min:0',
        ]);

        $producto = NuevoPago::create($request->all());
        return redirect()->route('pagos.index')->with('success', '¡Producto agregado correctamente!');
        //return response()->json($producto, 201);
    }
}
