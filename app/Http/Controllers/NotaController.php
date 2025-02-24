<?php

namespace App\Http\Controllers;

use App\Models\Notas;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index()
    {
        $notas = Notas::all();
        return view("nota", compact('notas'));
    }

  

    public function update(Request $request, Notas $nota)
    {
        $request->validate([
            'no_deNota' => 'required|string|max:255',
            'contacto' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'fecha' => 'required|date',
            'diseñadorCargo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'entregaEn' => 'required|string|max:255',
            'tipopago' => 'required|string|max:255',
            'iva' => 'required|numeric',
            'total' => 'required|numeric',
            'anticipo' => 'required|numeric',
            'porPagar' => 'required|numeric',
            'cantidad' => 'required|integer',
            'costo' => 'required|numeric',
        ]);

        $nota->update($request->all());

        //return redirect()->route('notas.index')->with('success', 'Nota actualizada correctamente');
    }

    public function destroy(Notas $nota)
    {
        $nota->delete();

        //return redirect()->route('notas.index')->with('success', 'Nota eliminada correctamente');
    }
}
