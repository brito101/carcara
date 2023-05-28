@extends('adminlte::page')

@section('title', '- Cadastro de Fase')
@section('plugins.BootstrapColorpicker', true)

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-fw fa-shoe-prints"></i> Nova Fase</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        @can('Listar Usuários')
                            <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Fases</a></li>
                        @endcan
                        <li class="breadcrumb-item active">Nova Fase</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    @include('components.alert')

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Dados Cadastrais da Fase</h3>
                        </div>

                        <form method="POST" action="{{ route('admin.steps.store') }}">
                            @csrf
                            <div class="card-body">

                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="col-12 form-group px-0">
                                        <label for="name">Nome</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Nome Completo" name="name" value="{{ old('name') }}" required>
                                    </div>
                                </div>

                                <div class="col-12 form-group px-0">
                                    <label for="description">Descrição</label>
                                    <div class="col-12 form-group px-0 d-flex flex-wrap justify-content-start"
                                        id="description">
                                        <div class="col-12 px-0">
                                            <textarea type="text" class="form-control" id="description" placeholder="Descrição" name="description"
                                                value="{{ old('description') }}"></textarea>
                                        </div>
                                    </div>
                                </div>

                                @php
                                    $config = [
                                        'extensions' => [['name' => 'debugger']],
                                    ];
                                @endphp

                                <div class="col-12 col-md-3 form-group px-0">
                                    <x-adminlte-input-color name="color" placeholder="Escolha uma cor..."
                                        label="Cor do cartão" igroup-size="md" :config="$config" enable-old-support>
                                        <x-slot name="appendSlot">
                                            <div class="input-group-text">
                                                <i class="fas fa-lg fa-brush"></i>
                                            </div>
                                        </x-slot>
                                    </x-adminlte-input-color>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
