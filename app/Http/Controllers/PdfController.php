<?php

namespace App\Http\Controllers;

use App\Models\Notas;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generate()
    {
        $data = [
            'name' => 'John Doe',
            'age' => 30,
        ];
    
        $pdf = PDF::loadView('pdf.simple', compact('data'));
    
        return $pdf->download('simple.pdf');
    }
}
