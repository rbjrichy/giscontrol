@extends('adminlte::page')

@section('title', 'Crear Encuesta')

@section('content_header')
    <h1>Nuevo Encuesta</h1>
@stop
@section('content')
<div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card card-warning card-outline">
    <div class="card-header">
        <h3 class="card-title text-muted">Crear Nueva Encuesta</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" method="POST" action="{{ route('admin.encuesta.store')}}">
        @csrf
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