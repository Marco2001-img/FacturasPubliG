<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class InsertarProveedoresController extends Controller
{
    public function index()
    {
        return view("agregarProveedor");
    }

    public function store(Request $request) {
       $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:proveedores,email',
            'telefono' => 'required|numeric',
            'contacto' => 'nullable|string|max:255',
            'vende' => 'required|string',
            'web' => 'nullable|string',
            'titular' => 'required|string|max:255',
            'nombre_banco' => 'required|string|max:255',
            'numero_cuenta' => 'required|string',
            'rfc' => 'required|string|unique:proveedores,rfc',
        ]);

        $producto= Proveedor::create($request->all());
        return redirect()->route('nuevoPrveedor.store')->with('nuevoProveedor', '¡Proveedor agregado correctamente!');
       // return response()->json($producto, 201);

        
      
    }
}
