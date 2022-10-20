@extends('adminlte::page')

@section('title', 'Panel control cliente')

@section('content_header')
<h1>Panel de Control Cliente</h1>
@stop

@section('content')

<div class="row">
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h5><strong>{{Auth::user()->name}}</strong></h5>

                <p class="pt-4">Perfil</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-plus"></i>
            </div>
            <a href="{{route('user.profile')}}" class="small-box-footer">Ver Perfil <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>
                <p>Tramites</p>
            </div>
            <div class="icon">
                <i class="far fa-file-alt"></i>
            </div>
            <a href="#" class="small-box-footer">Ver Trámites <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Preferencias</p>
            </div>
            <div class="icon">
                <i class="fas fa-check-double"></i>
            </div>
            <a href="#" class="small-box-footer">Ver Preferencias <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="{{asset('/css/admin_custom.css')}}">
@stop

@section('js')
<script>
    console.log('Hi!');

</script>
@stop
