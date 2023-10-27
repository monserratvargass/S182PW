<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class libreriaController extends Controller
{
    //Creacion de metodos por vista
    public function metodoPrincipal(){
        return view('welcome');
    }

    public function metodoRegistroLibro(){
        return view('registroLibro');
    }

    /* Crear un nuevo metodo o funcion en el controlador */

    public function metodoGuardarLibro(Request $req){
        return $req->all();
    }
}
