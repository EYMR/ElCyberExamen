@extends('plantilla')
@section('contenido')

@if(session()->has('confirmacion'))
{!! "<script>
    Swal.fire('Listo', 'Tu usuario llego al controlador', 'success')

</script>"!!}
<div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
    <strong>{{session('confirmacion')}} </strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<h1 class="mt-4 display-1 text-center"> Editar Usuario </h1>
<br>


@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
    <strong>Formulario Incompleto </strong>{{$error}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
</div>
@endforeach
@endif

<div class="container mt-5 col-md-6">
    <div>
        <div class=" card-header text-center text-primary">
            Correción de Usuarios <i class="bi bi-wechat"></i>
        </div>

        <div class="card-body">
            <div>
                <form method="POST" action="{{ route ('ciber.update', $guardarid ->idGuardar)}}">
                    @csrf
                    {!! method_field ('PUT') !!}
                    <div class="mb-3">
                        <label class="form-label" name="labelTitulo"> Título </label>
                        <input type="text" class="form-control" name="txtUsuario" value="{{ $guardarid ->usuario }}">
                        <p class="fw-bold text-danger"> {{$errors->first('txtUsuario')}}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" name="labelRecuerdo">Computadora: </label>
                        <input class="form-control" name="txtComputadora" rows="3"
                            value="{{ $guardarid ->NComputadora }}"></input>
                        <p class="fw-bold text-danger"> {{$errors->first('txtComputadora')}}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" name="labelRecuerdo">Tiempo: </label>
                        <input class="form-control" name="tiempo" rows="3"
                            value="{{ $guardarid ->tiempo }}"></input>
                        <p class="fw-bold text-danger"> {{$errors->first('txtTiempo')}}</p>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-info" name="btnActualizar"> Actualizar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





@stop
