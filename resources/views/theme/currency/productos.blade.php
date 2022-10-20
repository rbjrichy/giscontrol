@extends('theme.currency.master')

@section('title', 'Productos')

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
        $titulo_seccion = "Products";
    @endphp
    @include('theme.currency.partials.sections.titulo_seccion')
    <!-- End Banner -->
    
    <!-- section -->
    <div id="about" class="section layout_padding about_bg">
        <div class="container">
            @php
                
            @endphp
            <div class="row">
                @foreach ($categorias as $objCategoria)
                    <a href="{{route('product',[$objCategoria])}}" class="btn btn-sm btn-warning mr-2">
                        {{$objCategoria->getNombre()}}
                    </a>
                @endforeach
            </div>
            <div class="row mt-5">
                <h1></h1>
            </div>
            <div class="row mt-3">

            </div>
            <div id="galeria">
                <div class="text-center">
                    <h1 class="m-auto m-5">{{$categoria->getNombre()}}</h1>
                    <p>{{$categoria->getDescripcion()}} </p>
                </div>
                <div class="row">
                    @foreach ($categoria->productos as $objProducto)
                        @php
                            $image_producto_url = "https://picsum.photos/300";
                            $img_producto = $objProducto->getPrimeraImg();
                            if(is_object($img_producto) ){
                                $image_producto_url = asset(Storage::url('archivos_img/'.$img_producto->ruta));
                            }
                        @endphp
                            <div class="col-12 col-md-6 col-lg-4 text-center">
                                <img src="{{$image_producto_url}}" alt="galeria de imagenes">
                                <label>
                                    <a href="{{route('product.detalle',[$objProducto])}}">
                                        {{$objProducto->getNombre()}} - {{$objProducto->codigo}}
                                    </a>
                                </label>
                                <p>{{$objProducto->getDescripcion()}} </p>
                            </div>
                    @endforeach
                </div>
            </div>
            
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
</script>
@endsection