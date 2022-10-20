@extends('adminlte::page')

@section('title', 'Importar Excel')

@section('content_header')
<h1>{{$encuesta->centro_urbano}}</h1>
@stop

@section('content')
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                Subir archivo excel
            </div>
            <div class="card-body">
                {!! Form::open(['route' => ['admin.excel.validar'], 'files' => true]) !!}
                @csrf @method('post')
                {!! Form::hidden('encuesta_id', $encuesta->id) !!}
                <div class="custom-file">
                    <input type="file" class="custom-file-input form-control-sm" id="customFile" name="fileExcel" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>
                    <label class="custom-file-label" for="customFile">Selecciona una archivo excel</label>
                </div>
                @error('fileExcel')
                    <div class="text-danger small m-1">{{ $message }}</div>
                @enderror

                <div class="mt-2">
                    <label class="text-muted" for="nameHoja">Nombre hoja excel</label>
                    <input class="form-control" type="text" name="nameHoja" id="nameHoja" value="ENCUESTAS SAN JUAN" required>
                </div>
                @error('nameHoja')
                    <div class="text-danger small m-1">{{ $message }}</div>
                @enderror
                <br><br>
                <button type=submit class="btn float-right {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                    <span class="far fa-file-excel"></span>
                    Subir
                </button>
                {!! Form::close() !!}
            </div>
            <div class="card-footer text-muted">
                Footer
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                Header
            </div>
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
            </div>
            <div class="card-footer text-muted">
                Footer
            </div>
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
