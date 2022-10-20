@extends('adminlte::page')

@section('title', 'Respuestas')

@section('content_header')
    <div class="callout callout-info">
        @livewire('select-d-m-p', ['respuesta' => $respuesta, 'accion'=>'editar'])
    </div>
    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
        <div class="card-tools">
            <a class="btn btn-info" href="{!! route('admin.encuesta.respuesta.index', [$encuesta->id]) !!}" title="Ir a Encuesta">
                Encuesta
            </a>
            <a class="btn btn-info" href="{!! route('admin.encuesta.respuesta.show', [$encuesta->id, $respuesta->id]) !!}" title="Ir a Ver Respuesta">
                Ver Respuesta
            </a>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-header d-flex p-0">
            <h3 class="card-title p-3">
                @if ($respuesta->enc_realizada == 'si')
                    <span class="bg-olive p-2">Con respuesta</span>
                @else
                    <span class="bg-danger p-2">Sin respuesta</span>
                @endif
            </h3>
            <ul class="nav nav-pills ml-auto p-2">
                <li class="nav-item"><a class="nav-link active" href="#tab_2" data-toggle="tab">Ingresar Datos</a></li>
                <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Editar Respuesta</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active" id="tab_2">
                    @include('encuestas.respuestas.insertardatos')
                </div>

                <div class="tab-pane" id="tab_3">
                    @include('encuestas.respuestas.editarrespuesta')
                </div>

            </div>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/admin_custom.css') }}">
    @livewireStyles
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css"> --}}

@stop

@section('js')
    @livewireScripts
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.0/pikaday.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{asset('js/flatpickr/es.js')}}"></script>
    @section('plugins.Toastr', true)

<script>
   document.addEventListener('DOMContentLoaded', function(){
       flatpickr(document.getElementsByClassName('flatpickr'),{
            enableTime: false,
            dateFormat: 'Y-m-d',
            locale: 'es'
       })
       
   });
   //mensajes instantaneos
   window.livewire.on('alert', param => {
    toastr[param['type']](param['message'], param['type']);
   });

   //mostrar nombre file input
   $('.custom-file-input').on('change', function(event) {
        var inputFile = event.currentTarget;
        $(inputFile).parent()
            .find('.custom-file-label')
            .html(inputFile.files[0].name);
    });

</script>
@stop
