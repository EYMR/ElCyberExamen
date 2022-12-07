<title> Consultas: </title>
@extends('plantilla')
@section('contenido')

<h1 class="mt-4 display-1 text-center text-white"><i class="bi bi-card-checklist"></i> Recuerdos </h1>
@foreach ($consultaCiber as $consulta)
<div class="card m-5">
    <h5 class="card-header text-primary"><i class="bi bi-calendar3"></i>{{ $consulta->fecha }}</h5>
    <div class="card-body">
        <h5 class="card-title fw-semibold"> Usuario: {{ $consulta->usuario }} </h5>
        <p class="card-text fw-light"> Número de Computadora: {{ $consulta->NComputadora }}</p>
        <p class="card-text fw-light">Tiempo Rentado: {{ $consulta->tiempo }}</p>
    </div>
    <div class="card-footer">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{route('ciber.edit', $consulta->idGuardar)}}" class="btn btn-outline-primary">Editar <i class="bi bi-pencil"></i></a>
            <a href="{{route('ciber.confirm', $consulta->idGuardar)}}" class="btn btn-outline-danger">Eliminar <i class="bi bi-pencil"></i></a>

        </div>
    </div>
</div>
@endforeach
</div>
@stop 
