<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodasFacturasController extends Controller
{
    public function index()
    {
        return view("verFacturas");
    }
}
