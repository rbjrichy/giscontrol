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
@include('theme.currency.partials.headers.header')
<!-- End header -->

<!-- Start Banner -->
@include('theme.currency.partials.banners.banner')
<!-- End Banner -->

<!-- section Presentacion-->
@include('theme.currency.partials.sections.presentacion')
<!-- end section -->

<!-- section categorias-->
@include('theme.currency.partials.sections.categoria')
<!-- end section -->

<!-- section Servicios-->
@include('theme.currency.partials.sections.servicios')
<!-- end section -->

<!-- section Proyectos-->
@include('theme.currency.partials.sections.proyectos') 
<!-- end section -->

<!-- section Noticias-->
@include('theme.currency.partials.sections.noticias')
<!-- end section -->

<!-- section acerca de-->
@include('theme.currency.partials.sections.about')
<!-- end section -->

<!-- section Contactanos-->
@include('theme.currency.partials.sections.contact')
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