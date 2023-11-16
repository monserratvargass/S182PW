@extends('layouts.plantilla') 

@section('titulo','Recuerdos')

@section('contenido')

<h1 class="display-1 text-center text-danger mt-5">Recuerdos</h1>

@include('partials.pagination')

@foreach ($consulRecuerdos as $recuerdo)

<div class="card w-75 mb-3 mt-5">
    <div class="card-body">
      <h5 class="card-title fw-semibold">{{ $recuerdo->titulo }}</h5>
      <p class="card-text fst-italic">{{ $recuerdo->fecha }}</p>
      <p class="card-text fst-italic">{{ $recuerdo->recuerdo }}</p>
      <a href="#" class="btn btn-warning">Editar</a>
      <a href="#" class="card-link">Borrar</a>
    </div>
  </div>
    
@endforeach

@endsection