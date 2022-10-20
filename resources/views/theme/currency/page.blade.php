@extends('theme.currency.master')

{{-- @inject('layoutHelper', 'JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper') --}}

@section('custom_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body', 'body-class')

@section('body_data', '')

@section('body')

{{-- Header --}}
    <div class="wrapper">
        <h1>esto es de page</h1>
        {{-- Top Navbar --}}
        {{-- @if($layoutHelper->isLayoutTopnavEnabled())
            @include('adminlte::partials.navbar.navbar-layout-topnav')
        @else
            @include('adminlte::partials.navbar.navbar')
        @endif --}}

        {{-- Left Main Sidebar --}}
        {{-- @if(!$layoutHelper->isLayoutTopnavEnabled())
            @include('adminlte::partials.sidebar.left-sidebar')
        @endif --}}

        {{-- Content Wrapper --}}
        {{-- @empty($iFrameEnabled)
            @include('adminlte::partials.cwrapper.cwrapper-default')
        @else
            @include('adminlte::partials.cwrapper.cwrapper-iframe')
        @endempty --}}

        {{-- Footer --}}
        {{-- @hasSection('footer')
            @include('adminlte::partials.footer.footer')
        @endif --}}

        {{-- Right Control Sidebar --}}
        {{-- @if(config('adminlte.right_sidebar'))
            @include('adminlte::partials.sidebar.right-sidebar')
        @endif --}}

    </div>
@stop

@section('custom_js')
    @stack('js')
    @yield('js')
@stop