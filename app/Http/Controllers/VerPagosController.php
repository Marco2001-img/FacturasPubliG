<?php

namespace App\Http\Controllers;

use App\Models\NuevoPago;
use Illuminate\Http\Request;

class VerPagosController extends Controller
{
    public function index()
    {
        $pagos=NuevoPago::all();
        return view("Mispagos", compact('pagos'));
    }

    public function destroy($id) {
       // $producto = NuevoPago::findOrFail($id);
        //$producto->delete();
        NuevoPago::destroy($id);
         return redirect()->route('verPagos')->with('elliminada', 'Pago Eliminado correctamente!');
    }
}
