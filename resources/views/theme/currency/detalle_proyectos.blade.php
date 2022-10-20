@extends('theme.currency.master')

@section('title', 'Detalle Proyecto')

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
        $titulo_seccion = $proyecto->getNombre();//"Proyect Detail";
    @endphp
    @include('theme.currency.partials.sections.titulo_seccion')
    <!-- End Banner -->
    
    <!-- section -->
    <div id="detalle_proyecto" class="container">
        <div class="p-5">&nbsp;</div>

        <div class="row pt-5">
            <div class="col-12 col-sm-6">
                @php
                    $image_proyecto_url = "https://picsum.photos/300";
                    $img_proyecto = $proyecto->getPrimeraImg();
                    if(is_object($img_proyecto) ){
                        $image_proyecto_url = asset(Storage::url('archivos_img/'.$img_proyecto->ruta));
                    }
                @endphp
                    <img id="img_principal" class="img-thumbnail img-fluid" src="{{$image_proyecto_url}}" alt="imagen principal">
                    <div class="img_mini_grid mt-2">
                        @foreach ($proyecto->imagenes as $objImg)
                        <div class="efecto_img">
                            @php
                                $img_proyecto_url = asset(Storage::url('archivos_img/'.$objImg->ruta));
                            @endphp
                            <a href="#proyecto" id="img_100" link_img="{{$img_proyecto_url}}" onclick="cambiar_img(this)">
                                <img src="{{$img_proyecto_url}}" alt="galeria de imagenes">
                            </a>
                        </div>
                        @endforeach
                    </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="text-center">
                    <h1 class="m-auto m-5">{{$proyecto->getNombre()}}</h1>
                    <p>{{$proyecto->getDescripcion()}} </p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
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
    function cambiar_img(e){
        // evento.preventDefault();
        img_principal = document.getElementById('img_principal');
        img_principal.setAttribute("src", e.getAttribute('link_img'));
    }
</script>
@endsection