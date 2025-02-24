<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function index($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        return view('ActualizarProveedor',compact('proveedor'));
    }

    public function update(Request $request, $id) {
        $proveedor = Proveedor::findOrFail($id);

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

        $proveedor->update($request->all());
        dd($request->all());
       // return response()->json($proveedor, 201);
    }
}
