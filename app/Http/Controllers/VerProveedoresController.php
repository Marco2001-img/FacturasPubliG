<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class VerProveedoresController extends Controller
{
    public function index()
    {
        $provedores=Proveedor::all();
        return view("verProveedor", compact('provedores'));
    }

    public function destroy($id) {
        // $producto = NuevoPago::findOrFail($id);
         //$producto->delete();
         Proveedor::destroy($id);
          return redirect()->route('verProveedores')->with('elliminadoProvedor', 'Proveedor Eliminado correctamente!');
     }
}
