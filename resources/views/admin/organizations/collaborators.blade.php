@extends('adminlte::page')

@section('title', '- Colaboradores')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-fw fa-users-cog"></i> Colaboradores</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.subsidiaries.index') }}">Filiais</a></li>
                        <li class="breadcrumb-item active">Colaboradores</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card card-solid">
                        <div class="card-header">
                            <i class="fas fa-fw fa-search"></i> Pesquisa
                        </div>
                        <form method="POST" action="{{ route('admin.collaborators.search') }}">
                            @csrf
                            <div class="card-body pb-0">
                                <div class="d-flex flex-wrap justify-content-start">
                                    <div class="col-12 col-md-6 form-group px-0 pr-2">
                                        <label for="alias_name">Filial</label>
                                        <input type="text" id="alias_name" name="alias_name" class="form-control"
                                            placeholder="Nome Fantasia da Filial" value="">
                                    </div>

                                    <div class="col-12 col-md-6 form-group px-0 pl-2">
                                        <label for="city">Cidade</label>
                                        <input type="text" id="city" name="city" class="form-control"
                                            placeholder="Cidade da Filial" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Pequisar</button>
                                <button type="reset" class="btn btn-secondary">Limpar</button>
                            </div>
                        </form>
                    </div>

                    <div class="card card-solid">
                        <div class="card-header">
                            <div class="d-flex flex-wrap justify-content-between col-12 align-content-center">
                                <h3 class="card-title align-self-center">Colaboradores Cadastrados</h3>
                            </div>
                        </div>

                        <div class="card-body pb-0">
                            <div class="row">
                                @forelse ($users as $user)
                                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                        <div class="card bg-light d-flex flex-fill">
                                            <div class="card-header text-muted border-bottom-0">
                                                Colaborador #{{ $user->id }}
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="lead"><b>{{ $user->name }}</b></h2>
                                                        <small>{{ $user->roles->first()->name }}</small>
                                                    </div>
                                                    <div class="col-5 text-center">
                                                        @if ($user->photo)
                                                            <img src="{{ url('storage/users/' . $user->photo) }}"
                                                                alt="{{ $user->name }}" class="img-circle img-fluid"
                                                                style="object-fit: cover; width: 100%; aspect-ratio: 1;">
                                                        @else
                                                            <img src="{{ asset('img/avatar.png') }}"
                                                                alt="{{ $user->name }}" class="img-circle img-fluid">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0">
                                                <p class="text-muted text-sm">E-mail: {{ $user->email }}</p>
                                                <p class="text-muted text-sm">Telefone: {{ $user->telephone }}</p>
                                            </div>
                                            <div class="card-body pt-0">
                                                <h3 class="lead">Vinculado às seguintes filiais:</h3>
                                                @foreach ($user->collaborators as $collaborator)
                                                    <p class="text-muted text-sm">
                                                        {{ $collaborator->subsidiary->alias_name }} /
                                                        {{ $collaborator->subsidiary->city }}-{{ $collaborator->subsidiary->state }}
                                                    </p>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                @empty
                                    <p>Não há colaboradores cadastrados</p>
                                @endforelse
                            </div>
                        </div>

                        <div class="card-footer">
                            <nav aria-label="Collaboratotos Page Navigation">
                                <ul class="pagination justify-content-center m-0">
                                    {{ $users->appends(request()->input())->links() }}
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
