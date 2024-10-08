<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerProveedoresController extends Controller
{
    public function index()
    {
        return view("verProveedor");
    }
}
