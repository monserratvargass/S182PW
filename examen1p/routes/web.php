<?php

use Illuminate\Support\Facades\Route;

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
    return view('inicio');
});

Route::get('/vista1', function () {
    return view('vista1');
});

Route::view('/vista2', 'vista2')->name('rutavista2');
Route::view('/vista3', 'vista3');

Route::view('/formulario', 'formulario')->name('rutaformulario');