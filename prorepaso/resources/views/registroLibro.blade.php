@extends('layouts.plantilla')

@section('titulo','Registro Libros')

@section('contenido')
<div class="container mt-5 col-md-6">
<form>
    <div class="mb-3">
      <label class="form-label">ISBN</label>
      <input type="text" name="ISBN" class="form-control">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
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
        <input type="text" name="pages" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Editorial</label>
        <input type="text" name="txtEditorial" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Email de editorial</label>
        <input type="text" name="txtEmail" class="form-control">
      </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div> {{-- div container --}}
@endsection