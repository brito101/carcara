@extends('adminlte::master')
@section('title', '- Erro')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@stop

@section('body')
    <canvas class="snow"></canvas>
    <div class="error-area d-flex justify-content-center align-content-center pt-5">
        <div class="d-table">
            <div class="d-table-cell pt-5">
                <div class="error-content text-center">
                    <img src="{{ asset('img/404-error.png') }}" alt="Image" class="w-75">
                    <h3 class="text-light">Oops! Página não encontrada</h3>
                    <p class="text-white-50">A página que você está procurando pode ter sido removida teve seu nome alterado
                        ou está
                        temporariamente indisponível.</p>
                    <a href="{{ route('admin.home') }}" class="btn btn-lg btn-warning">
                        Retornar à página inicial
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    <script src="{{ asset('js/snow.js') }}"></script>
@endsection
