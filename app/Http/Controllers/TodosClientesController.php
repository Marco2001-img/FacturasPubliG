<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosClientesController extends Controller
{
    public function index()
    {
        return view("verClientes");
    }
}
