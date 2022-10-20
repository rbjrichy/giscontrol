@extends('adminlte::page')

@section('title', 'Encuestas')

@section('content_header')
<h1>Encuestas </h1>
@stop

@section('content')
<div class="col-md-12">
    @if (isset($num_reg_insert))
        <h1>total registros leídos: {{$num_reg_read}}</h1>
        <h1>total registros insertados: {{$num_reg_insert}}</h1>
    @endif
    @include('partes.alertas')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Enceustas</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @can('admin.user.create')
            <a class="btn btn-sm btn-primary mb-3" href="{!! route('admin.encuesta.create') !!}">
                Nuevo
            </a>
            @endcan
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Codígo</th>
                        <th>Centro Urbano</th>
                        <th>Descripción</th>
                        <th style="width: 40px">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i=0;
                    @endphp
                    @foreach ($encuestas as $encuesta)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $encuesta->codigo_cu }}</td>
                        <td>{{ $encuesta->centro_urbano }}</td>
                        <td>{{ $encuesta->descripcion}}</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-sm btn-warning" href="{!! route('admin.encuesta.respuesta.index', [$encuesta->id]) !!}">
                                    <i class="fas fa-question">Respuestas</i>
                                </a>
                                <a class="btn btn-sm btn-success" href="{!! route('admin.encuesta.global.edit', [$encuesta->id]) !!}">
                                    <i class="fas fa-globe">Global</i>
                                </a>
                            @can('admin.user.edit')
                                <a class="btn btn-sm btn-info" href="{!! route('admin.encuesta.edit', [$encuesta->id]) !!}">
                                    <i class="far fa-edit"></i>
                                </a>
                            @endcan
                            @can('admin.user.destroy')
                                <form action="{{ route('admin.encuesta.destroy', [$encuesta->id]) }}" method="POST"
                                    onsubmit='return confirm("¿Esta seguro que desea eliminar al usuario?");'>
                                    @csrf @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            @endcan
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="{{asset('/css/admin_custom.css')}}">
@stop

@section('js')

@stop
