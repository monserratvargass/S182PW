@extends('layouts.plantilla') 

@section('titulo','Formulario')

@section('contenido')

<h1 class="display-1 text-center text-danger mt-5">Formulario</h1>
<div class="container mt-5 col-md-6">
<div class="card text-primary fs-4 fw-semibold">
    <div class="card-header text-center">
      Introduce tus recuerdos aqui...
    </div>
    <div class="card-body">
        <form method="POST" action="/guardarRecuerdo">
          @csrf
            <div class="mb-3">
              <label class="form-label">Titulo:</label>
              <input type="text" name="txtTitulo" class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label">Recuerdo:</label>
              <input type="text" name="txtRecuerdo" class="form-control">
            </div>

    </div>
    <div class="card-footer text-muted">
            <button type="submit" class="btn btn-primary">Guardar recuerdo</button>
        </form>
    </div>
  </div><!-- div tarjeta-->

</div><!-- div container-->
@endsection