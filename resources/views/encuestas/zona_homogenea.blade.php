@extends('adminlte::page')

@section('title', 'Global Zonas Homogeneas')

@section('content_header')
    <h1>{{$encuesta->descripcion}}</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Asignar Zona Homogenea </h3>
                </div>
                <div class="card-body">
                    @include('partes.alertas')
                    <div>
                        @livewire('encuestas.respuestas.actualizar-zonah')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/admin_custom.css') }}">
    @livewireStyles
@stop

@section('plugins.Toastr', true)

@section('js')

@livewireScripts
<script>
    //mensajes instantaneos
   window.livewire.on('alert', param => {
    toastr[param['type']](param['message'], param['type']);
   });
</script>
@stop
