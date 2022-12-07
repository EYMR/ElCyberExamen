<title> Ingresar </title>
@extends('plantilla')
@section('contenido')

@if(session()->has('confirmacion'))
    {!! "<script> Swal.fire('Listo', 'Tu recuerdo llego al controlador', 'success') </script>"!!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert"> 
        <strong>{{session('confirmacion')}} </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<h1 class="mt-4 display-1 text-center"> Ingresar Usuario en Computadora </h1>
<br>
<div class="container mt-5 col-md-6">
    <div>
        <div class="text-center">
            Usuarios en El Cyber <i class="bi bi wechat"></i>
        
        </div>

        @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <strong>Formulario Incompleto </strong>{{$error}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
            </div>
            @endforeach
        @endif

        <div>
            <form method="POST" action="{{ route('ciber.store') }}">
                @csrf 
                <div>
                    <label class="form-label" name="labelTitulo">  Usuario </label>
                    <input type="text" class="form-control" name="txtUsuario" value="{{ old('txtUsuario')}}">
                    <p class="fw-bold text-danger"> {{$errors->first('txtUsuario')}}</p>
                </div>
                <div> 
                    <label class="form-label" name="labelRecuerdo"> Número de Computadora </label>
                    <textarea class="form-control" name="txtComputadora" rows="1" value="{{ old('txtComputadora')}}"></textarea>
                    <p class="fw-bold text-danger"> {{$errors->first('txtComputadora')}}</p>
                </div>

                <div> 
                    <label class="form-label" name="labelRecuerdo">Tiempo</label>
                    <textarea class="form-control" name="txtTiempo" rows="1" value="{{ old('txtTiempo')}}"></textarea>
                    <p class="fw-bold text-danger"> {{$errors->first('txtTiempo')}}</p>
                </div>

                <div>
                    <button type="submit" name="btnGuardar"> Guardar </button>
                </div>
            </form>
        </div>
    </div>
</div>




@stop 
