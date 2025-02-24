<?php

namespace App\Http\Controllers;

use App\Models\Notas;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;

class NuevaNotaController extends Controller
{
    public function index()
    {
        return view("crearNota");
      // dd('hola');
    }
    
    public function store(Request $request)
    {
        // Validar los datos del formulario (si es necesario)
       /*  $request->validate([
            'no_deNota' => 'string|max:255',
            'contacto' => 'string|max:255',
            'telefono' => 'string|max:255',
            'fecha' => 'date',
            'diseñadorCargo' => 'string|max:255',
            'descripcion' => 'string|max:255',
            'entregaEn' => 'string|max:255',
            'tipopago' => 'string|max:255',
            'iva' => 'numeric',
            'total' => 'numeric',
            'anticipo' => 'numeric',
            'porPagar' => 'numeric',
            'cantidad' => 'required|integer',
            'descProducto' => 'required|string|max:255',
            'costo' => 'required|numeric',
            'noFactura' => 'nullable|string|max:255',
        ]);
        */

       // $cantidad = (int) $request->cantidad;  // Convertir a entero
       //$costo = (float) $request->costo;      // Convertir a número flotante
       // $descProducto = trim($request->descProducto);  // Asegúrate de que es una cadena

        // Crear una nueva instancia de la nota y guardar los datos
        $sql = DB::insert("insert into notas(no_deNota,contacto,telefono,fecha,diseñadorCargo,descripcion,entregaEn,tipopago,iva,total,anticipo,porPagar,cantidad,descProducto,costo,NoFactura)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",[
       $request->no_deNota,
        $request->contacto,
        $request->telefono,
        $request->fecha ,
        $request->diseñadorCargo,
        $request->descripcion ,
        $request->entregaEn,
        $request->tipopago ,
        $request->iva ,
        $request->total ,
        $request->anticipo ,
        $request->porPagar,
       $request-> cantidad,
       $request-> descProducto ,
       $request-> costo,
        $request->noFactura
    ]);

    if($sql==true){
        return back()->with("correcto", 'insertado');
    }else{
        return back()->with("incorrecto", 'error');
    }
        
      
       // return redirect()->route('notas.index')->with('success', 'Nota creada exitosamente');
    }
  
    

}
