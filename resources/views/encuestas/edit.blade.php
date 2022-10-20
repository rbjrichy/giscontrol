@extends('adminlte::page')

@section('title', 'Editar Encuesta')

@section('content_header')
    <h1>Editar Encuesta</h1>
@stop
@section('content')
<div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card card-warning card-outline">
    <div class="card-header">
        <h3 class="card-title text-muted">Editar Encuesta</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" method="POST" action="{{ route('admin.encuesta.update',[$encuesta])}}">
        @csrf @method('PUT')
            <div class="card-body">
                @include('encuestas.partials.campos')
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                @include('partes.btn-guardar-right')
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('/css/admin_custom.css')}}">
@stop

@section('js')

@stop