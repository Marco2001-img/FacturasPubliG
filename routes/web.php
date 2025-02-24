<?php

use App\Http\Controllers\ActualizaInfoController;
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
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\TodasFacturasController;
use App\Http\Controllers\TodosClientesController;
use App\Http\Controllers\VerEmpleadoController;
use App\Http\Controllers\VerPagosController;
use App\Http\Controllers\verProductoController;
use App\Http\Controllers\VerProveedoresController;
use App\Models\NuevoPago;
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

//clientes
Route::get('/Agregarclientes',[ClientesController::class, 'index']);
Route::get('/TodosClientes', [TodosClientesController::class, 'index']);

//NOTAS 
Route::get('/Todasnotas', [NotaController::class, 'index']);
Route::get('/crearNota', [NuevaNotaController::class, 'index']);
Route::post('/agregarNota', [NuevaNotaController::class, 'store'])->name('notas.create');
Route::get('/generate-pdf', [PdfController::class, 'generate']); //'PdfController@generate'


//EMPLEADOS, CRUD
Route::get('/empleados', [EmpleadosController::class, 'index']);
Route::get('/agregarEmpleados', [NuevoEmpleadoController::class, 'index']);
Route::get('/verEmpleados', [VerEmpleadoController::class, 'index']);

//productos
Route::get('/productos', [ProductosController::class, 'index']);
Route::get('/insertarProducto', [AgregarProductoController::class, 'index']);
Route::get('/verProducto', [verProductoController::class, 'index']);

//Proveedores CRUD
Route::get('/agregarProveedor', [InsertarProveedoresController::class, 'index'])->name('proveedorN.index');
Route::post('/nuevoProveedor', [InsertarProveedoresController::class, 'store'])->name('nuevoPrveedor.store');
Route::get('/verProveedor', [VerProveedoresController::class, 'index'])->name('verProveedores');
Route::delete('/borrarProvedor/{id}',[VerProveedoresController::class, 'destroy'])->name('borrarProvedor.delete');
Route::get('/VistaProveedor/{id}', [ProveedoresController::class, 'index'])->name('VistaActualizar');
Route::put('/ActualizarInfo/{id}', [ProveedoresController::class, 'update'])->name('actualizarProveedor.editar');

//Nuevo pago, CRUD
Route::get('/NuevoPago', [NuevoPagoController::class, 'index'])->name('pagos.index'); ///vista agregar
Route::post('/agregarPago', [NuevoPagoController::class, 'store'])->name('productos.store');//insertar datos
Route::get('/VistAactualizarPago/{id}', [ActualizaInfoController::class, 'edit'])->name('Info.Verpago'); //vista para actualizar
Route::put('/actualizarPago/{id}', [ActualizaInfoController::class, 'update'])->name('pago.editar');// Actualizar
Route::get('/verPago', [VerPagosController::class, 'index'])->name('verPagos'); //tabla de ver pagos
Route::delete('/borrarPago/{id}', [VerPagosController::class, 'destroy'])->name('pago.borrar'); //borrar datos

//salir
Route::get('/salir', [LoginController::class, 'index']);
