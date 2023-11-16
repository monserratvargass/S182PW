<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\libreriaController; /* Importar lo del controlador */
use App\Http\Controllers\controllerCRUDd;

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

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/registroLibro', function () {
    return view('registroLibro');
}); */

/* Rutas por controlador individuales */

Route::get('/', [libreriaController::class,'metodoPrincipal'])->name('rutaPrincipal');

//Route::get('/registroLibro', [libreriaController::class,'metodoRegistroLibro'])->name('rutaRegistroL');

//Rutas controllerCRUD
Route::get('/recuerdo/create', [controllerCRUDd::class,'create'])->name('recuerdo.create');

/* Crear una ruta de tipo POST */

//Route::post('/guardarRegistro', [libreriaController::class,'metodoGuardarLibro'])->name('guardarLibro');

//Rutas controllerCRUD
Route::post('/recuerdo', [controllerCRUDd::class,'store'])->name('recuerdo.store');