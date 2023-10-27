@extends('layouts.plantilla')

@section('titulo','Registro Libros')

@section('contenido')

@include('sweetalert::alert')

<div class="container mt-5 col-md-6">
  {{-- Mensajes de alerta con sweetalert --}}
  
  @if(session()->has('Registro'))
  <script>
  Swal.fire({
    'Exitoso',
    'Registro exitoso', /* text: {{session('Registro')}}, */
    'success'
  });
</script>
  @endif

 /*  @if($errors->any())
  @foreach ($errors->all() as $error)

  swal.fire({
    title: "Título",
    text: {{ $error }},
    icon: "error"
  });
  

  @endforeach
  @endif */

  @if($errors->any())
  @foreach ($errors->all() as $error) <!-- proceso de varios errores  -->

  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong> {{ $error }} </strong> <!--  -->
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  
  @endforeach
  @endif

<form method="POST" action="/guardarRegistro">
  @csrf {{-- Crear token de seguridad, este es para cada uno de los formularios --}}
    <div class="mb-3">
      <label class="form-label">ISBN</label>
      <input type="number" name="ISBN" class="form-control">
      <p class="text-danger">{{$errors->first('ISBN')}}</p>
    </div>
    <div class="mb-3">
      <label class="form-label">Titulo</label>
      <input type="text" name="txtTitulo" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Autor</label>
        <input type="text" name="txtAutor" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Paginas</label>
        <input type="number" name="pages" class="form-control">
        <p class="text-danger">{{$errors->first('pages')}}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Editorial</label>
        <input type="text" name="txtEditorial" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Email de editorial</label>
        <input type="email" name="txtEmail" class="form-control">
        <p class="text-danger">{{$errors->first('txtEmail')}}</p>
      </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div> {{-- div container --}}
@endsection