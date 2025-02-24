<?php

namespace App\Http\Controllers;

use App\Models\NuevoPago;
use Illuminate\Http\Request;

class ActualizaInfoController extends Controller
{
    public function edit($id)
    {
        $pago = NuevoPago::findOrFail($id);
        return view('ActualizarPago' ,compact('pago'));
    }

    public function update(Request $request, $id) {
        $pago = NuevoPago::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha' => 'required|date',
            'precio' => 'required|numeric|min:0',
        ]);

        $pago->update($request->all());
        return redirect()->route('verPagos')->with('actualizarPago', 'Pago actualizado correctamente!');
    }
}
