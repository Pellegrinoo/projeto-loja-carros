@extends('templates.template_carros_info')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Detalhes do {{ $carro['modelo'] }}
    </h2>
@endSection

@section('info')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- Seção Principal: Imagem e Informações Chave (Layout 3 Colunas) --}}
                <div class="p-6 md:p-10 grid grid-cols-1 lg:grid-cols-3 gap-8">
                    
                    <div>
                        <img src="{{ $carro['imagem_url'] }}" alt="{{ $carro['modelo'] }}" class="w-full h-full object-cover rounded-xl shadow-lg">
                    </div>
                    <div>
                        <img src="{{ $carro['imagem_url2'] }}" alt="{{ $carro['modelo'] }}" class="w-full h-full object-cover rounded-xl shadow-lg">
                    </div>
                    <div>
                        <img src="{{ $carro['imagem_url3'] }}" alt="{{ $carro['modelo'] }}" class="w-full h-full object-cover rounded-xl shadow-lg">
                    </div>

                    {{-- 2ª Linha: Informações Principais (Col 1) e Detalhes (Col 2 & 3) --}}
                    <div class="lg:row-start-2">
                        <h1 class="text-xl font-extrabold text-gray-900 leading-tight">{{ $carro['marca'] }} {{ $carro['modelo'] }}</h1>
                        <p class="text-xl text-gray-500 mt-2">{{ $carro['ano'] }} | {{ $carro['cor'] }}</p>

                        {{-- Preço --}}
                        <div class="my-6">
                            <span class="text-sm font-semibold text-gray-600 uppercase tracking-wider">Preço</span>
                            <p class="text-3xl font-extrabold text-black mt-4">
                                R$ {{ number_format($carro['preco'], 2, ',', '.') }}
                            </p>
                        </div>
                    </div>
                    
                    <div>
                        <div class="mt-1 mb-8 space-y-3">
                            <h1 class="text-xl font-extrabold text-gray-900 leading-tight border-b pb-3">Principais Dados</h1>
                            <div class="mt-2 space-y-2 text-sm">
                                {{-- NOTA: Adapte os campos $carro[...] conforme seu array de dados --}}
                                @if(isset($carro['quilometragem']))
                                    <div class="flex justify-between text-gray-700">
                                        <span class="font-medium">Quilometragem:</span>
                                        <span>{{ number_format($carro['quilometragem'], 0, ',', '.') }} km</span>
                                    </div>
                                @endif
                                @if(isset($carro['cambio']))
                                    <div class="flex justify-between text-gray-700">
                                        <span class="font-medium">Câmbio:</span>
                                        <span>{{ $carro['cambio'] }}</span>
                                    </div>
                                @endif
                                @if(isset($carro['motor']))
                                    <div class="flex justify-between text-gray-700">
                                        <span class="font-medium">Motor:</span>
                                        <span>{{ $carro['motor'] }}</span>
                                    </div>
                                @endif
                                @if(isset($carro['combustivel']))
                                    <div class="flex justify-between text-gray-700">
                                        <span class="font-medium">Combustível:</span>
                                        <span>{{ $carro['combustivel'] }}</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div>
                        <h1 class="text-xl font-extrabold text-gray-900 leading-tight border-b pb-3">Detalhes</h1>
                    
                        <div class="text-gray-700 leading-relaxed space-y-3 lg:col-span-2">
                            <p>
                                {{ $carro['descricao'] ?? 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection