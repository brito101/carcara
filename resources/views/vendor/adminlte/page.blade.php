@extends('adminlte::master')

@inject('layoutHelper', 'JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper')

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body', $layoutHelper->makeBodyClasses())

@section('body_data', $layoutHelper->makeBodyData())

@section('body')
    <div class="wrapper">

        {{-- Top Navbar --}}
        @if ($layoutHelper->isLayoutTopnavEnabled())
            @include('adminlte::partials.navbar.navbar-layout-topnav')
        @else
            @include('adminlte::partials.navbar.navbar')
        @endif

        {{-- Left Main Sidebar --}}
        @if (!$layoutHelper->isLayoutTopnavEnabled())
            @include('adminlte::partials.sidebar.left-sidebar')
        @endif

        {{-- Content Wrapper --}}
        @empty($iFrameEnabled)
            @include('adminlte::partials.cwrapper.cwrapper-default')
        @else
            @include('adminlte::partials.cwrapper.cwrapper-iframe')
        @endempty

        {{-- Chat --}}
        @if (Request::segment(1) == 'admin')
            @include('admin.components.chat')
        @endif

        {{-- Footer --}}
        @hasSection('footer')
            @include('adminlte::partials.footer.footer')
        @endif

        {{-- Right Control Sidebar --}}
        @if (config('adminlte.right_sidebar'))
            @include('adminlte::partials.sidebar.right-sidebar')
        @endif

    </div>
    <footer class="main-footer fixed-bottom">
        {{-- <strong>Copyright © 2022-{{ date('Y') }} <a href="https://www.rodrigobrito.dev.br" target="_blank" rel="noreferrer"
                title="Rodrigo Brito Desenvolvedor Web">rodrigobrito.dev.br</a>.</strong> --}}
        <strong>Copyright © 2023-{{ date('Y') }} <span class="text-warning">Curso de Guerra
                Cibernética-2023</span></strong>
        {{-- Todos os direitos Reservados. --}}
        <div class="float-right d-none d-sm-inline-block">
            <b>Versão</b> {{ env('APP_VERSION') }}
        </div>
    </footer>
@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop
