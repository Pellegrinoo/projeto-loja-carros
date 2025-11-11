@extends('templates.template_admin_edit')

@section('titulo')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-black leading-tight text-center">
        {{ __('Página de edição') }}    
    </h2>
@endSection

@section('editLayout')
<form method="POST" action="{{ route('admin.editarCarro') }}">
    @csrf

    <div class="p-2 bg-white shadow dark:bg-gray-800">
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Editar Carro: {{ $carro->modelo }}
            </h2>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Preencha os dados do veículo.
            </p>
        </header>

        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-2 lg:grid-cols-3">
            
            <div class="sm:col-span-1">
                <x-input-label for="id" :value="__('ID')" />
                
                <input id="id" name="id" type="hidden" value="{{ $carro->id }}" />
                
                <x-text-input id="id_display" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" value="{{ $carro->id }}" readonly disabled />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="modelo" :value="__('Modelo')" />
                <x-text-input id="modelo" name="modelo" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('modelo', $carro->modelo)" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('modelo')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="marca" :value="__('Marca')" />
                <x-text-input id="marca" name="marca" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('marca', $carro->marca)" required />
                <x-input-error class="mt-2" :messages="$errors->get('marca')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="ano" :value="__('Ano')" />
                <x-text-input id="ano" name="ano" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('ano', $carro->ano)" required />
                <x-input-error class="mt-2" :messages="$errors->get('ano')" />
            </div>
            
            <div class="sm:col-span-1">
                <x-input-label for="cor" :value="__('Cor')" />
                <x-text-input id="cor" name="cor" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('cor', $carro->cor)" required />
                <x-input-error class="mt-2" :messages="$errors->get('cor')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="preco" :value="__('Preço (R$)')" />
                <x-text-input id="preco" name="preco" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('preco', number_format($carro->preco, 2, ',', '.'))" required />
                <x-input-error class="mt-2" :messages="$errors->get('preco')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="carroceria" :value="__('Carroceria')" />
                <x-text-input id="carroceria" name="carroceria" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('carroceria', $carro->carroceria)" required />
                <x-input-error class="mt-2" :messages="$errors->get('carroceria')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="quilometragem" :value="__('Quilometragem (KM)')" />
                <x-text-input id="quilometragem" name="quilometragem" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('quilometragem', $carro->quilometragem)" required />
                <x-input-error class="mt-2" :messages="$errors->get('quilometragem')" />
            </div>
            
            <div class="sm:col-span-1">
                <x-input-label for="combustivel" :value="__('Capacidade tanque')" />
                <x-text-input id="combustivel" name="combustivel" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('combustivel', $carro->combustivel)" required />
                <x-input-error class="mt-2" :messages="$errors->get('combustivel')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="motor" :value="__('Motor')" />
                <x-text-input id="motor" name="motor" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('motor', $carro->motor)" required />
                <x-input-error class="mt-2" :messages="$errors->get('motor')" />
            </div>
            
            <div class="sm:col-span-1">
                <x-input-label for="cambio" :value="__('Câmbio')" />
                <x-text-input id="cambio" name="cambio" type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('cambio', $carro->cambio)" required />
                <x-input-error class="mt-2" :messages="$errors->get('cambio')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="imagem_capa" :value="__('URL Imagem Capa')" />
                <x-text-input id="imagem_capa" name="imagem_capa" type="url" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('imagem_capa', $carro->imagem_capa)" />
                <x-input-error class="mt-2" :messages="$errors->get('imagem_capa')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="imagem_url1" :value="__('URL Imagem 1')" />
                <x-text-input id="imagem_url1" name="imagem_url1" type="url" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('imagem_url', $carro->imagem_url)" />
                <x-input-error class="mt-2" :messages="$errors->get('imagem_url1')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="imagem_url2" :value="__('URL Imagem 2')" />
                <x-text-input id="imagem_url2" name="imagem_url2" type="url" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('imagem_url2', $carro->imagem_url2)" />
                <x-input-error class="mt-2" :messages="$errors->get('imagem_url2')" />
            </div>

            <div class="sm:col-span-1">
                <x-input-label for="imagem_url3" :value="__('URL Imagem 3')" />
                <x-text-input id="imagem_url3" name="imagem_url3" type="url" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('imagem_url3', $carro->imagem_url3)" />
                <x-input-error class="mt-2" :messages="$errors->get('imagem_url3')" />
            </div>

        </div>

        <div class="mt-8 grid grid-cols-1">
            <div class="col-span-full">
                <x-input-label for="descricao" :value="__('Descrição Completa')" />
                <textarea id="descricao" name="descricao" rows="5" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">{{ old('descricao', $carro->descricao) }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('descricao')" />
            </div>
        </div>

        <div class="p-2 bg-white shadow dark:bg-gray-800">
        <div class="flex items-center justify-end mt-6 space-x-4">
            
            <a href="#" onclick="history.back()" class="inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-gray-800 dark:text-gray-100 uppercase tracking-widest hover:bg-gray-300 dark:hover:bg-gray-700 focus:bg-gray-300 dark:focus:bg-gray-700 active:bg-gray-400 dark:active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                {{ __('Voltar') }}
            </a>

            <x-primary-button>
                {{ __('Salvar Alterações') }}
            </x-primary-button>
        </div>

    </div>

    </div>
</form>
@endSection