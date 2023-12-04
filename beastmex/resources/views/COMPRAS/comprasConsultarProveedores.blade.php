@extends('layouts.plantilla')

@section('titulo','Principal')

@section('contenido')

@include('COMPRAS.comprasRegistroProveedores')

<div class="container mt-5 col-md-6">
    <p class="fw-bolder fs-3 text-center">COMPRAS</p>
    <p class="fw-medium fs-5 text-center">CONSULTAR PROVEEDORES</p>
</div>

<div class="container mt-5 col-md-6">
<table class="table table-dark table-striped">
    <button type="button" class="btn btn-success m-5" data-bs-toggle="modal" data-bs-target="#comprasRegistroProveedores">
        <i class="bi bi-floppy"></i>  Nuevo Proveedor
    </button>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Estado</th>
        <th scope="col">Municipio</th>
        <th scope="col">Colonia</th>
        <th scope="col">Calle</th>
        <th scope="col">Numero</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($allcompras as $item)
      <tr>
        <th scope="row">{{$item->id_empresa}}</th>
        <td>{{$item->estado}}</td>
        <td>{{$item->municipio}}</td>
        <td>{{$item->colonia}}</td>
        <td>{{$item->calle}}</td>
        <td>{{$item->num_domicilio}}</td>
      </tr>
      <tr>

        <div class="btn-group" role="group">
            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-list-stars"></i> Opciones
            </button>
            <ul class="dropdown-menu">
                <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#update{{$item->id_empresa}}">
                    <i class="bi bi-pencil-square"></i> - Editar 
                </button>
                <button type="button" class="btn btn-ñ danger m-1" data-bs-toggle="modal" data-bs-target="#delete{{$item->id_empresa}}">
                    <i class="bi bi-trash"></i> - Borrar 
                </button>
            </ul>
        </div>

      </tr>
      @endforeach
    </tbody>
</table>
</div>
@endsection