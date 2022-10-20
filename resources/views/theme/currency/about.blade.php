@extends('theme.currency.master')

@section('title', 'Inicio')

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
        $titulo_seccion = "About us";
    @endphp
    @include('theme.currency.partials.sections.titulo_seccion')
    <!-- End Banner -->
    
    <!-- section -->
    <div id="about" class="section layout_padding about_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                           <h2>{{__('About')}}</h2>    
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <p>
                            <strong>Tecnomaquina</strong> {{__('is a company with more than 19 years in the international market and more than 8 years in the national market. Now it opens a branch in Bolivia, to provide the best service in Industrial Machines, Spare Parts, Technical Service and Project Consulting. Since its foundation, it has been growing at a very aggressive rate, as a leading company, both in the expansion of Industrial Machines, as well as in the implementation, start-up and technical service of projects in the plant and the high quality of the Brands that we represent')}}.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full text_align_right_img">
                        <img class="img-fluid rounded shadow p-4 mb-4 bg-white" style="max-height: 500px" src="{{asset('img/proyectos/img3.jpg')}}" alt="#" />
                    </div>
                </div>
            </div>
            <div id="galeria">
                <div class="text-center">
                    <h1 class="m-auto m-5">Galería de Imágenes</h1>
                    <p>Fotografias de la empresa en diferentes proyectos</p>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <img src="{{asset('theme/currency/images/carrusel/1.jpg')}} " alt="galeria de imagenes">
    
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <img src="{{asset('theme/currency/images/carrusel/2.jpg')}} " alt="galeria de imagenes">
    
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <img src="{{asset('theme/currency/images/carrusel/3.jpg')}} " alt="galeria de imagenes">
    
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <img src="{{asset('theme/currency/images/carrusel/4.jpg')}} " alt="galeria de imagenes">
    
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <img src="{{asset('theme/currency/images/carrusel/5.jpg')}} " alt="galeria de imagenes">
    
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <img src="{{asset('theme/currency/images/carrusel/6.jpg')}} " alt="galeria de imagenes">
    
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <img src="{{asset('theme/currency/images/carrusel/7.jpg')}} " alt="galeria de imagenes">
    
                    </div>
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