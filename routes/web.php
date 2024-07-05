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

Route::get('/directorio', [DirectorioController::class, 'index'])->name('directorio.inicio');

Route::get('/directorio/crearEntrada', [DirectorioController::class, 'create'])->name('directorio.create');

Route::post('/directorio/store', [DirectorioController::class, 'store'])->name('directorio.store');

Route::get('/directorio/buscar', [DirectorioController::class, 'buscar'])->name('directorio.buscar');

Route::post('/directorio/search', [DirectorioController::class, 'search'])->name('directorio.search');

Route::get('/directorio/destroy/{id}', [DirectorioController::class, 'destroy'])->name('directorio.destroy');

Route::get('/directorio/contactos/mostrar/{id}', [ContactoController::class, 'mostrar'])->name('contacto.mostrar');

Route::get('/directorio/contactos/create/{id}', [ContactoController::class, 'create'])->name('contacto.create');

Route::post('/directorio/contactos/store', [ContactoController::class, 'store'])->name('contacto.store');

Route::get('/directorio/contactos/destroy/{id}', [ContactoController::class, 'destroy'])->name('contacto.destroy');

