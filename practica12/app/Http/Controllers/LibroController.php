<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Crear una instancia
        $allbooks= libro::all(); //Hacer un select con un modelo
        return view('libros.index',compact('allbooks')); //Conpact: 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addLibro=new libro();
        $addLibro->titulo=$request->txtTitulo;
        $addLibro->autor=$request->txtAutor;
        $addLibro->paginas=$request->txtPages;
        $addLibro->anio=$request->txtYear;
        $addLibro->save();

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $uptlibro=libro::find($id);
        $uptlibro->titulo=$request->txtTitulo;
        $uptlibro->autor=$request->txtAutor;
        $uptlibro->paginas=$request->txtPages;
        $uptlibro->anio=$request->txtYear;

        $uptlibro->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deslibro=libro::find($id);
        $deslibro->delete();

        return redirect()->back();
    }
}
