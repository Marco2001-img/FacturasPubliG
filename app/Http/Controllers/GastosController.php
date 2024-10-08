<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GastosController extends Controller
{
    public function index()
    {
        return view("gastos");
    }
}
