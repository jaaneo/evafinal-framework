<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SucursalController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('producto/{producto}/ver', [ProductoController::class, 'show'])->name('producto.show');
Route::get('producto/registrar', [ProductoController::class, 'create'])->name('producto.create');
Route::post('producto/guardar', [ProductoController::class, 'store'])->name('producto.store');
Route::get('producto/mostrar', [ProductoController::class, 'index'])->name('producto.index');
Route::get('producto/{producto}/editar', [ProductoController::class, 'edit'])->name('producto.edit');
Route::put('producto/{producto}/actualizar', [ProductoController::class, 'update'])->name('producto.update');
Route::delete('producto/{producto}/eliminar', [ProductoController::class, 'destroy'])->name('producto.destroy');

Route::get('sucursal/{sucursal}/ver', [SucursalController::class, 'show'])->name('sucursal.show');
Route::get('sucursal/registrar', [SucursalController::class, 'create'])->name('sucursal.create');
Route::post('sucursal/guardar', [SucursalController::class, 'store'])->name('sucursal.store');
Route::get('sucursal/mostrar', [SucursalController::class, 'index'])->name('sucursal.index');
Route::get('sucursal/{sucursal}/editar', [SucursalController::class, 'edit'])->name('sucursal.edit');
Route::put('sucursal/{sucursal}/actualizar', [ScursalController::class, 'update'])->name('sucursal.update');
Route::delete('sucursal/{sucursal}/eliminar', [SucursalController::class, 'destroy'])->name('sucursal.destroy');