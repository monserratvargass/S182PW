@extends('layouts.plantilla') 

@section('titulo','Recuerdos')

@section('contenido')

<h1 class="display-1 text-center text-danger mt-5">Recuerdos</h1>

@include('partials.pagination')

@include('partials.modal')

@foreach ($consulRecuerdos as $recuerdo)

<div class="card w-75 mb-3 mt-5">
    <div class="card-body">
      <h5 class="card-title fw-semibold">{{ $recuerdo->titulo }}</h5>
      <p class="card-text fst-italic">{{ $recuerdo->fecha }}</p>
      <p class="card-text fst-italic">{{ $recuerdo->recuerdo }}</p>
      <!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editar">
  Editar
</button>
      <a href="#" class="card-link">Borrar</a>
    </div>
  </div>
    
@endforeach

@endsection