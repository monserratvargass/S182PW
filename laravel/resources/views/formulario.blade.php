@extends('layouts.plantilla') 

@section('titulo','Formulario')

@section('contenido')

<h1 class="display-1 text-center text-danger mt-5">Formulario</h1>
<div class="container mt-5 col-md-6">

  @if(session()->has('confirmacion'))

  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong> {{ session('confirmacion') }} </strong> <!-- mandar llamar un echo -->
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  @endif

  @if($errors->any())
  @foreach ($errors->all() as $error) <!-- proceso de varios errores  -->

  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong> {{ $error }} </strong> <!--  -->
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  
  @endforeach
  @endif
  
<div class="card text-primary fs-4 fw-semibold">
    <div class="card-header text-center">
      Introduce tus recuerdos aqui...
    </div>
    <div class="card-body">
        <form method="POST" action="/recuerdo">
          @csrf 
            <div class="mb-3">
              <label class="form-label">Titulo:</label>
              <input type="text" name="txtTitulo" class="form-control" value="{{old('txtTitulo')}}">
              <p class="text-danger"> {{$errors->first('txtTitulo')}} </p> <!-- invocar la variable echo -->
            </div>

            <div class="mb-3">
              <label class="form-label">Recuerdo:</label>
              <input type="text" name="txtRecuerdo" class="form-control" value="{{old('txtRecuerdo')}}">
              <p class="text-danger"> {{$errors->first('txtRecuerdo')}} </p>
            </div>

    </div>
    <div class="card-footer text-muted">
            <button type="submit" class="btn btn-primary">Guardar recuerdo</button>
        </form>
    </div>
  </div><!-- div tarjeta-->

</div><!-- div container-->
@endsection