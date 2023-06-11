@extends('adminlte::page')
@section('plugins.select2', true)
@section('plugins.BsCustomFileInput', true)

@section('title', '- Kanban')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-fw fa-square"></i> Kanban - {{ $operation->title }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('admin.operations.edit', ['operation' => $operation->id]) }}">Editar
                                Operação</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('admin.operations.timeline', ['id' => $operation->id]) }}">Timeline</a>
                        </li>
                        <li class="breadcrumb-item active">Kanban</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-0 px-md-2">
        @include('components.alert')
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="row d-flex flex-nowrap px-2 h-100 pt-2 w-100" style="overflow-x: auto" id="kanban"
                    data-action={{ route('admin.kanban.update', ['id' => $operation->id]) }}>

                    @foreach ($operation->operationSteps as $item)
                        <div class="col-12 col-md-3 p-2">
                            <div class="card card-row" style="background-color: {{ $item->step->color }}">
                                <div class="card-header bg-dark" style="border: 5px solid {{ $item->step->color }}">
                                    <h3 class="card-title">{{ $item->step->name }}</h3>
                                </div>
                                <div class="card-body draggable-area" data-area="{{ $item->step->id }}">
                                    @if ($operation->step->name == $item->step->name)
                                        @include('admin.kanban.components.card', [
                                            'kanban' => $operation,
                                        ])
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

@endsection

@section('custom_js')
    <script src={{ asset('js/kanban.js') }}></script>
@endsection
