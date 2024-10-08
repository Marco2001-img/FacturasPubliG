<?php

use App\Http\Controllers\AgregarProductoController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ContabilidadController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\EntradasController;
use App\Http\Controllers\FacturasController;
use App\Http\Controllers\GastosController;
use App\Http\Controllers\InsertarProveedoresController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\NuevaNotaController;
use App\Http\Controllers\NuevoEmpleadoController;
use App\Http\Controllers\NuevoPagoController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\TodasFacturasController;
use App\Http\Controllers\TodosClientesController;
use App\Http\Controllers\VerEmpleadoController;
use App\Http\Controllers\VerPagosController;
use App\Http\Controllers\verProductoController;
use App\Http\Controllers\VerProveedoresController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index']);

Route::get('/Agregarclientes',[ClientesController::class, 'index']);
Route::get('/TodosClientes', [TodosClientesController::class, 'index']);

Route::get('/Todasnotas', [NotaController::class, 'index']);
Route::get('/crearNota', [NuevaNotaController::class, 'index']);

Route::get('/Nuevafactura', [FacturasController::class, 'index']);
Route::get('/todasFacturas', [TodasFacturasController::class, 'index']);

Route::get('/Vercontabilidad', [ContabilidadController::class, 'index']);
Route::get("/entradas", [EntradasController::class, 'index']);
Route::get("/gastos", [GastosController::class, 'index']);

Route::get('/empleados', [EmpleadosController::class, 'index']);
Route::get('/agregarEmpleados', [NuevoEmpleadoController::class, 'index']);
Route::get('/verEmpleados', [VerEmpleadoController::class, 'index']);

Route::get('/productos', [ProductosController::class, 'index']);
Route::get('/insertarProducto', [AgregarProductoController::class, 'index']);
Route::get('/verProducto', [verProductoController::class, 'index']);

Route::get('/proveedores', [ProveedoresController::class, 'index']);
Route::get('/agregarProveedor', [InsertarProveedoresController::class, 'index']);
Route::get('/verProveedor', [VerProveedoresController::class, 'index']);

Route::get('/pagos', [PagosController::class, 'index']);
Route::get('/NuevoPago', [NuevoPagoController::class, 'index']);
Route::get('/verPago', [VerPagosController::class, 'index']);

Route::get('/salir', [LoginController::class, 'index']);
