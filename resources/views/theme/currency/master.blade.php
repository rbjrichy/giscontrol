<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    {{-- Base Meta Tags --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    {{-- Custom Meta Tags --}}
    @yield('meta_tags')

    {{-- Title --}}
    <title>
        @yield('title_prefix', config('adminlte.title_prefix', ''))
        @yield('title', config('adminlte.title', 'rbjrichy'))
        @yield('title_postfix', config('adminlte.title_postfix', ''))
    </title>

    <!-- Site Metas -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    {{-- Custom stylesheets --}}
    @yield('css_pre')
   
    {{-- Base Stylesheets --}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('theme/currency/css/bootstrap.min.css')}}" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{asset('theme/currency/css/pogo-slider.min.css')}}" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('theme/currency/css/style.css')}}" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('theme/currency/css/responsive.css')}}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('theme/currency/css/custom.css')}}" />

    {{-- Custom Stylesheets --}}
    @yield('custom_css')

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" />

</head>

<body class="@yield('classes_body')" @yield('body_data') id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    {{-- Body Content --}}
    @yield('body')

    {{-- Base Scripts --}}
    <!-- ALL JS FILES -->
    <script src="{{asset('theme/currency/js/jquery.min.js')}}"></script>
	<script src="{{asset('theme/currency/js/popper.min.js')}}"></script>
    <script src="{{asset('theme/currency/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('theme/currency/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('theme/currency/js/jquery.pogo-slider.min.js')}}"></script>
    <script src="{{asset('theme/currency/js/slider-index.js')}}"></script>
    <script src="{{asset('theme/currency/js/smoothscroll.js')}}"></script>
    <script src="{{asset('theme/currency/js/form-validator.min.js')}}"></script>
    <script src="{{asset('theme/currency/js/contact-form-script.js')}}"></script>
    <script src="{{asset('theme/currency/js/isotope.min.js')}}"></script>
    <script src="{{asset('theme/currency/js/images-loded.min.js')}}"></script>
    <script src="{{asset('theme/currency/js/custom.js')}}"></script>

    {{-- Custom Scripts --}}
    @yield('custom_js')

</body>

</html>
