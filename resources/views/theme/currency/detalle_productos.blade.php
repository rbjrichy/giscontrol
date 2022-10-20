@extends('theme.currency.master')

@section('title', 'Detalle Producto')

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
        $titulo_seccion = "Product Detail";
    @endphp
    @include('theme.currency.partials.sections.titulo_seccion')
    <!-- End Banner -->
    
    <!-- section -->
    <div id="detalle_producto" class="container">
        <div class="p-5">&nbsp;</div>

        <div class="row pt-5">
            <div class="col-12 col-sm-6">
                @php
                    $image_producto_url = "https://picsum.photos/300";
                    $img_producto = $producto->getPrimeraImg();
                    if(is_object($img_producto) ){
                        $image_producto_url = asset(Storage::url('archivos_img/'.$img_producto->ruta));
                    }
                @endphp
                    <img id="img_principal" class="img-thumbnail img-fluid" src="{{$image_producto_url}}" alt="imagen principal">
            </div>
            <div class="col-12 col-sm-6">
                <div class="text-center">
                    <h1 class="m-auto m-5">{{$producto->getNombre()}}</h1>
                    <p>{{$producto->getDescripcion()}} </p>
                </div>
                <div class="img_mini_grid">
                    @foreach ($producto->imagenes as $objImg)
                    <div class="efecto_img">
                        @php
                            $img_producto_url = asset(Storage::url('archivos_img/'.$objImg->ruta));
                        @endphp
                        <a href="#producto" link_img="{{$img_producto_url}}" onclick="cambiar_img(this)">
                            <img src="{{$img_producto_url}}" alt="galeria de imagenes">
                        </a>
                    </div>
                    @endforeach
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