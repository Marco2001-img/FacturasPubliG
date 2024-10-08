<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsertarProveedoresController extends Controller
{
    public function index()
    {
        return view("agregarProveedor");
    }
}
