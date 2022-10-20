@extends('adminlte::page')

@section('title', 'Global edit')

@section('content_header')
    <h1>{{$encuesta->descripcion}}</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Acciones globales </h3>
                </div>
                <div class="card-body">
                    <a class="btn btn-app bg-secondary" href="{{route('admin.encuesta.global.zonah.show',[$encuesta])}}">
                        {{-- <span class="badge bg-success">300</span> --}}
                        <i class="fas fa-barcode"></i> Zonas Homogeneas
                    </a>
                    {{-- <a class="btn btn-app bg-success">
                        <span class="badge bg-purple">891</span>
                        <i class="fas fa-users"></i> Users
                    </a>
                    <a class="btn btn-app bg-danger">
                        <span class="badge bg-teal">67</span>
                        <i class="fas fa-inbox"></i> Orders
                    </a>
                    <a class="btn btn-app bg-warning">
                        <span class="badge bg-info">12</span>
                        <i class="fas fa-envelope"></i> Inbox
                    </a>
                    <a class="btn btn-app bg-info">
                        <span class="badge bg-danger">531</span>
                        <i class="fas fa-heart"></i> Likes
                    </a> --}}
                </div>

            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/admin_custom.css') }}">
@stop

@section('js')

@stop
