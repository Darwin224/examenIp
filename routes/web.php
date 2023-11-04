<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorioController;
use App\Http\Controllers\ContactoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/directorioInicio',[DirectorioController::class, 'index'])->name('directorio.inicio');
Route::get('/directorioCrear',[DirectorioController::class, 'crear'])->name('directorio.crear');
Route::get('/directorioBuscar',[DirectorioController::class, 'search'])->name('directorio.search');
Route::get('/directorioVer/{id}',[DirectorioController::class, 'show'])->name('directorio.show');
Route::get('/directorioEliminar',[DirectorioController::class, 'delete'])->name('directorio.delete');
Route::post('/directorioInsertar',[DirectorioController::class, 'insertar'])->name('directorio.insertar');
Route::post('/directorioBusqueda/{correo}',[DirectorioController::class, 'buscar'])->name('directorio.buscar');


//Contacto
Route::get('/contactoAgregar/{id}', [ContactoController::class, 'agregar'])->name('contacto.agregar');
Route::post('/contactoGuardar', [ContactoController::class, 'guardar'])->name('contacto.guardar');

