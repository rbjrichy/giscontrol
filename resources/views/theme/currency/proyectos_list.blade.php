@extends('theme.currency.master')

@section('title', 'Proyectos')

@section('body')

<!-- LOADER -->
<div id="preloader">
    <div class="loader">
        <img src="{{asset('theme/currency/images/loader.gif')}}" alt="#" />
    </div>
</div>
<!-- END LOADER -->
<!-- Start header -->
@php
    $menu_dos = true;
@endphp
@include('theme.currency.partials.headers.header')
<!-- End header -->


    <!-- Start Banner -->
    @php
        $titulo_seccion = "Proyects";
    @endphp
    @include('theme.currency.partials.sections.titulo_seccion')
    <!-- End Banner -->
    
    <!-- section -->
    <div id="proyectos_list" class="section layout_padding about_bg">
        <div class="container">
            @foreach ($proyectos as $oProyecto)
            @php
                $image_proyecto_url = "https://picsum.photos/300";
                $img_proyecto = $oProyecto->getPrimeraImg();
                if(is_object($img_proyecto) ){
                    $image_proyecto_url = asset(Storage::url('archivos_img/'.$img_proyecto->ruta));
                }
            @endphp
            <div class="row mt-2">
                <div class="col-12 col-sm-2">
                    <img class="img-thumbnail img-fluid img-cuadrado mx-auto d-block" src="{{$image_proyecto_url}}" alt="imagen de Proyectos">
                </div>
                <div class="col-12 col-sm-10">
                    <h3>{{$oProyecto->getNombre()}}</h3>
                    <p>{{substr($oProyecto->getDescripcion(),0,200)}}... <a href="{{route('proyecto.detalle',[$oProyecto])}}">{{__('See more')}}</a></p>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    <!-- end section -->

<!-- Start Footer -->
@include('theme.currency.partials.sections.footer')
<!-- End Footer -->
<!-- Start copyrights -->
@include('theme.currency.partials.sections.copyrights')
<!-- End copyrights -->
@endsection
@section('custom_js')
<script>
    // $(document).ready(function(){ 
    //     $("#contacto").trigger('click');
    //     console.log('cliente en contacto');
    // })
    mui('body').on('tap','a',function(){document.location.href=this.href;});
</script>
@endsection