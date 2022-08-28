<?php

use App\Http\Controllers\ProductoController;
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

Route::get('producto/registrar', [ProductoController::class, 'create'])->name('producto.create');
Route::post('producto/guardar', [ProductoController::class, 'store'])->name('producto.store');
Route::get('producto/mostrar', [ProductoController::class, 'index'])->name('producto.index');
Route::get('producto/{producto}/editar', [ProductoController::class, 'edit'])->name('producto.edit');


