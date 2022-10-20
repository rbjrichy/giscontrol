@extends('adminlte::page')

@section('title', 'Importar Excel')

@section('content_header')
<h1>Modulo de importación de archivos excel</h1>
@stop

@section('content')
<div class="col-md-12">
    @if (Session::has('num_reg_read'))
        <h6>total registros leídos: {{session()->pull('num_reg_read')}}</h6>
        <h6>total registros insertados: {{session()->pull('num_reg_insert')}}</h6>
    @endif
    @include('partes.alertas')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Encuestas</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
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
                                <a class="btn btn-sm btn-warning" href="{!! route('admin.excel.subir.excel', [$encuesta->id]) !!}">
                                    <i class="far fa-file-excel">Importar</i>
                                </a>
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
<script>
    $('.custom-file-input').on('change', function(event) {
        var inputFile = event.currentTarget;
        $(inputFile).parent()
            .find('.custom-file-label')
            .html(inputFile.files[0].name);
    });

</script>
@stop
