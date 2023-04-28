@extends('adminlte::page')
@section('plugins.select2', true)
@section('plugins.BsCustomFileInput', true)
@section('plugins.BootstrapSelect', true)

@section('title', '- Edição de Filial')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="far fa-fw fa-building"></i> Editar Filial</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.subsidiaries.index') }}">Filiais</a></li>
                        <li class="breadcrumb-item active">Editar Filial</li>
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
                            <h3 class="card-title">Dados Cadastrais da Filial</h3>
                        </div>

                        <form method="POST"
                            action="{{ route('admin.subsidiaries.update', ['subsidiary' => $subsidiary->id]) }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $subsidiary->id }}">
                            <div class="card-body">

                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="col-12 col-md-6 form-group px-0 pr-md-2">
                                        <label for="social_name">Nome Empresarial</label>
                                        <input type="text" class="form-control" id="social_name"
                                            placeholder="Nome da Empresa" name="social_name"
                                            value="{{ old('social_name') ?? $subsidiary->social_name }}" required>
                                    </div>
                                    <div class="col-12 col-md-6 form-group px-0 pl-md-2">
                                        <label for="alias_name">Nome Fantasia</label>
                                        <input type="text" class="form-control" id="alias_name"
                                            placeholder="Nome Fantasia" name="alias_name"
                                            value="{{ old('alias_name') ?? $subsidiary->alias_name }}" required>
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="col-12 col-md-6 form-group px-0 pr-md-2">
                                        <label for="document_company">CNPJ</label>
                                        <input type="text" class="form-control" id="document_company" placeholder="CNPJ"
                                            name="document_company"
                                            value="{{ old('document_company') ?? $subsidiary->document_company }}" required>
                                    </div>
                                    <div class="col-12 col-md-6 form-group px-0 pl-md-2">
                                        <label for="document_company_secondary">Inscrição Estadual</label>
                                        <input type="text" class="form-control" id="document_company_secondary"
                                            placeholder="Inscrição Estadual" name="document_company_secondary"
                                            value="{{ old('document_company_secondary') ?? $subsidiary->document_company_secondary }}">
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="col-12 col-md-6 form-group px-0 pr-md-2">
                                        <label for="email">E-mail</label>
                                        <input type="email" class="form-control" id="email" placeholder="E-mail"
                                            name="email" value="{{ old('email') ?? $subsidiary->email }}" required>
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="col-12 col-md-6 form-group px-0 pr-md-2">
                                        <label for="telephone">Telefone</label>
                                        <input type="tel" class="form-control" id="telephone" placeholder="Telefone"
                                            name="telephone" value="{{ old('telephone') ?? $subsidiary->telephone }}"
                                            required>
                                    </div>
                                    <div class="col-12 col-md-6 form-group px-0 pl-md-2">
                                        <label for="cell">Celular</label>
                                        <input type="tel" class="form-control" id="cell" placeholder="Celular"
                                            name="cell" value="{{ old('cell') ?? $subsidiary->cell }}">
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="col-12 col-md-6 form-group px-0 pr-md-2">
                                        <label for="zipcode">CEP</label>
                                        <input type="tel" class="form-control" id="zipcode" placeholder="CEP"
                                            name="zipcode" value="{{ old('zipcode') ?? $subsidiary->zipcode }}" required>
                                    </div>
                                    <div class="col-12 col-md-6 form-group px-0 pl-md-2">
                                        <label for="street">Rua</label>
                                        <input type="text" class="form-control" id="street" placeholder="Rua"
                                            name="street" value="{{ old('street') ?? $subsidiary->street }}" required>
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="col-12 col-md-6 form-group px-0 pr-md-2">
                                        <label for="number">Número</label>
                                        <input type="text" class="form-control" id="number" placeholder="Número"
                                            name="number" value="{{ old('number') ?? $subsidiary->number }}" required>
                                    </div>
                                    <div class="col-12 col-md-6 form-group px-0 pl-md-2">
                                        <label for="complement">Complemento</label>
                                        <input type="text" class="form-control" id="complement"
                                            placeholder="Complemento" name="complement"
                                            value="{{ old('complement') ?? $subsidiary->complement }}">
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="col-12 col-md-6 form-group px-0 pr-md-2">
                                        <label for="neighborhood">Bairro</label>
                                        <input type="text" class="form-control" id="neighborhood"
                                            placeholder="Bairro" name="neighborhood"
                                            value="{{ old('neighborhood') ?? $subsidiary->neighborhood }}" required>
                                    </div>
                                    <div class="col-12 col-md-6 form-group px-0 pl-md-2">
                                        <label for="city">Cidade</label>
                                        <input type="text" class="form-control" id="city" placeholder="Cidade"
                                            name="city" value="{{ old('city') ?? $subsidiary->city }}" required>
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="col-12 col-md-6 form-group px-0 pr-md-2">
                                        <label for="state">Estado</label>
                                        <input type="text" class="form-control" id="state" placeholder="UF"
                                            name="state" value="{{ old('state') ?? $subsidiary->state }}" required>
                                    </div>
                                </div>

                                @php
                                    $config = [
                                        'title' => 'Selecione múltiplos...',
                                        'liveSearch' => true,
                                        'liveSearchPlaceholder' => 'Pesquisar...',
                                        'showTick' => true,
                                        'actionsBox' => true,
                                    ];
                                @endphp

                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="col-12 form-group px-0">
                                        <x-adminlte-select-bs id="managers" name="managers[]" label="Gerentes"
                                            label-class="text-dark" igroup-size="md" :config="$config" multiple
                                            class="border">
                                            @foreach ($managers as $manager)
                                                <option value="{{ $manager->id }}"
                                                    {{ in_array($manager->id, $subsidiary->managers->pluck('user_id')->toArray()) ? 'selected' : '' }}>
                                                    {{ $manager->name }}
                                                    ({{ $manager->email }})
                                                </option>
                                            @endforeach
                                        </x-adminlte-select-bs>
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="col-12 form-group px-0">
                                        <x-adminlte-select-bs id="collaborators" name="collaborators[]"
                                            label="Colaboradores" label-class="text-dark" igroup-size="md"
                                            :config="$config" multiple class="border">
                                            @foreach ($collaborators as $collaborator)
                                                <option value="{{ $collaborator->id }}"
                                                    {{ in_array($collaborator->id, $subsidiary->collaborators->pluck('user_id')->toArray()) ? 'selected' : '' }}>
                                                    {{ $collaborator->name }}
                                                    ({{ $collaborator->email }})
                                                    : {{ $collaborator->type }}
                                                </option>
                                            @endforeach
                                        </x-adminlte-select-bs>
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="col-12 form-group px-0">
                                        <x-adminlte-select-bs id="financiers" name="financiers[]" label="Financistas"
                                            label-class="text-dark" igroup-size="md" :config="$config" multiple
                                            class="border">
                                            @foreach ($financiers as $financier)
                                                <option value="{{ $financier->id }}"
                                                    {{ in_array($financier->id, $subsidiary->financiers->pluck('user_id')->toArray()) ? 'selected' : '' }}>
                                                    {{ $financier->name }}
                                                    ({{ $financier->email }})
                                                </option>
                                            @endforeach
                                        </x-adminlte-select-bs>
                                    </div>
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

@section('custom_js')
    <script src="{{ asset('vendor/jquery/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('js/company.js') }}"></script>
    <script src="{{ asset('js/address.js') }}"></script>
    <script src="{{ asset('js/phone.js') }}"></script>
@endsection
