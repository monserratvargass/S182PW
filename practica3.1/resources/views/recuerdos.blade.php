@extends('layouts.plantilla') 

@section('titulo','Recuerdos')

@section('contenido')

<h1 class="display-1 text-center text-danger mt-5">Recuerdos</h1>

<x-alerta2 color="info"/>

<x-alerta2/>

@include('partials.pagination')

@endsection