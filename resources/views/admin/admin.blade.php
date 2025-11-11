@extends('templates.template_admin')

@section('titulo')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-black leading-tight text-center">
        {{ __('Gerenciar Itens') }}
    </h2>
@endSection

@section('crud')
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 min-h-[640px]">

                    <div class="mb-4 flex justify-between items-center">
                        <form action="{{ route('filtraModelo') }}" method="GET" class="flex items-center space-x-2">
                            <label for="search" class="sr-only">Pesquisar por Modelo</label>
                            <input type="text" 
                                   name="search" 
                                   id="search" 
                                   placeholder="Pesquisar por Modelo..."
                                   value="{{ request('search') }}"
                                   class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-64"
                            >
                            <button type="submit" 
                                    class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </button>
                        </form>
                        
                        <a href="{{ route('admin.viewCadastrar') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                            {{ __('Novo carro') }}
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700 text-center">
                                <tr>
                                    <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                        Modelo
                                    </th>
                                    <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                        Marca
                                    </th>
                                    <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                        Cor
                                    </th>
                                    <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                        Preço
                                    </th>
                                    <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                        Imagem Capa
                                    </th>
                                    <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                        Carroceria
                                    </th>
                                    <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                        Quilometragem
                                    </th>
                                    <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                        Capacidade Tanque
                                    </th>
                                    <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                        Motor
                                    </th>
                                    <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                        Câmbio
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                        Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700 text-center">
                                @forelse ($carros as $carro)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                        {{ $carro->id }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ $carro->modelo }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ $carro->marca }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ $carro->cor }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        R$ {{ number_format($carro['preco'], 2, ',', '.') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <a href="{{ $carro->imagem_url }}" target="_blank" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-200 dark:hover:text-indigo-600 mr-3">Link imagem</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ $carro->carroceria }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ number_format($carro['quilometragem'], 0, ',', '.') }} Km
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ $carro->combustivel }} L
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ $carro->motor }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ $carro->cambio }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('admin.infoEdit', $carro->id) }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-600 mr-3">
                                            {{ __('Editar') }}
                                        </a>

                                        <form action="{{ route('admin.excluirCarro', $carro->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-600" onclick="return confirm('Tem certeza que deseja excluir este item?')">
                                                {{ __('Excluir') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="px-6 py-4 text-center text-sm text-gray-500 dark:text-gray-400">
                                        {{ __('Nenhum item encontrado.') }}
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $carros->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endSection