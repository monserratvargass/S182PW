@extends('layouts.plantilla')
    
@section('titulo','Inicio') //se abre y se cierra
    


@section('contenido')

<x-alerta color="secondary"/>

<x-alerta color="secondary">

    <x-slot name="title">
        Titulo 1:
    </x-slot>

    Este es un mensaje de alerta de bootstrap.
</x-alerta>

<x-alerta>

    <x-slot name="title">
        Titulo 2:
    </x-slot>

    Este es un segundo mensaje de alerta de bootstrap
</x-alerta>

<h1 class="display-1 text-center text-danger mt-5">Home</h1>

@endsection