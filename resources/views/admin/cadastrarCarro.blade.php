@extends('templates.template_admin_cadastrar')

@section('titulo')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-black leading-tight text-center">
        {{ __('Página de Cadastro de Carro') }}
    </h2>
@endSection

@section('cadastroLayout')
<form method="POST" action="{{ route('admin.cadastrarCarro') }}">
    @csrf

    <div class="p-2 bg-white shadow dark:bg-gray-800">
        <header>
            <h2 class="text-lg font-bold text-gray-900 dark:text-gray-100">
                Cadastrar Novo Carro
            </h2>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Preencha os dados do novo veículo.
            </p>
        </header>

        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-2 lg:grid-cols-3">

            <div class="sm:col-span-1">
                <x-input-label for="modelo" :value="__('Modelo')" />
                <x-text-input id="modelo" name="modelo" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('modelo')" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('modelo')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="marca" :value="__('Marca')" />
                <x-text-input id="marca" name="marca" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('marca')" required />
                <x-input-error class="mt-2" :messages="$errors->get('marca')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="ano" :value="__('Ano')" />
                <x-text-input id="ano" name="ano" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('ano')" required />
                <x-input-error class="mt-2" :messages="$errors->get('ano')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="cor" :value="__('Cor')" />
                <x-text-input id="cor" name="cor" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('cor')" required />
                <x-input-error class="mt-2" :messages="$errors->get('cor')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="preco" :value="__('Preço')" />
                <x-text-input id="preco" name="preco" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" value="R$" required />
                <x-input-error class="mt-2" :messages="$errors->get('preco')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="carroceria" :value="__('Carroceria')" />
                <x-text-input id="carroceria" name="carroceria" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('carroceria')" required />
                <x-input-error class="mt-2" :messages="$errors->get('carroceria')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="quilometragem" :value="__('Quilometragem (KM)')" />
                <x-text-input id="quilometragem" name="quilometragem" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('quilometragem')" required />
                <x-input-error class="mt-2" :messages="$errors->get('quilometragem')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="combustivel" :value="__('Capacidade tanque')" />
                <x-text-input id="combustivel" name="combustivel" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('combustivel')" required />
                <x-input-error class="mt-2" :messages="$errors->get('combustivel')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="motor" :value="__('Motor')" />
                <x-text-input id="motor" name="motor" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('motor')" required />
                <x-input-error class="mt-2" :messages="$errors->get('motor')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="cambio" :value="__('Câmbio')" />
                <x-text-input id="cambio" name="cambio" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('cambio')" required />
                <x-input-error class="mt-2" :messages="$errors->get('cambio')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="imagem_capa" :value="__('URL Imagem Capa')" />
                <x-text-input id="imagem_capa" name="imagem_capa" type="url" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('imagem_capa')" />
                <x-input-error class="mt-2" :messages="$errors->get('imagem_capa')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="imagem_url1" :value="__('URL Imagem 1')" />
                <x-text-input id="imagem_url1" name="imagem_url1" type="url" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('imagem_url1')" />
                <x-input-error class="mt-2" :messages="$errors->get('imagem_url1')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="imagem_url2" :value="__('URL Imagem 2')" />
                <x-text-input id="imagem_url2" name="imagem_url2" type="url" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('imagem_url2')" />
                <x-input-error class="mt-2" :messages="$errors->get('imagem_url2')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="imagem_url3" :value="__('URL Imagem 3')" />
                <x-text-input id="imagem_url3" name="imagem_url3" type="url" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('imagem_url3')" />
                <x-input-error class="mt-2" :messages="$errors->get('imagem_url3')" />
            </div>

        </div>

        <div class="mt-8 grid grid-cols-1">
            <div class="col-span-full">
                <x-input-label for="descricao" :value="__('Descrição Completa')" />
                <textarea id="descricao" name="descricao" rows="5" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">{{ old('descricao') }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('descricao')" />
            </div>
        </div>

        <div class="p-2 bg-white shadow dark:bg-gray-800">
        <div class="flex items-center justify-end mt-6 space-x-4">

            <a href="#" onclick="history.back()" class="inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-gray-800 dark:text-gray-100 uppercase tracking-widest hover:bg-gray-300 dark:hover:bg-gray-700 focus:bg-gray-300 dark:focus:bg-gray-700 active:bg-gray-400 dark:active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                {{ __('Voltar') }}
            </a>

            <x-primary-button>
                {{ __('Cadastrar Carro') }}
            </x-primary-button>
        </div>

    </div>

    </div>
</form>
@endSection