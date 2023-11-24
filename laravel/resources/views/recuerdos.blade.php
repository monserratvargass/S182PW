@extends('layouts.plantilla') 

@section('titulo','Recuerdos')

@section('contenido')

<h1 class="display-1 text-center text-danger mt-5">Recuerdos</h1>

@if(session()->has('confirmacion'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> {{ session('confirmacion') }} </strong> <!-- mandar llamar un echo -->
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif

@include('partials.pagination')



@foreach ($consulRecuerdos as $item)

<div class="card w-75 mb-3 mt-5">
    <div class="card-body">
      <h5 class="card-title fw-semibold">{{ $item->titulo }}</h5>
      <p class="card-text fst-italic">{{ $item->fecha }}</p>
      <p class="card-text fst-italic">{{ $item->recuerdo }}</p>
      <!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editar{{ $item->id }}">
  Editar
</button>
<button href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarRecuerdoModal{{ $item->id }}">Eliminar</button>
    </div>
  </div>
@include('partials.modal')
@endforeach

@endsection