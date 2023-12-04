<?php

namespace App\Http\Controllers;

use App\Models\empresas;
use App\Models\personas;
use App\Models\domicilios;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allcompras= empresas::all(); //Hacer un select con un modelo
        return view('COMPRAS.comprasConsultarProveedores',compact('allcompras')); //Conpact: 
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
                //PERSONA
                $Nombre=$request->txtNombre;
                $AP=$request->txtAP;
                $AM=$request->txtAM;
        
                //DOMICILIO
                $Estado=$request->txtEstado;
                $Municipio=$request->txtMunicipio;
                $Colonia=$request->txtColonia;
                $Calle=$request->txtCalle;
                $Numero=$request->txtNumero;
        
                $addProv=new empresas();
                $addProv->razon_social=$request->txtRZ;
                $addProv->telefono=$request->txtTel;
                $addProv->correo=$request->txtCorreo;
        
                $personas=new personas();
                $personas->nombre=$Nombre;
                $personas->ap=$AP;
                $personas->am=$AM;
        
                $dom=new domicilios();
                $dom->estado=$Estado;
                $dom->municipio=$Municipio;
                $dom->colonia=$Colonia;
                $dom->calle=$Calle;
                $dom->num_domicilio=$Numero;
        
        
                $personas->save();
        
                $dom->save();
        
        
                $addProv->id_persona=$personas->id;
        
                $addProv->id_domicilio=$dom->id;
        
                $addProv->save();
        
                return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(compras $compras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(compras $compras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, compras $compras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(compras $compras)
    {
        //
    }
}
