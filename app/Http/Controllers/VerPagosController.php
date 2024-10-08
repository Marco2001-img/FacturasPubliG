<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerPagosController extends Controller
{
    public function index()
    {
        return view("Mispagos");
    }
}
