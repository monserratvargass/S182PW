<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validadorFormDiario;

use DB;
use Carbon\Carbon;

class controllerCRUDd extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $consulRecuerdos= DB::table('tb_recuerdos')->get();
        return view('recuerdos',compact('consulRecuerdos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorFormDiario $request)
    {
        //
        DB::table('tb_recuerdos')->insert([
            "titulo"=>$request->input('txtTitulo'),
            "recuerdo"=>$request->input('txtRecuerdo'),
            "fecha"=>Carbon::now(),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        
        return redirect('/recuerdo/create')->with('Registro','Tu registro ha sido exitoso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorFormDiario $request, string $id)
    {
        //querybuilder acceder a traves del
        DB::table('tb_recuerdos')->where('id',$id)->update([
            "titulo"=>$request->input('txtTitulo'),
            "recuerdo"=>$request->input('txtRecuerdo'),
            //"fecha"=>Carbon::now(), no se necesita
            //"created_at"=>Carbon::now(), solo se utiliza cuando se inserta
            "updated_at"=>Carbon::now(),

        ]);

        return redirect('/recuerdo/create')->with('Registro','Tu registro ha sido modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
