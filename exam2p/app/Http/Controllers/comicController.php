<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorComic;

class comicController extends Controller
{
    public function metodoComic() {
        return view('welcome');
    }

    public function metodoComicV(validadorComic $req){

        return redirect('/')->with('Registro','Tu registro ha sido exitoso');

    }
}
