<title> Home  </title>

@extends('plantillas')
@section('contenido')
<h1 class="mt-4 display-1 text-center"> Home </h1>

<div class="card mb-4">
    <h5 class="card-header">El Cyber</h5>
    <div class="card-body">
      <h5 class="card-title">Control de Usuarios</h5>
      <a href="{{ route('ciber.create') }}" class="btn btn-primary">Ingresar</a>
    </div>
  </div>

@stop 

