@extends('adminlte::page')

@section('title', 'Ver Formulario')

@section('content_header')
    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
        <div class="card-tools">
            <a class="btn btn-info" href="{!! route('admin.encuesta.respuesta.index', [$respuesta->encuesta_id]) !!}" title="Ir a Encuesta">
                Encuesta
            </a>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-header d-flex p-0">
            <h3 class="card-title p-3">
                Ver Formulario de encuesta
            </h3>
            <ul class="nav nav-pills ml-auto p-2">
                <li class="nav-item"><a class="nav-link active" href="#tab_2" data-toggle="tab">Ficha A</a></li>
                <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Ficha B</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
            @php
                $bloques = $respuesta->bloques;
                $b1 = $bloques[0]??[];
                $b2 = $bloques[1]??[];
                $b3 = $bloques[2]??[];
                $mejoras = $respuesta->mejoras;
                $m1 = $mejoras[0]??[];
                $m2 = $mejoras[1]??[];
                $m3 = $mejoras[2]??[];
            @endphp
                <div class="tab-pane active" id="tab_2">
                    @include('fichas/ficha_a')
                </div>

                <div class="tab-pane" id="tab_3">
                    @include('fichas/ficha_b')
                </div>

            </div>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/admin_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fichas/ficha_a.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fichas/ficha_b.css') }}">
@stop

@section('js')

@stop
