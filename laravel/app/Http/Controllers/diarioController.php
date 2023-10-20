<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormDiario;

class diarioController extends Controller
{
    public function metodoInicio(){
        return view('welcome');
    }

    public function metodoFormulario(){
        return view('formulario');
    }

    public function metodoRecuerdos(){
        return view('recuerdos');
    }

    public function metodoGuardar(validadorFormDiario $req){

/*         $validated = $req->validate([
            'txtTitulo' => 'required|max:2', //reglas de validacion:requerido, maximo o minimo de caracteres
            'txtRecuerdo' => 'required|min:5',
        ]); */

        return "Se esta procesando tu recuerdo";

        //return $req->all();

        /*echo"<p>";
            echo $req->path();
            echo "-";
            echo $req->method();
            echo "-";
            echo $req->ip();
            echo "-";
            echo $req->url();
        echo"</p>";*/
    
    }
}
