<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::view('/', 'welcome')->name('rutainicio');
Route::view('/formulario', 'formulario')->name('rutaformulario');
Route::view('/recuerdos', 'recuerdos')->name('rutarecuerdos');*/

 
Route::get('/', [diarioController::class,'metodoInicio'])->name('rutaincio');

Route::get('/formulario', [diarioController::class,'metodoFormulario'])->name('rutaformulario');

Route::get('/recuerdos', [diarioController::class,'metodoRecuerdos'])->name('rutarecuerdos');