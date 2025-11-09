<x-app-layout>
    <x-slot name="header">
    <div class="flex items-center space-x-8">
        
        <a href="{{ route('dashboard') }}"
           class="text-xl leading-tight border-b-2 py-2
           {{-- SE ESTIVER ATIVO --}}
           {{ request()->routeIs('dashboard') ? 'border-red-600 text-gray-900 font-bold' : 
           
           {{-- SE ESTIVER INATIVO --}}
           'border-transparent text-gray-500 font-semibold hover:text-gray-700 hover:border-gray-300' }}">
            Geral
        </a>

        <a href="{{ route('carros.hatch') }}"
           class="text-xl leading-tight border-b-2 py-2
           {{ request()->routeIs('carros.hatch') ? 'border-red-600 text-gray-900 font-bold' : 
           'border-transparent text-gray-500 font-semibold hover:text-gray-700 hover:border-gray-300' }}">
            Hatch
        </a>

        <a href="{{ route('carros.sedan') }}"
           class="text-xl leading-tight border-b-2 py-2
           {{ request()->routeIs('carros.sedan') ? 'border-red-600 text-gray-900 font-bold' : 
           'border-transparent text-gray-500 font-semibold hover:text-gray-700 hover:border-gray-300' }}">
            Sedan
        </a>
        
    </div>
</x-slot>

    <div class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="mb-10 text-center text-3xl font-extrabold tracking-tight text-gray-900">Carros</h2>

            <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                        
                @isset($carros)
                    @foreach ($carros as $carro)
                        <a href="{{ route('carros.info', $carro['id']) }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 p-6 block">
                            
                            <div class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden mb-4">
                                <img src="{{ $carro['imagem_url'] }}" alt="{{ $carro['modelo'] }}" class="w-full h-64 object-contain">
                            </div>
                            
                            <h3 class="mt-4 text-lg font-semibold text-gray-900 text-center">
                                {{ $carro['modelo'] }}
                            </h3>

                            <h4 class="mt-1 text-center text-lg font-light text-gray-400">
                                {{ $carro['marca'] }}
                            </h4>
                            
                            <h4 class="mt-2 text-center text-lg font-normal">
                                {{ number_format($carro['quilometragem'], 0, ',', '.') }} Km
                            </h4>
                            
                            <p class="mt-3 text-xl font-bold text-black text-center">
                                R$ {{ number_format($carro['preco'], 2, ',', '.') }}
                            </p>

                        </a> 
                    @endforeach
                @endisset
            </div> 
        </div>
    </div>
</x-app-layout>
