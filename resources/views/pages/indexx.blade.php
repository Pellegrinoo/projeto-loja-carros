@extends('templates.template_index')

@section('nav')
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
    </a>
@endSection