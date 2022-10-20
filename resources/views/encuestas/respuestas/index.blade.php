@extends('adminlte::page')

@section('title', 'Respuestas')

@section('content_header')
<h1>Respuestas encuesta </h1>
@stop

@section('content')
<div class="row d-block">
    @include('partes.alertas')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de respuestas</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @can('admin.producto.create')
            <a class="btn btn-sm btn-primary mb-3" href="{!! route('admin.producto.create') !!}">
                Nuevo Producto
            </a>
            @endcan
            <div class="row">
                <table class="table table-sm" id="tbl-datos" style="min-width: 500px">
                    <thead>
                        <tr>
                            <th>Dis</th>
                            <th>Man</th>
                            <th>Pre</th>
                            <th>Centro Urbano</th>
                            <th>Propietario</th>
                            <th>Tipo Inmu</th>
                            <th>Encuestador</th>
                            <th style="width: 10px">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($respuestas as $respuesta)
                            <tr>
                                <td>{{$respuesta->dis_lev}}</td>
                                <td>{{$respuesta->man_lev}}</td>
                                <td>{{$respuesta->pre_lev}}</td>
                                <td>{{$respuesta->centro_urbano}}</td>
                                <td>{{$respuesta->nomb_razon_social}}</td>
                                <td>{{$respuesta->tipo_inmueble}}</td>
                                <td>{{$respuesta->nombre_usuario}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-info" href="{!! route('admin.encuesta.respuesta.show', [$encuesta->id, $respuesta->id]) !!}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a class="btn btn-sm btn-primary" href="{!! route('admin.encuesta.respuesta.editar', [$encuesta->id, $respuesta->id]) !!}">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a class="btn btn-sm btn-success" href="{!! route('admin.encuesta.respuesta.print.show', [$respuesta->id]) !!}">
                                            <i class="fas fa-print"></i>
                                        </a>
                                            {{-- <form action="{{ route('admin.producto.destroy', [$objProducto->id]) }}" method="POST" onsubmit="return confirm('¿Esta seguro que desea eliminar el registro?');" >
                                                @csrf @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form> --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
    <script>
      $(document).ready(function(){
        $('#tbl-datos').DataTable({
          "autoWidth": false,
          "responsive": true,
          "language": {
                "url": "{{asset('vendor/datatables/es/es_es.json')}}"
              },
        });
      });
    </script>
@stop
@section('plugins.Datatables', true)
